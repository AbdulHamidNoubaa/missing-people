@extends('layouts.master')

@section('title', ' المجلس الوطني للحريات وحقوق الإنسان - ليبيا')

@section('content')

  <section  id="hero" class="d-flex align-items-center rtl-text">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1> مرحباً بكم <span style="font-size: 35px">المجلس الوطني للحريات وحقوق الإنسان - ليبيا</span></h1>
      <h2>موقع يُعنى بتسجيل المفقودين جراء إعصار درنة.</h2>
      <div class="counter-container">
        <div class="counter">
            <div class="count">{{ $missingPeopleCount }}</div>
            <div class="description">المفقودين</div>
        </div>
        
      </div>
      <a href="{{ route('missing_people.create') }}" class="btn btn-primary mt-3 d-flex justify-content-center" style="width: 100%;">إضافة مفقود </a>

      {{-- <a href="{{ route('missing_people.create') }}" class="btn btn-primary mt-3 ">إضافة مفقود جديد</a> --}}

      {{-- <button class="btn btn-primary mt-3">إضافة مفقود جديد</button> --}}

    </div>
  </section>
  

@endsection 