<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orders_products')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.order.all_orders', compact('orders'));
    }


    // View Order Details
    public function view_orders($id)
    {
        $orderDetails = Order::with('orders_products')->where('id', $id)->first()->toArray();
        $userDetails = User::where('id', $orderDetails['user_id'])->first()->toArray();
        $orderStatus = OrderStatus::where('status', 1)->get()->toArray();
        return view('admin.order.order_details', compact('orderDetails', 'userDetails', 'orderStatus'));
    }


    // Update Order Status
    public function order_status_update(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // Update Order Status
            Order::where('id', $data['order_id'])->update(['order_status' => $data['order_status']]);
            return redirect()->back()->with('message', "Order Status Updated Successfully !");
        }
    }
}
