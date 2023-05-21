@extends('home.layout')

@section('content')
    @include('home.navbar')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-6 fw-bolder text-white mb-2">iPagar: Layanan Pembuatan Pagar, Pengaman Jendela,
                            Dan Pengelasan
                        </h1>
                        <p class="lead fw-normal text-white-50 mb-4">Nikmati banyak layanan yang dapat memanjakan anda untuk
                            pembuatan pagar, pengaman jendela, dan pengelasan</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="/auth/login">Pesan Sekarang</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="/auth/register">Daftar Akun</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                    <img class="img-fluid rounded-3 my-5" src="assets/undraw_online_stats_0g94.svg" alt="..." />
                </div>
            </div>
        </div>
    </header>

    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h2 class="fw-bolder mb-0">Layanan untuk pelanggan iPagar</h2>
                </div>
                <div class="col-lg-8">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-collection"></i></div>
                            <h2 class="h5">Layanan Pemesanan Online</h2>
                            <p class="mb-0">Anda dapat memilih jenis layanan, tanggal, dan jam yang diinginkan melalui
                                aplikasi secara online.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-building"></i></div>
                            <h2 class="h5">Pembaruan Proyek Langsung</h2>
                            <p class="mb-0">Memberikan akses kepada anda untuk melacak progress proyek secara langsung
                                melalui aplikasi.</p>
                        </div>
                        <div class="col mb-5 mb-md-0 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-toggles2"></i></div>
                            <h2 class="h5">Konsultasi Virtual</h2>
                            <p class="mb-0">Menyediakan fitur konsultasi virtual melalui chat langsung sehingga anda dapat
                                berinteraksi langsung dengan ahli secara lebih personal.</p>
                        </div>
                        <div class="col h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-toggles2"></i></div>
                            <h2 class="h5">Rekomendasi Produk</h2>
                            <p class="mb-0">Menyediakan beberapa rekomendasi tentang produk dan material yang digunakan dalam pembuatan pagar, pengelasan, dan pengaman jendela.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial section-->
    <div class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10 col-xl-7">
                    <div class="text-center">
                        <div class="fs-4 mb-4 fst-italic">"Jangan ragu untuk menghubungi kami melalui website kami untuk
                            mendapatkan konsultasi gratis dan penawaran terbaik. Keamanan dan kepuasan Anda adalah prioritas
                            kami. Segera wujudkan proyek konstruksi Anda dengan bantuan jasa pembuat pagar, pengaman
                            jendela, dan pengelasan terbaik!"</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="fw-bold">
                                Ilham Rumondor
                                <span class="fw-bold text-primary mx-1">/</span>
                                CEO, iPagar
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
