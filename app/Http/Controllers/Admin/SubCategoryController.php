<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Section;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::with(['category'])->get();
        return view('admin.subcategory.index', compact('subcategories'));
    }


    // Create Sub Category
    public function create(Request $request)
    {
        // Get Section With Category
        $categories = Section::with('categories')->get();
        $categories = json_decode(json_encode($categories), true);

        return view('admin.subcategory.create', compact('categories'));
    }




    // Update Sub Category To First Get ID
    public function edit($id)
    {
        // Get Section With Category
        $categories = Section::with('categories')->get()->toArray();
        $subcategory = Subcategory::find($id);
        return view('admin.subcategory.edit', compact('subcategory', 'categories'));
    }




    // Store Sub Category In Database
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $subcategory = new Subcategory();
            $subcategory->category_id = $data['category_id'];
            $subcategory->name = $data['name'];
            $subcategory->save();
            return redirect()->back()->with('message', "Sub Category Created Successfully 🙂");
        }
    }




    // Update Sub Category In Database
    public function update(Request $request, $id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->update();
        return redirect('/subcategories')->with('message', "Category Updated Successfully!");
    }




    // Change Ststus Usign Ajax 
    public function change_status(Request $request)
    {
        $subcategory = Subcategory::find($request->subcategory_id);
        $subcategory->status = $request->status;
        $subcategory->save();
    }



    // Delete Sub Category
    public function destroy($id)
    {
        $delete_data = Subcategory::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('message', "Sub Category Deleted Successfully 🥲");
        }
    }
}
