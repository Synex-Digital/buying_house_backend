<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;

use function Laravel\Prompts\alert;

class CategoryController extends Controller
{
    function category(){
        $categories = Category::latest()->get();
        return view('backend.category.category', compact('categories'));
    }
    function category_store(Request $request){
        $request->validate([
            'category_name' => 'required|max:255',
        ]);
       Category::insert([
        'parent_category_id' => $request->parent_category,
        'category_name' => $request->category_name,
        'status' => $request->status,
        'created_at' => Carbon::now(),
       ]);
       return back()->with('succ', 'Category Added...');
    }
    function category_show($id){
        $category = Category::find($id);
       return view('backend.category.category_edit', compact('category'));
    }
    function category_update(Request $request){
        $request->validate([
            'category_name' => 'required|max:255',
        ]);
       Category::where('id', $request->category_id)->update([
        'category_name' => $request->category_name,
        'status' => $request->status,
        'updated_at' => Carbon::now(),
       ]);
       return back()->with('succ', 'Category Updated...');
    }
    function category_delete($id){
       Category::where('id', $id)->delete();
       return back()->with('succ', 'Category Deleted...');

    }
}
