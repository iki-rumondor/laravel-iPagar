@extends('layouts.admin')

@section('content')
    @include('partials.sidebar')
    <div id="main" class="">

        @include('partials.navbar')
        <div class="main-content container-fluid">
            <div class="page-title">
                <h3>Rekomendasi Produk iPagar</h3>
                <p class="text-subtitle text-muted">Berikut beberapa rekomendasi produk yang bisa dijadikan referensi oleh
                    customer</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-lg-7 col-12">
                                <div class="card-body">
                                    <p class="card-title fw-bold">
                                        Pagar: Model 1
                                    </p>
                                    <p class="card-text text-ellipsis">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid nihil, molestias, iure accusantium quis deserunt rerum itaque sed corrupti minus, ipsa culpa inventore quia.
                                    </p>
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#orderModal">Pesan Sekarang</button>
                                </div>
                            </div>
                            <div class="col-lg-5 col-12">
                                <img src="{{ asset('admin_assets/images/pagar/img1.jpg') }}" alt="element 01"
                                    class="h-100 w-100 rounded-right">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-lg-7 col-12">
                                <div class="card-body">
                                    <p class="card-title fw-bold">
                                        Pagar: Model 2
                                    </p>
                                    <p class="card-text text-ellipsis">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid nihil, molestias, iure accusantium quis deserunt rerum itaque sed corrupti minus, ipsa culpa inventore quia.
                                    </p>
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#orderModal">Pesan Sekarang</button>
                                </div>
                            </div>
                            <div class="col-lg-5 col-12">
                                <img src="{{ asset('admin_assets/images/pagar/img2.jpg') }}" alt="element 01"
                                    class="h-100 w-100 rounded-right">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-lg-7 col-12">
                                <div class="card-body">
                                    <p class="card-title fw-bold">
                                        Pagar: Model 3
                                    </p>
                                    <p class="card-text text-ellipsis">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid nihil, molestias, iure accusantium quis deserunt rerum itaque sed corrupti minus, ipsa culpa inventore quia.
                                    </p>
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#orderModal">Pesan Sekarang</button>
                                </div>
                            </div>
                            <div class="col-lg-5 col-12">
                                <img src="{{ asset('admin_assets/images/pagar/img3.jpg') }}" alt="element 01"
                                    class="h-100 w-100 rounded-right">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                            <div class="row no-gutters">
                                <div class="col-lg-7 col-12">
                                <div class="card-body">
                                    <p class="card-title fw-bold">
                                        Pengaman Jendela: Model 1
                                    </p>
                                    <p class="card-text text-ellipsis">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid nihil, molestias, iure accusantium quis deserunt rerum itaque sed corrupti minus, ipsa culpa inventore quia.
                                    </p>
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#orderModal">Pesan Sekarang</button>
                                </div>
                            </div>
                            <div class="col-lg-5 col-12">
                                <img src="{{ asset('admin_assets/images/jendela/img1.jpg') }}"  alt="element 01"
                                    class="h-100 w-100 rounded-right overflow-hidden">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-lg-7 col-12">
                                <div class="card-body">
                                    <p class="card-title fw-bold">
                                        Pengaman Jendela: Model 2
                                    </p>
                                    <p class="card-text text-ellipsis">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid nihil, molestias, iure accusantium quis deserunt rerum itaque sed corrupti minus, ipsa culpa inventore quia.
                                    </p>
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#orderModal">Pesan Sekarang</button>
                                </div>
                            </div>
                            <div class="col-lg-5 col-12">
                                <img src="{{ asset('admin_assets/images/jendela/img2.jpg') }}" alt="element 01"
                                    class="h-100 w-100 rounded-right">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                            <div class="row no-gutters">
                                <div class="col-lg-7 col-12">
                                <div class="card-body">
                                    <p class="card-title fw-bold">
                                        Pengaman Jendela: Model 3
                                    </p>
                                    <p class="card-text text-ellipsis">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid nihil, molestias, iure accusantium quis deserunt rerum itaque sed corrupti minus, ipsa culpa inventore quia.
                                    </p>
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#orderModal">Pesan Sekarang</button>
                                </div>
                            </div>
                            <div class="col-lg-5 col-12">
                                <img src="{{ asset('admin_assets/images/jendela/img3.jpg') }}"  alt="element 01"
                                    class="h-100 w-100 rounded-right overflow-hidden">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    @push('modals')
        <div class="modal fade text-left" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="orderModalLabel">Pesan Sekarang </h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <form action="/customer/order" class="form" method="post">
                        @csrf
                        <div class="modal-body">
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Pesan</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endpush
@endsection
