@extends('pre-doc.master')
@section('title','Login')

@section('content')
<div class="container vh-100  d-flex align-items-center justify-content-center">

    <div class="p-lg-5 p-sm-3 d-flex flex-column align-items-center justify-content-center" style="background: #1556D9; border-radius: 10%;">

        <h1 class="krona-one-regular text-center text-light p-4">Pre Doc</h1>
        <h5 class="cairo-bold text-center mb-2 text-light">تسجل الدخول</h5>
        <form method="POST" action="{{ route('login') }}" class="d-flex flex-column align-items-center justify-content-center">
            @csrf
            <input type="email" class="form-control @error('email') is-invalid @enderror cairo-bold text-center  m-4" style="width: 300px;height: 50px;" id="email" value="{{ old('email') }}"  name="email" placeholder="البريد الالكتروني" required autocomplete="email" autofocus>
            @error('email')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="password" class="form-control cairo-bold text-center mb-5 " style="width: 300px;height: 50px;" id="password" name="password" placeholder="كلمة السر">
            @error('password')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <button class="btn btn-light cairo-bold text-center mb-3" style="height: 50px;" type="submit">{{ __('تسجيل الدخول') }}</button>

        </form>
        <a href="/register" class="cairo-bold text-light pb-3" style="text-decoration: none;">مستخدم جديد؟</a>

    </div>
    

                                
</div>
<!-- <div class="container align-items-center justify-content-center d-flex">
    <div class="row align-items-center justify-content-center">
        <div class="col justify-content-center d-flex">
            <div class="card ">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row ">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col offset">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
