@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <h3>Daftar Akun</h3>
                        <p class="text-muted">Data yang anda masukkan akan kami jaga dan tidak akan disalahgunakan</p>
                    </div>
                    <form action="/auth/register" method="post">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Username</label>
                                    <input type="text" id="first-name-column" class="form-control"
                                        name="fname-column" placeholder="Masukkan Username">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">Password</label>
                                    <input type="text" id="last-name-column" class="form-control"
                                        name="lname-column" placeholder="Masukkan Password">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="username-column">Nomor Hp</label>
                                    <input type="text" id="username-column" class="form-control"
                                        name="username-column" placeholder="Masukkan Nomor Handphone">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country-floating">Konfirmasi Password</label>
                                    <input type="text" id="country-floating" class="form-control"
                                        name="country-floating" placeholder="Ulangi Password">
                                </div>
                            </div>
                        </diV>

                        <a href="/auth/login">Sudah Punya Akun? Silahkan Login</a>
                        <div class="clearfix">
                            <button class="btn btn-primary float-end">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
