@extends('pre-doc.master')
@section('title','Register')

@section('content')
<div class="container vh-100  d-flex align-items-center justify-content-center">

    <div class="p-lg-5 p-sm-3 d-flex flex-column align-items-center justify-content-center" style=" width: 470px;background: #1556D9; border-radius: 5%;">

        <h1 class="krona-one-regular text-center text-light mt-3">Pre Doc</h1>
        <h5 class="cairo-bold text-center mb-2 text-light">تسجل الدخول</h5>
        <form method="POST" action="{{ route('register') }}" class="d-flex flex-column align-items-center justify-content-center" dir="rtl">
            @csrf
            <input type="text" class="form-control @error('name') is-invalid @enderror cairo-bold text-center  m-4" style="width: 300px;height: 45px;" id="name" value="{{ old('name') }}"  name="name" placeholder="الاسم" required autocomplete="name" autofocus>
            @error('name')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row">
                <div class="form-floating mt-2 ms-3 me-3">
                    <input type="date" class="form-control cairo-bold text-center " style="width: 160px;height: 45px;" id="birth" value="{{ old('birth') }}"  name="birth" placeholder="تاريخ الميلاد" required autocomplete="birth" autofocus>
                    <label for="birth" class="text-center cairo-bold">تاريخ الميلاد</label>
                </div>
                <div class="form-floating mt-4" >
        <select class="text-center cairo-bold" name="sex" id="sex" style="border-radius: 10%; width: 160px; height: 45px;">
            <option value="male">ذكر</option>
            <option value="female">انثى</option>

        </select>
        </div>
            </div>
            <input type="text" class="form-control cairo-bold text-center  mt-4" style="width: 300px;height: 45px;" id="gov" value="{{ old('gov') }}"  name="gov" placeholder="المحافظة" required autocomplete="gov" autofocus>

            <input type="email" class="form-control @error('email') is-invalid @enderror cairo-bold text-center  m-4" style="width: 300px;height: 45px;" id="email" value="{{ old('email') }}"  name="email" placeholder="البريد الالكتروني" required autocomplete="email" autofocus>
            @error('email')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="password" class="form-control cairo-bold text-center mb-4 " style="width: 300px;height: 45px;" id="password" name="password" placeholder="كلمة السر">
            @error('password')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <button class="btn btn-light cairo-bold text-center  mb-4" style="height: 45px;" type="submit">{{ __('تسجيل مستخدم جديد') }}</button>

        </form>
        <a href="/login" class="cairo-bold text-light pb-3" style="text-decoration: none;">تمتلك حساب من قبل؟</a>
    </div>
    

                                
</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
