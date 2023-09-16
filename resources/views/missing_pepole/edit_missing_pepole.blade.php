

@extends('layouts1.admin')

@section('content')
<div class="container" dir="rtl">
<br>
<div class="row justify-content-center">
  <div class="col-md-8">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="card">
      <div class="card-header bg-primary text-white">
        <h4>تعديل شخص مفقود</h4>
      </div>
      <div class="card-body">
        <form method="POST" action="" enctype="multipart/form-data">
          @csrf

          <div class="form-group row">
            <div class="col-md-6">
              <label for="first_name_miss">الاسم </label>
              <input type="text" class="form-control" id="first_name_miss" name="first_name_miss" value="{{ $missingPerson->first_name_miss }}">
            </div>

            <div class="col-md-6">
                <label for="last_name_miss">اللقب</label>
                <input type="text" class="form-control" id="last_name_miss" name="last_name_miss" value="{{ $missingPerson->last_name_miss }}">
            
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-6">
                <label for="birth_date">تاريخ الميلاد</label>
                <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ $missingPerson->birth_date }}">
            </div>

            <div class="col-md-6">
                <label for="disappearance_date">تاريخ الاختفاء</label>
                <input type="date" class="form-control" id="disappearance_date" name="disappearance_date" value="{{ $missingPerson->disappearance_date }}">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-6">
                <label for="city_miss">المدينة</label>
                <input type="text" class="form-control" id="city_miss" name="city_miss" value="{{ $missingPerson->city_miss }}">            
            </div>

            <div class="col-md-6">
              <label for="address_street_miss">العنوان</label>
              <input type="text" class="form-control" id="address_street_miss" name="address_street_miss" value="{{ $missingPerson->address_street_miss }}">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label for="phone_number_miss">رقم الهاتف</label>
              <input type="text" class="form-control" id="phone_number_miss" name="phone_number_miss" value="{{ $missingPerson->phone_number_miss }}">
            </div>

            <div class="col-md-6">
              
                <label for="gender"> الجنس</label>
                <select name="gender" class="form-control @error('gender') is-invalid @enderror" id="country" tabindex="7">
                    <option value=""> اختر الجنس </option>
                    <option value="ذكر" @if ($missingPerson->gender == 'ذكر') selected @endif>ذكر</option>
                    <option value="انثى" @if ($missingPerson->gender == 'انثى') selected @endif>انثى</option>
                </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label for="clothing">اخر ملابس لابسها المفقود</label>
              <input type="text" class="form-control" id="clothing" name="clothing" value="{{ $missingPerson->clothing }}">
            </div>

            <div class="col-md-6">
              <label for="distinctive_features">علامات مميزة</label>
              <input type="text" class="form-control" id="distinctive_features" name="distinctive_features" value="{{ $missingPerson->distinctive_features }}">
            </div>
          </div>

          <div class="form-group">
            <label for="additional_info">ملاحظات - معلومات اضافية</label>
            <textarea class="form-control" id="additional_info" name="additional_info" value="{{ $missingPerson->additional_info }}" rows="5"></textarea>
          </div>

          <div class="form-group">
            <label for="image">الصورة</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <img src="{{ asset('images/' . $missingPerson->image) }}" height="80px" width="100px"  alt="غير مرفقة">
          </div>

          <!-- معلومات المبلغ -->
          <div class="card-header bg-primary text-white">
            <h4>معلومات المبلغ</h4>
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label for="first_name">الاسم</label>
              <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $missingPerson->first_name }}">
            </div>

            <div class="col-md-6">
              <label for="last_name">اللقب</label>
              <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $missingPerson->last_name }}">
            </div>
          </div>

          <div class="form-group">
            <label for="last_name">المدينة</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ $missingPerson->city }}">
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label for="phone_number">رقم الهاتف</label>
              <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $missingPerson->phone_number }}">
            </div>

            <div class="col-md-6">
              <label for="whtas_phone_number">رقم هاتف الوتس اب</label>
              <input type="text" class="form-control" id="whtas_phone_number" name="whtas_phone_number" value="{{ $missingPerson->whtas_phone_number }}">
            </div>
          </div>

          <div class="form-group">
            <label for="rrmp">صلة القرابة</label>
            <input type="text" class="form-control" id="rrmp" name="rrmp" value="{{ $missingPerson->rrmp }}">
          </div>

          <div class="form-group">
            <label for="email">البريد الالكتروني</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $missingPerson->email }}">
          </div>

          <div class="form-group">
            <label for="address_street">عنوان السكن</label>
            <input type="text" class="form-control" id="address_street" name="address_street" value="{{ $missingPerson->address_street }}">
          </div>

          
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


