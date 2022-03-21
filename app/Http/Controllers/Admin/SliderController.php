<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }




    // Create Slider
    public function create(Request $request)
    {
        return view('admin.slider.create');
    }




    // Store Sliders In Database
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $slider = new Slider();
            $slider->top_title = $data['top_title'];
            $slider->title = $data['title'];
            $slider->sub_title = $data['sub_title'];
            $slider->btn_link = $data['btn_link'];

            // Slider Image
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('admin/images/upload-slider', $filename);
                $slider->image = $filename;
            }
            $slider->save();
            return redirect()->back()->with('message', "Slider Created Successfully 🙂");
        }
    }


    // Update Slider To First Get ID
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    // Update Slider In Database
    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        if ($request->hasFile('image')) {
            $path = 'admin/images/upload-slider/' . $slider->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-slider', $filename);
            $slider->image = $filename;
        }
        $slider->top_title = $request->top_title;
        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->btn_link = $request->btn_link;
        $slider->update();
        return redirect('/sliders')->with('message', "Slider Updated Successfully!");
    }


    // Change Ststus Usign Ajax 
    public function change_status(Request $request)
    {
        $slider = Slider::find($request->slider_id);
        $slider->status = $request->status;
        $slider->save();
    }



    // Delete Slider
    public function destroy($id)
    {
        $delete_data = Slider::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('message', "Slider Deleted Successfully 🤯");
        }
    }
}
