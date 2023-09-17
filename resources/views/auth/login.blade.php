@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align: center" class="card-header">{{ __('تسجيل الدخول') }}</div>

                <div class="card-body" dir="rtl">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('البريد الالكتروني') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('كلمة المرور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('تسجيل الدخول') }}
                                </button>

                             
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!doctype html>
<html lang="ar" dir="rtl">
  <head>

  	<title> تسجيل الدخول</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-user-o"></span>
                </div>
		      	<h3 class="text-center mb-4">تسجيل الدخول</h3>
                            <form method="POST" action="{{ route('login') }}" class="login-form">
                                @csrf
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left @error('email') is-invalid @enderror" placeholder="البريد الالكتروني"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus required>
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <br>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="كلمة المرور"  required>
	            </div>
                <br>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">التسجيل</button>
	            </div>
	            <div class="form-group d-md-flex">
	          
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	</body>
</html>


@endsection
