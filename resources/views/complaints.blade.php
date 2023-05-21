@extends('layouts.admin')

@section('content')
    @include('partials.sidebar')
    <div id="main" class="">

        @include('partials.navbar')
        <div class="main-content container-fluid">
            <div class="page-title">
                <h3>Keluhan Pelanggan iPagar</h3>
                <p class="text-subtitle text-muted">Semua keluhan pelanggan iPagar</p>
            </div>

            <div class="row">
                <div class="card">
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive" style="max-height:420px">
                            <table class="table mb-0" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama Pelanggan</th>
                                        <th>Jasa yang dipesan</th>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Keluhan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($complaints as $complaint)
                                        <tr>
                                            <td>{{ $complaint->order->user->username }}</td>
                                            <td>{{ $complaint->order->service }}</td>
                                            <td>{{ $complaint->order->req_date }}</td>
                                            <td>{{ $complaint->complaint_desc }}</td>
                                            <td><span class="badge {{ $complaint->status == 'Belum Selesai' ? 'bg-dark' : 'bg-warning' }}">{{ $complaint->status }}</span></td>
                                            <td>
                                                <a href="https://api.whatsapp.com/send?phone={{ $complaint->order->user->phone_num }}&text=Hai {{ $complaint->order->user->username }}, Terimakasih telah mengajukan keluhan terhadap produk kami, tim kami akan mengunjungi rumah anda pada tanggal: " class="btn btn-sm btn-success">Hubungi Konsumen</a>
                                                @if ($complaint->status == 'Belum Selesai')
                                                <a href="/admin/finish-complaint/{{ $complaint->id }}" class="btn btn-sm btn-primary">Selesai</a>
                                                    
                                                @endif
                                            </td>
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
