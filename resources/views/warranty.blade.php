@extends('layouts.admin')

@section('content')
    @include('partials.sidebar')
    <div id="main" class="">

        @include('partials.navbar')
        <div class="main-content container-fluid">
            <div class="page-title">
                <h3>Garansi iPagar</h3>
                <p class="text-subtitle text-muted">Nikmati layanan garansi yang disediakan iPagar untuk setiap produk jasa yang telah selesai digunakan</p>
            </div>

            <div class="row">
                <div class="card">
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive" style="max-height:420px">
                            <table class="table mb-0" id="table1">
                                <thead>
                                    <tr>
                                        <th>Tanggal Selesai Pengerjaan</th>
                                        <th>Jasa Yang Dipesan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->req_date }}</td>
                                            <td>{{ $order->service }}</td>
                                            <td><span class="badge bg-success">{{ $order->status }}</span></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
