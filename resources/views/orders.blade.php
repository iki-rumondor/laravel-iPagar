@extends('layouts.admin')

@section('content')
    @include('partials.sidebar')
    <div id="main" class="">

        @include('partials.navbar')
        <div class="main-content container-fluid">
            <div class="page-title">
                <h3>Order iPagar</h3>
                <p class="text-subtitle text-muted">Semua request pelayanan yang diajukan pelanggan</p>
            </div>

            <div class="row">
                <div class="card">
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive" style="max-height:420px">
                            <table class="table mb-0" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama Customer</th>
                                        <th>Alamat</th>
                                        <th>Jasa Yang Dipesan</th>
                                        <th>Request Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->user->username }}</td>
                                            <td>{{ sprintf('%s (%s)', $order->address, $order->desa) }}</td>
                                            <td>{{ $order->service }}</td>
                                            <td>{{ $order->req_date }}</td>
                                            <td>
                                                @if ($order->status == 'Diajukan')
                                                    <a class="btn btn-sm btn-success p-1" data-service="{{ $order->service }}"
                                                        data-id="{{ $order->id }}"><i data-feather="check"></i></a>
                                                    <a class="btn btn-sm btn-danger p-1" data-service="{{ $order->service }}"
                                                        data-id="{{ $order->id }}"><i data-feather="x"></i></a>
                                                @elseif($order->status == 'Disetujui')
                                                    <a class="btn btn-sm btn-primary p-1" data-service="{{ $order->service }}"
                                                        data-id="{{ $order->id }}">Finish</a>
                                                @else
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

@push('scripts')
    <script>
        $('.btn-success').click(function() {
            Swal.fire({
                title: 'Terima Permintaan Jasa  ' + $(this).data('service'),
                text: "Tekan tombol terima untuk setuju permintaan jasa",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Terima'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace("/admin/verify-order/" + $(this).data('id'));
                }
            })
        })

        $('.btn-danger').click(function() {
            Swal.fire({
                title: 'Tolak Permintaan Jasa  ' + $(this).data('service'),
                text: "Tekan tombol tolak untuk konfirmasi penolakan permintaan jasa",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Tolak'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace("/admin/deny-order/" + $(this).data('id'));
                }
            })
        })

        $('.btn-primary').click(function() {
            Swal.fire({
                title: 'Permintaan Jasa  ' + $(this).data('service'),
                text: "Tekan tombol finish untuk konfirmasi permintaan jasa telah selesai dilaksanakan",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Finish'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace("/admin/finish-order/" + $(this).data('id'));
                }
            })
        })
    </script>
@endpush
