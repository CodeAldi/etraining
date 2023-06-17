@extends('layouts.authPage.main')

@section('content')
    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
        <div class="login-brand">
            <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
        </div>
    
        <div class="card card-primary">
            <div class="card-header">
                <h4>Register</h4>
            </div>
    
            <div class="card-body">
                <form method="POST" action="{{ route('register.simpan') }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">Full Name</label>
                        <input id="first_name" type="text" class="form-control" name="name" autofocus required>
                    </div>
    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @if (session('emailError'))is-invalid @endif" name="email" required>
                        @if (session('emailError'))
                        <div class="invalid-feedback">
                            {{ session('emailError') }}
                        </div>
                        @endif
                    </div>
    
                    <div class="form-group">
                        <label for="password" class="d-block">Password</label>
                        <input id="password" type="password" class="form-control pwstrength"
                            data-indicator="pwindicator" name="password" required autocomplete="new-password">
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
    
                    
    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="simple-footer">
            Copyright &copy; Stisla 2018
        </div>
    </div>
@endsection