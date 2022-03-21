<?php

namespace App\Http\Controllers\Admin\Admin_Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Session;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    // Admin Login Page
    public function index()
    {
        return view('admin/auth-admin/admin_login');
    }




    // Admin Register Page
    public function admin_register()
    {
        return view('admin.auth-admin.admin_register');
    }

    // Store Admin In Database
    public function store(Request $request)
    {
        $admin = new Admin();
        // Admin Image
        if ($request->hasFile('admin_image')) {
            $file = $request->file('admin_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-admin', $filename);
            $admin->admin_image = $filename;
        }
        $admin->admin_email = $request->admin_email;
        $admin->admin_name = $request->admin_name;
        $admin->admin_password = md5($request->admin_password);
        $admin->admin_phone = $request->admin_phone;
        $admin->admin_address = $request->admin_address;
        $admin->save();
        return redirect()->back()->with('message', "Admin Created Successfully!");
    }



    // Admin-Login To Go Dashboard
    public function show_dashboard(Request $request)
    {
        $admin_email = $request->email;
        $admin_password = md5($request->password);
        $result = Admin::where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();

        if ($result) {
            Session::put('id', $result->id);
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_email', $result->admin_email);
            Session::put('admin_phone', $result->admin_phone);
            Session::put('admin_address',  $result->admin_address);
            Session::put('admin_image', $result->admin_image);
            return redirect('/dashboard');
        } else {
            return redirect('/admins')->with('error_message', "Email Or Password Invalid!");
        }
    }

    // Admin Logout
    public function logout()
    {
        Session::flush();
        return redirect('/admins');
    }
}
