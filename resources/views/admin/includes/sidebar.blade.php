<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400&display=swap" rel="stylesheet">

<style>
   *{
      /* font-family: 'Cairo', sans-serif; */
      font-family: 'Cairo', sans-serif;
    }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src={{ asset('assets/img/logo.png')}} alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">الادارة الرئيسية</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/img/logo.png')}}" class="img-circle elevation-2">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        

               <li class="nav-item has-treeview">

                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    ادارة المفقودين  
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
              
                <ul class="nav nav-treeview">
                  @if(auth()->user()->user_type == 1)
                  {
                  <li class="nav-item">
                    <a href="{{ route('missing_people.index') }}" class="nav-link"> 
                      <i class="far fa-circle nav-icon"></i> 
                      <p>ادارة المفقودين</p>
                    </a>
                  </li>}
                  @endif
              
                  <li class="nav-item">
                    <a href="{{ route('missing_people.create') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>اضافة مفقود</p>
                    </a>
                  </li>
              
                </ul>
              
              </li>
    

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>