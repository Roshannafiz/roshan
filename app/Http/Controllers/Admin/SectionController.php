<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('admin.section.index', compact('sections'));
    }

    // Create Section
    public function create()
    {
        return view('admin.section.create');
    }

    // Store All Section In Database
    public function store(Request $request)
    {
        $section = new Section();
        $section->name = $request->name;
        $section->save();
        return redirect()->back()->with('message', "Section Created Successfully!");
    }

    // Update Section To First Get ID
    public function edit($id)
    {
        $section = Section::find($id);
        return view('admin.section.edit', compact('section'));
    }

    // Update Section In Database
    public function update(Request $request, $id)
    {
        $section = Section::find($id);
        $section->name = $request->name;
        $section->update();
        return redirect('/sections')->with('message', "Sections Updated Successfully!");
    }

    // Change Ststus Usign Ajax 
    public function change_status(Request $request)
    {
        $section = Section::find($request->section_id);
        $section->status = $request->status;
        $section->save();
    }

    // Delete Section
    public function destroy($id)
    {
        $delete_data = Section::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('message', "Section Deleted Successfully");
        }
    }
}   
