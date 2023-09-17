@extends('layouts1.admin')

@section('title', 'ادارة المستخدمسن')

@section('content')

    <section class="section">
        <div class="section-header">

            <h3>ادارة المستخدمين</h3>
            <div class="section-header-breadcrumb">
        </div>
      
        <div class="row">
            <div class="col-md-12 mx-auto">
                <a class="btn btn-primary" href="{{ route('register') }}">إضافة مستخدم</a>

            </div>
        </div>
        <div class="col-md-3"></div>
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>قائمة المستخدمين</h4>
                   
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <form id="delete-form" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                              
                            @if (count($user) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>
                                        التسلسل
                                    </th>
                                    <th>اسم </th>
                                    <th>البريد الالكتروني</th>
                                    {{-- <th>كلمة المرور</th> --}}
                                    <th>نوع المستخدم</th>
                                    <th>العمليات</th>
                                </tr>
                                <tbody>
                                    @foreach ($user as $dep)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $dep->name }}</td>
                                            <td>{{ $dep->email }}</td>
                                            <td>
                                                @if ($dep->user_type == 1)
                                                    <div class="badge badge-success">ادمن</div>
                                                @else
                                                    <div class="badge badge-danger">موظف</div>
                                                @endif
                                            </td>
                                            {{-- <td>حالة القسم هنا</td> <!-- اضف كود لعرض حالة القسم --> --}}
                                            <td>
                                               
                                                <a href="{{ route('users.edit', ['user' => $dep->id]) }}" class="btn btn-warning" id="open-edit-section-modal-btn"><i class="fas fa-edit"></i></a>
                                                <span class="mx-1"></span>
                                                {{-- <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a> --}}
                                                {{-- <a class="btn btn-danger" onclick="showConfirmation('{{ route('users.destroy', ['user' => $dep->id]) }}')"><i class="fas fa-trash"></i></a> --}}
                                                <a href="{{ route('users.delete', $dep->id) }}" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا السجل؟')">حذف</a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
@else
    <div class="alert alert-warning">
        لا توجد بيانات مستخدمين حتى الآن.
    </div>
@endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
       

      
        
    </section>




@endsection
