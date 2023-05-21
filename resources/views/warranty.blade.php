@extends('layouts.admin')

@section('content')
    @include('partials.sidebar')
    <div id="main" class="">

        @include('partials.navbar')
        <div class="main-content container-fluid">
            <div class="page-title">
                <h3>Garansi iPagar</h3>
                <p class="text-subtitle text-muted">Nikmati layanan garansi yang disediakan iPagar untuk setiap produk jasa
                    yang telah selesai digunakan</p>
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
                                            <td>{{ $order->updated_at->format('d-m-Y') }}</td>
                                            <td>{{ $order->service }}</td>
                                            <td><span
                                                    class="badge {{ $order->status_warranty == 'Belum Diklaim' ? 'bg-danger' : 'bg-success' }}">{{ $order->status_warranty }}</span>
                                            </td>
                                            <td><button data-bs-toggle="modal" data-bs-target="#sendModal"
                                                    class="btn btn-primary btn-sm">Ajukan Keluhan</button></td>
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

@push('modals')
    <div class="modal fade text-left" id="sendModal" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="sendModalLabel">Ajukan Keluhan</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <form action="/customer/claim-warranty" class="form" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-body">
                            <label for="complaint_desc" class="sr-only">Deskripsi Keluhan</label>
                            <div class="form-group with-title">
                                <textarea rows="3" id="complaint_desc" class="form-control @error('complaint_desc') is-invalid @enderror"
                                    name="complaint_desc">{{ old('complaint_desc') }}</textarea>
                                @error('complaint_desc')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <label>Keluhanmu</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Ajukan Keluhan</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endpush
