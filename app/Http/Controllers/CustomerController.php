<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $services = [
            'Pembuatan Pagar',
            'Pemasangan Pengaman Jendela',
            'Pengelasan',
        ];

        $desa = [
            'Biyonga',
            'Bolihuangga',
            'Bongohulawa',
            'Bulota',
            'Dutulanaa',
            'Hepuhulawa',
            'Hunggaluwa',
            'Hutuo',
            'Kayubulan',
            'Kayumerah',
            'Malahu',
            'Polohungo',
            'Tenilo',
            'Tilihuwa' 
        ];

        return view('ordering', [
            'title' => 'Order Jasa',
            'services' => $services,
            'desa' => $desa,
            'orders' => auth()->user()->orders,
        ]);
    }

    public function order(Request $request)
    {
        $validatedData = $request->validate([
            "req_date" => "required|date|after_or_equal:tomorrow",
            "service" => "required",
            "address" => "required",
            "desa" => "required",
        ]);

        $validatedData['user_id'] = \auth()->user()->id;
        $validatedData['status'] = 'Diajukan';

        Order::create($validatedData);

        return \back()->with('success', 'Berhasil mengajukan pemesanan jasa');
    }
}
