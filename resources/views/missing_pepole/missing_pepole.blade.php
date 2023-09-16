@extends('layouts.master')

@section('content')
<div class="container" dir="rtl">
  <br>
  <div class="row justify-content-center">
    <div class="col-md-8">
      {{-- @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif --}}
  @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

  
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h4>إضافة شخص مفقود</h4>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('missing_people.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
              <div class="col-md-6 text-right">
                <label for="first_name_miss">الاسم </label>
                <input type="text" class="form-control @error('first_name_miss') is-invalid @enderror" id="first_name_miss" name="first_name_miss"  >
                @error('first_name_miss')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
              </div>

              <div class="col-md-6">
                <label for="last_name_miss">اللقب</label>
                <input type="text" class="form-control  @error('last_name_miss') is-invalid @enderror" id="last_name_miss" name="last_name_miss">
                @error('last_name_miss')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
              </div>

            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="birth_date">تاريخ الميلاد</label>
                <input type="date" class="form-control @error('birth_date') is-invalid @enderror" id="birth_date" name="birth_date">
                @error('birth_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
              </div>

              <div class="col-md-6">
                <label for="disappearance_date">تاريخ الاختفاء</label>
                <input type="date" class="form-control @error('disappearance_date') is-invalid @enderror" id="disappearance_date" name="disappearance_date">
                @error('disappearance_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="city_miss">المدينة</label>
                <input type="text" class="form-control @error('city_miss') is-invalid @enderror" id="city_miss" name="city_miss">
                @error('city_miss')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
              </div>

              <div class="col-md-6">
                <label for="address_street_miss">العنوان</label>
                <input type="text" class="form-control  @error('address_street_miss') is-invalid @enderror" id="address_street_miss" name="address_street_miss">
                @error('address_street_miss')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="phone_number_miss">رقم الهاتف</label>
                <input type="text" class="form-control @error('phone_number_miss') is-invalid @enderror" id="phone_number_miss" name="phone_number_miss">
                @error('phone_number_miss')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
              </div>

              <div class="col-md-6">
                <label for="gender">الجنس</label>
                <select class="form-control  @error('gender') is-invalid @enderror" id="gender" name="gender">
                  <option value="">الجنس</option>
                  <option value="ذكر">ذكر</option>
                  <option value="انثى">انثى</option>
                </select>
                @error('gender')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="clothing"> ملابس لابسها المفقود</label>
                <input type="text" class="form-control  @error('clothing') is-invalid @enderror" id="clothing" name="clothing">
                @error('clothing')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
              </div>

              <div class="col-md-6">
                <label for="distinctive_features">علامات مميزة</label>
                <input type="text" class="form-control @error('distinctive_features') is-invalid @enderror" id="distinctive_features" name="distinctive_features">
                @error('distinctive_features')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
              </div>
            </div>

            <div class="form-group">
              <label for="additional_info">ملاحظات - معلومات اضافية</label>
              <textarea class="form-control" id="additional_info" name="additional_info" rows="5"></textarea>
              @error('additional_info')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
            </div>
            <br>
            <div class="form-group">
              <label for="image">الصورة</label>
              <input type="file" class="form-control-file" id="image" name="image">
            </div>
<br>
            <!-- معلومات المبلغ -->
            <div class="card-header bg-primary text-white">
              <h4>معلومات المبلغ</h4>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="first_name">الاسم</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name">
                @error('first_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
              </div>

              <div class="col-md-6">
                <label for="last_name">اللقب</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name">
                @error('last_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
              </div>
            </div>

            <div class="form-group">
              <label for="last_name">المدينة</label>
              <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city">
              @error('city')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label for="phone_number">رقم الهاتف</label>
                <input type="text" class="form-control  @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number">
                @error('phone_number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
              </div>

              <div class="col-md-6">
                <label for="whtas_phone_number">رقم هاتف الوتس اب</label>
                <input type="text" class="form-control @error('whtas_phone_number') is-invalid @enderror" id="whtas_phone_number" name="whtas_phone_number">
                @error('whtas_phone_number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
              </div>
            </div>

            <div class="form-group">
              <label for="rrmp">صلة القرابة</label>
              <input type="text" class="form-control @error('rrmp') is-invalid @enderror" id="rrmp" name="rrmp">
              @error('rrmp')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
            </div>

            <div class="form-group">
              <label for="email">البريد الالكتروني</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
              @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
            </div>

            <div class="form-group">
              <label for="address_street">عنوان السكن</label>
              <input type="text" class="form-control @error('address_street') is-invalid @enderror" id="address_street" name="address_street">
              @error('address_street')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
            </div>

            <br>
            <div class="form-group row">
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary" style="width: 100%;">
                  إضافة
                </button>
              </div>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

