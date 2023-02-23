<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use App\Models\Order;
use Carbon\Carbon;


class AdminController extends Controller
{
    public function dashboard(){
        $totalUsers = User::where('role_as', '0')->count();
        $totalItem = Item::count();
        $todayDate = Carbon::now()->format('Y-m-d');

        $totalWaitingOrders = Order::where('order_status', '0')->whereDate('created_at',$todayDate)->count();
        $totalProcessingOrders = Order::where('order_status', '1')->whereDate('created_at',$todayDate)->count();
        $totalDelieveredOrders = Order::where('order_status', '2')->whereDate('created_at',$todayDate)->count();

        return view('admin.dashboard', compact('totalUsers','totalItem','totalWaitingOrders','totalProcessingOrders','totalDelieveredOrders'));
    }

    public function items(){        
        $items = Item::get();
        return view('admin.item', compact('items'));
    }

    public function users(){        
        $users = User::where('role_as', 0)->get();
        return view('admin.user', compact('users'));
    }

    public function orders(){        
        $orders = Order::get();
        return view('admin.order', compact('orders'));
    }

    public function updateStatus($id, $status){
        $order = Order::findOrFail($id);
        $order->update([
            'order_status' => $status
        ]);
        
        return redirect('/admin/orders');
    }
}
