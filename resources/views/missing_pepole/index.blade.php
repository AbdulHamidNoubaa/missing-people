@extends('layouts1.admin')
<title>ادارة المفقودين</title>
@section('content')
<div class="container" dir="rtl">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (count($people) > 0)
    <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">الاسم</th>
            <th scope="col">اللقب</th>
            <th scope="col">تاريخ الميلاد</th>
            <th scope="col">الإجراءات</th>
          </tr>
        </thead>
      
        <tbody>
          @foreach ($people as $person)
          
            <tr>
              <td>{{ $person->first_name }}</td>
              <td>{{ $person->last_name }}</td>
              <td>{{ $person->birth_date }}</td>
              <td>
                <a href="{{ route('missing_people.show', $person->id) }}" class="btn btn-primary btn-sm">عرض</a>
                <a href="{{ route('missing_people.edit', $person->id) }}" class="btn btn-secondary btn-sm">تعديل</a>
                <a href="{{ route('missing_people.delete', $person->id) }}" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا السجل؟')">حذف</a>

              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      @else
      <div class="alert alert-info">
          لا يوجد اشخاص مضافين حاليًا.
      </div>
  @endif
</div>
  


@endsection

