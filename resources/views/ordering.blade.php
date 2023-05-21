@extends('layouts.admin')

@section('content')
    @include('partials.sidebar')
    <div id="main" class="">

        @include('partials.navbar')
        <div class="main-content container-fluid">
            <div class="page-title">
                <h3>Order Jasa</h3>
                <p class="text-subtitle text-muted">Silahkan lengkapi data untuk melakukan pemesanan layanan iPagar</p>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-header">
                                <h4 class="card-title">{{ auth()->user()->username }} - {{ auth()->user()->level }}</h4>
                                <h6 class="card-subtitle">{{ auth()->user()->phone_num }}</h6>
                            </div>
                            <hr>

                            <div class="card-body">
                                <h4 class="card-title mb-3">Isi Data Pemesanan</h4>
                                <form action="/customer/order" class="form" method="post">
                                    @csrf
                                    <div class="form-body">
                                        <div class="date" data-provide="datepicker">
                                            <div class="form-group">
                                                <label for="req_date" class="sr-only">Request Tanggal Pelayanan</label>
                                                <input autocomplete="off" type="text" name="req_date" id="req_date"
                                                    class="form-control @error('req_date') is-invalid @enderror"
                                                    placeholder="Bulan/Tanggal/Tahun" value="{{ old('req_date') }}">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-th"></span>
                                                    </div>
                                                @error('req_date')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="service" class="sr-only">Jasa yang dipesan</label>
                                            <select id="service" name="service"
                                                class="form-select @error('service') is-invalid @enderror">
                                                @foreach ($services as $service)
                                                    <option value="{{ $service }}">{{ $service }}</option>
                                                @endforeach
                                            </select>
                                            @error('service')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="address" class="sr-only">Alamat Rumah</label>
                                            <input type="text" id="address"
                                                class="form-control @error('address') is-invalid @enderror"
                                                placeholder="Masukkan Alamat Rumah" name="address" value="{{ old('req_date') }}">
                                            @error('address')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="desa" class="sr-only">Desa</label>
                                            <select name="desa" name="desa"
                                                class="form-select @error('desa') is-invalid @enderror">
                                                @foreach ($desa as $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                                @error('desa')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-actions d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">History Pemesanan Jasa</h4>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <div class="table-responsive" style="max-height:420px">
                                <table class="table mb-0" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Tanggal Request</th>
                                            <th>Jasa Yang Dipesan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                        @if ($order->status == 'Selesai')
                                            @continue
                                        @endif
                                            <tr>
                                                <td>{{ $order->req_date }}</td>
                                                <td>{{ $order->service }}</td>
                                                <td><span class="badge @if($order->status == 'Diajukan') bg-dark @elseif($order->status == 'Disetujui') bg-success @else bg-danger  @endif">{{ $order->status }}</span></td>
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


    </div>
@endsection
