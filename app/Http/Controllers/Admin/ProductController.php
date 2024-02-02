<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\ProductImage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class ProductController extends Controller
{
    function product(){
        $products = Product::all();
        return view('backend.product.product', compact('products'));
    }

    // add product view
    function product_add(){
        $parent_categories = Category::where('parent_category_id', null)->get();
        $categories = Category::all();
        return view('backend.product.add_product', compact('parent_categories', 'categories'));
    }

    // getcategory with ajax
    function getcategory(Request $request){
        $opt='<option value="">Choise One</option>';
        $categories= Category::where('parent_category_id', $request->parent_category_id)->get();
       foreach ($categories as $category) {
         $opt .= '<option value="'.$category->id.'">'.$category->category_name.'</option>';
       }
       echo $opt;
    }

    // new product store
    function product_store(Request $request){
        $request->validate([
            'title' => 'required|max:255',
            'images' => 'required',
        ]);
        $product_id = Product::insertGetId([
            'parent_category_id' => $request->parent_category_id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'status' => $request->status,
            'description' => $request->description,
            'created_at'=> Carbon::now(),
        ]);

        // $thumbnails = $request->images;
        if ($request->images) {
            foreach ($request->images as $thumbnail) {
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'. $thumbnail->getClientOriginalExtension();
                $image = $manager->read($thumbnail);
                $image->save(public_path('images/product/'.$name_gen));
               ProductImage::insert([
                'product_id'=>$product_id,
                'images'=>$name_gen,
                'created_at'=>Carbon::now(),
               ]);
            }
        }
        return back()->with('succ', 'Product added successfully...');
    }

    // single product view or edit
    function product_show($id){
        $product = Product::find($id);
        $parent_categories = Category::where('parent_category_id', null)->get();
        $categories = Category::all();
        return view('backend.product.edit_product', compact('product', 'parent_categories', 'categories'));
    }

    // product delete
    function product_delete($id){
        $product = Product::find($id);
        $images = ProductImage::where('product_id', $product->id)->get();
        if ($images) {
            foreach ($images as $image) {
                $delete_from = public_path('images/product/'.$image->images);
                unlink($delete_from);
                $image->delete();
            }
        }
        $product->delete();
        return back()->with('succ', 'Product deleted...');
    }


    // product update
    function product_update(Request $request){
        $request->validate([
            'title' => 'required|max:255',
        ]);

        if ($request->images) {
            $product = Product::find($request->id);
            $images = ProductImage::where('product_id', $product->id)->get();
            if ($images) {
                foreach ($images as $image) {
                    $delete_from = public_path('images/product/'.$image->images);
                    unlink($delete_from);
                    $image->delete();
                }
            }
            Product::where('id', $request->id)->update([
                'parent_category_id' => $request->parent_category_id,
                'category_id' => $request->category_id,
                'title' => $request->title,
                'status' => $request->status,
                'description' => $request->description,
                'created_at'=> Carbon::now(),
            ]);

            if ($request->images) {
                foreach ($request->images as $thumbnail) {
                    $manager = new ImageManager(new Driver());
                    $name_gen = hexdec(uniqid()).'.'. $thumbnail->getClientOriginalExtension();
                    $image = $manager->read($thumbnail);
                    $image->save(public_path('images/product/'.$name_gen));
                   ProductImage::insert([
                    'product_id'=>$request->id,
                    'images'=>$name_gen,
                    'created_at'=>Carbon::now(),
                   ]);
                }
            }
            return back()->with('succ', 'Product added successfully...');
        }
        else{
            Product::where('id', $request->id)->update([
                'parent_category_id' => $request->parent_category_id,
                'category_id' => $request->category_id,
                'title' => $request->title,
                'status' => $request->status,
                'description' => $request->description,
                'created_at'=> Carbon::now(),
            ]);
            return back()->with('succ', 'Product added successfully...');
        }
    }
}
