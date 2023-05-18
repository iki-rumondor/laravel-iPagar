@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 mx-auto">
                <div class="card pt-4">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <h3>Login</h3>
                            <p>Please sign in to continue to iPagar.</p>
                        </div>
                        <form action="auth/verify" method="post" autocomplete="off">
                            <div class="form-group position-relative has-icon-left">
                                <label for="username">Username</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="username" placeholder="Masukkan Username">
                                    <div class="form-control-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left">
                                <div class="clearfix">
                                    <label for="password">Password</label>
                                </div>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
                                    <div class="form-control-icon">
                                        <i data-feather="lock"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix text-center">
                                <button class="btn btn-primary">Masuk</button>
                            </div>
                        </form>
                        <div class="divider">
                            <div class="divider-text">OR</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 m-auto">
                                <a href="/auth/register" class="btn btn-block mb-2 btn-secondary">
                                    Daftar Akun
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
