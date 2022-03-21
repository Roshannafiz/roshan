<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
use Session;

session_start();

class AdminController extends Controller
{
    public function dashboard()
    {
        $this->Admin_Auth_Check();
        return view('admin.dashboard');
    }

    // Check User Login Or Not
    public function Admin_Auth_Check()
    {
        $admin_id = Session::get('id');
        if ($admin_id) {
            return;
        } else {
            return redirect('/admins')->with('error_message', "Login Then Countinue!")->send();
        }
    }



    // Update Admin To First Get ID
    public function edit()
    {
        $admin_id = Session::get('id');
        $admins = Admin::where('id', $admin_id)->get();
        return view('admin.admin.edit', compact('admins', 'admin_id'));
    }



    // Update Admin In Database
    public function update(Request $request, $admin_id)
    {
        $admin = Admin::find($admin_id);

        $admin->admin_name = $request->admin_name;
        $admin->admin_email = $request->admin_email;
        $admin->admin_phone = $request->admin_phone;
        $admin->admin_address = $request->admin_address;

        // Admin Image
        if ($request->hasFile('admin_image')) {
            $path = 'admin/images/upload-admin/' . $admin->admin_image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('admin_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-admin', $filename);
            $admin->admin_image = $filename;
        }
        $admin->update();
        return redirect()->back()->with('message', "Admin Updated Successfully!");
    }
}
