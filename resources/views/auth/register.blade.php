@extends('layouts.app')

@section('content')
{{-- <div class="container">
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
</div> --}}


<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تسجيل الدخول لنظام </title>

    <!-- Font Icon -->
    {{-- <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css"> --}}

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/reg/css/style.css') }}">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                        <form method="POST" action="{{ route('register') }}" class="signup-form">
                            @csrf
                        <h2 class="form-title">انشاء حساب</h2>
                        <div class="form-group">
                            <input type="text" class="form-input  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus name="name" id="name" placeholder="الأسم "/>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" name="email" id="email" placeholder="البريد الإلكتروني"/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" name="password" id="password" placeholder="كلمة المرور"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" id="password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password" placeholder="تأكيد كلمة المرور"/>
                        </div>
                        {{-- <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div> --}}
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="التسجيل"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        هل لديك حساب من قبل ؟ <a href="{{ route('login') }}" class="loginhere-link">تسجيل الدخول</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
   
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
@endsection
