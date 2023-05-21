<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('orders', [
            'title' => 'Order Jasa',
            'orders' => Order::where('status', 'Disetujui')->orWhere('status', 'Diajukan')->get(),
        ]);
    }

    public function verifyOrder(Order $order)
    {
        $order->update(['status' => 'Disetujui']);
        return \back()->with('success', 'Persetujuan berhasil');
    }

    public function denyOrder(Order $order)
    {
        $order->update(['status' => 'Tidak Disetujui']);
        return \back()->with('success', 'Persetujuan berhasil');
    }

    public function finishOrder(Order $order)
    {
        $order->update(['status' => 'Selesai']);
        $orders = $order->user->orders->where('status', 'Selesai')->count();

        if($orders > 100){
            $order->user->update(['level' => 'Pro']);
        }elseif($orders > 5){
            $order->user->update(['level' => 'Intermediate']);
        }

        return \back()->with('success', 'Persetujuan berhasil');
    }

    public function viewCustomers()
    {
        return view('customers', [
            'title' => 'Pelanggan iPagar',
            'customers' => User::all(),
        ]);
    }
}
