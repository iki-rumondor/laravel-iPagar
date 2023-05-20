<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    protected $services = [
        'Pembuatan Pagar',
        'Pemasangan Pengaman Jendela',
        'Pengelasan',
    ];

    protected $desa = [
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

    public function index()
    {

        return view('ordering', [
            'title' => 'Order Jasa',
            'services' => $this->services,
            'desa' => $this->desa,
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

    public function viewWarranty()
    {
        return view('warranty', [
            'title' => 'Order Jasa',
            'orders' => auth()->user()->orders->where('status', 'Selesai'),
        ]);
    }

    public function viewGallery()
    {
        return view('gallery', [
            'title' => 'Rekomendasi Produk',
            'services' => $this->services,
            'desa' => $this->desa,
            'orders' => auth()->user()->orders->where('status', 'Selesai'),
        ]);
    }
}
