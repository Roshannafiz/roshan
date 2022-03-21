<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.index', compact('brands'));
    }



    // Create Brand
    public function create()
    {
        return view('admin.brand.create');
    }



    // Store Brand In Database
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $brand = new Brand();
            $brand->name = $data['brand_name'];
            $brand->save();
            return redirect()->back()->with('message', "Brand Created Successfully 🙂");
        }
    }



    // Update Brand To First Get ID
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.brand.edit', compact('brand'));
    }



    // Update Brand In Database
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->name = $request->brand_name;
        $brand->update();
        return redirect('/brands')->with('message', "Brand Updated Successfully 😊");
    }





    // Change Ststus Usign Ajax 
    public function change_status(Request $request)
    {
        $brand = Brand::find($request->brand_id);
        $brand->status = $request->status;
        $brand->save();
    }




    // Delete Brand
    public function destroy($id)
    {
        $delete_data = Brand::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('message', "Brand Deleted Successfully 🤯");
        }
    }
}
