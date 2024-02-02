<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index(){
        return view('frontend.pages.home');
    }
    
    // frontend about view 
    function about(){
        return view('frontend.pages.about');
    }


    // service  view 
    function service(){
        return view('frontend.pages.service');
    }


    // products  view 
    function products(){
        $products = Product::all();
        $categories = Category::where('parent_category_id' , null)->get();
        return view('frontend.pages.products', compact('products', 'categories'));
    }


    // mission_and_vission  view 
    function mission_and_vission(){
        return view('frontend.pages.mission_and_vission');
    }


    // contact  view 
    function contact(){
        return view('frontend.pages.contact');
    }


    // contact  view 
    function product_details($id){
        $product = Product::find($id);
        // return $product;
        return view('frontend.pages.product_details', compact('product'));
    }


    // contact  view 
    function categories_product($id){
        $categories = Category::all();
        $products = Product::where('parent_category_id', $id)->get();
        return view('frontend.pages.categories_products', compact('products', 'categories'));
    }
}
