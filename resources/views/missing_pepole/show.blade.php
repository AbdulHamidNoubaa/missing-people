@extends('layouts1.admin')

@section('content')
<div class="container" dir="rtl">
<br>
<div class="card">
    <div class="card-header bg-primary text-white">
        <h4>عرض بيانات شخص مفقود</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="#" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <div class="col-md-6 text-right">
                    <label for="first_name_miss">الاسم الأول للمفقود</label>
                    <input type="text" class="form-control" id="first_name_miss" name="first_name_miss" value="{{ $missingPerson->first_name_miss }}" readonly>
                </div>

                <div class="col-md-6">
                    <label for="last_name_miss">الاسم الأخير للمفقود</label>
                    <input type="text" class="form-control" id="last_name_miss" name="last_name_miss" value="{{ $missingPerson->last_name_miss }}" readonly>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="birth_date">تاريخ الميلاد</label>
                    <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ $missingPerson->birth_date }}" readonly>
                </div>

                <div class="col-md-6">
                    <label for="disappearance_date">تاريخ الاختفاء</label>
                    <input type="date" class="form-control" id="disappearance_date" name="disappearance_date" value="{{ $missingPerson->disappearance_date }}" readonly>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="city_miss">المدينة</label>
                    <input type="text" class="form-control" id="city_miss" name="city_miss" value="{{ $missingPerson->city_miss }}" readonly>
                </div>

                <div class="col-md-6">
                    <label for="address_street_miss">العنوان</label>
                    <input type="text" class="form-control" id="address_street_miss" name="address_street_miss" value="{{ $missingPerson->address_street_miss }}" readonly>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="phone_number_miss">رقم الهاتف</label>
                    <input type="text" class="form-control" id="phone_number_miss" name="phone_number_miss" value="{{ $missingPerson->phone_number_miss }}" readonly>
                </div>

                <div class="col-md-6">
                    <label for="gender">الجنس</label>
                    <input type="text" class="form-control" id="gender" name="gender" value="{{ $missingPerson->gender }}" readonly>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="clothing">اخر ملابس لابسها المفقود</label>
                    <input type="text" class="form-control" id="clothing" name="clothing" value="{{ $missingPerson->clothing }}" readonly>
                </div>

                <div class="col-md-6">
                    <label for="distinctive_features">علامات مميزة</label>
                    <input type="text" class="form-control" id="distinctive_features" name="distinctive_features" value="{{ $missingPerson->distinctive_features }}" readonly>
                </div>
            </div>

            <div class="form-group">
                <label for="additional_info">ملاحظات - معلومات اضافية</label>
                <textarea class="form-control" id="additional_info" name="additional_info" rows="5" readonly>{{ $missingPerson->additional_info }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">الصورة</label>
                <br>
                <img src="{{ asset('images/' . $missingPerson->image) }}" height="80px" width="100px"  alt="غير مرفقة">
                {{-- <img src="{{ asset('images/' . $missingPerson->image) }}" height="80px" width="100px" alt="صورة المفقود"> --}}
            </div>

            <!-- معلومات المبلغ -->
            <div class="card-header bg-primary text-white">
                <h4>معلومات المبلغ</h4>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first_name">الاسم</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $missingPerson->first_name }}" readonly>
                </div>

                <div class="col-md-6">
                    <label for="last_name">اللقب</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $missingPerson->last_name }}" readonly>
                </div>
            </div>

            <div class="form-group">
                <label for="city">المدينة</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ $missingPerson->city }}" readonly>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="phone_number">رقم الهاتف</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $missingPerson->phone_number }}" readonly>
                </div>

                <div class="col-md-6">
                    <label for="whtas_phone_number">رقم هاتف الوتس اب</label>
                    <input type="text" class="form-control" id="whtas_phone_number" name="whtas_phone_number" value="{{ $missingPerson->whtas_phone_number }}" readonly>
                </div>

                <div class="col-md-6">
                    <label for="whtas_phone_number">صلة القرابة</label>
                    <input type="text" class="form-control" id="rrmp" name="rrmp" value="{{ $missingPerson->rrmp }}" readonly>
                </div>

                <div class="col-md-6">
                    <label for="whtas_phone_number">البريد الالكتروني</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $missingPerson->email }}" readonly>
                </div>

                <div class="col-md-6">
                    <label for="whtas_phone_number">عنوان السكن</label>
                    <input type="text" class="form-control" id="address_street" name="address_street" value="{{ $missingPerson->address_street }}" readonly>
                </div>

            
                
            </div>
        </form>
    </div>
</div>
</div>        
</div>


@endsection