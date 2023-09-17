@extends('layouts1.admin')

@section('title', 'تعديل بيانات المستخدم')

@section('content')

    <!-- Main Content -->
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

@error('description')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-body">
       <center><h2>تعديل بيانات المستخدم</h2></center> 
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">اسم :</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
            </div>

            <div class="form-group">
                <label for="email">البريد الالكتروني</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}">
            </div>
            {{-- <div class="form-group">
                <label for="password">كلمة المرور</label>
                <input type="password" class="form-control" name="password" id="password" value="{{ bcrypt($user->password)}}">
                {{-- <textarea class="form-control" name="password" id="password" rows="3">{{ $user->email }}</textarea> --}}
            {{-- </div>  --}}

            <div class="form-group">
                <label for="user_type">نوع المستخدم</label>
                <select name="user_type" id="user_type" class="form-control">
                    <option value="1" {{ $user->user_type == 1 ? 'selected' : '' }}>ادمن</option>
                    <option value="0" {{ $user->user_type == 0 ? 'selected' : '' }}>موظف</option>
                </select>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
            </div>
        </form>
    </div>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection






