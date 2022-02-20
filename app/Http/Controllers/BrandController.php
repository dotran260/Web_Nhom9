<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // use Session;
use App\Models\Brand;
use Illuminate\Support\Facades\Redirect;

class BrandController extends Controller
{
    public function add_brand()
    {
        return view('admin.add_brand');
    }
    public function save_brand(Request $request)
    {
        $data = $request->all();
        $brand = new Brand();

        $brand->brand_name   = $data['brand_name'];
        $brand->brand_desc   = $data['brand_desc'];
        $brand->brand_value  = $data['brand_value'];
        $brand->keywords        = $data['keywords'];
        $brand->save();


        return Redirect::to('admin/add-brand');
    }
    public function list_brand()
    {
        $list_brand      =   Brand::get();
        $manager_brand  =   view('admin.list_brand')->with(compact('list_brand'));
        return view('admin_index')->with(compact('manager_brand'));
    }
    public function hidden_brand($brand_id)
    {
        Brand::where('brand_id', $brand_id)->update(['brand_value' => 0]);
        return Redirect::to('admin/list-brand');
    }

    // [GET]
    public function active_brand($brand_id)
    {
        Brand::where('brand_id', $brand_id)->update(['brand_value' => 1]);
        return Redirect::to('admin/list-brand');
    }
    public function delete_brand($brand_id)
    {
        Brand::where('brand_id', $brand_id)->delete();
        return Redirect::to('admin/list-brand');
    }

    public function update_brand(Request $request, $brand_id)
    {
        $data = $request->all();
        $brand = Brand::find($brand_id); 
        $brand->brand_name   = $data['brand_name'];
        $brand->brand_desc   = $data['brand_desc'];
        $brand->keywords        = $data['keywords'];
        $brand->save();
        
        return Redirect::to('admin/list-brand');
    }

    public function edit_brand($brand_id)
    {
        $edit_brand      =  Brand::where('brand_id', $brand_id)->get();
        $manager_brand   =  view('admin.edit_brand')->with(compact('edit_brand'));
        return view('admin_index')->with(compact('manager_brand'));
    }
}
