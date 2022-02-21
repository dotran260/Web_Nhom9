<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // use Session;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

session_start();

class CategoryController extends Controller
{
    public function add_category($category_id)
    {
        return Category::find($category_id);
        // return view('admin.add_category');
    }
    public function add_category_all()
    {
        return Category::all();
        // return view('admin.add_category');
    }
    public function save_category(Request $request)
    {
        $data = $request->all();
        $category = new Category();

        $category->category_name   = $data['category_name'];
        $category->category_desc   = $data['category_desc'];
        $category->category_value  = $data['category_value'];
        $category->keywords        = $data['keywords'];
        $category->save();


        return Redirect::to('admin/add-category');
    }
    public function list_category()
    {
        $list_category      =   Category::get();
        $manager_category  =   view('admin.list_category')->with(compact('list_category'));
        return view('admin_index')->with(compact('manager_category'));
    }
    public function hidden_category($category_id)
    {
        Category::where('category_id', $category_id)->update(['category_value' => 0]);
        return Redirect::to('admin/list-category');
    }

    // [GET]
    public function active_category($category_id)
    {
        Category::where('category_id', $category_id)->update(['category_value' => 1]);
        return Redirect::to('admin/list-category');
    }
    public function delete_category($category_id)
    {
        Category::where('category_id', $category_id)->delete();
        return Redirect::to('admin/list-category');
    }

    public function update_category(Request $request, $category_id)
    {
        $data = $request->all();
        $category = Category::find($category_id);

        $category->category_name   = $data['category_name'];
        $category->category_desc   = $data['category_desc'];
        $category->keywords        = $data['keywords'];
        $category->save();

        return Redirect::to('admin/list-category');
    }

    public function edit_category($category_id)
    {
        $edit_category      =  Category::where('category_id', $category_id)->get();
        $manager_category   =  view('admin.edit_category')->with(compact('edit_category'));
        return view('admin_index')->with(compact('manager_category'));
    }
}
