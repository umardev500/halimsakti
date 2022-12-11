@extends('layouts.appHalimAdmin')
@section('title', 'Dashboard')
@section('css')
<style>
  .info{
    margin-top: 10px;
  }
</style>
@endsection
@section('content')
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: black;">
    <!-- Brand Logo -->
    <a href="" class="brand-link" style="text-align: center;">
      <img width="60" src="{{ asset('img/logo/logo.png') }}">
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background: black;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-2 mb-2 d-flex">
        <div class="info">

          <a href="#" class="d-block" style="text-decoration: none; color: white;"><h5 style="font-family: 'Truculenta', sans-serif;"><b>{{date('l, d - m - Y') }}</b></h5> </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Setting Homepage</li>
          <li class="nav-item">
              <a href="{{ route('admslider') }}" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Slider
                </p>
              </a>
          </li>

          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">Setting Product / News</li>
            <li class="nav-item">
            <a href="{{ route('admproduct') }}" class="nav-link">
              <i class="nav-icon fab fa-product-hunt"></i>
              <p>
                Product
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{ route('admnews') }}" class="nav-link">
                  <i class="nav-icon fab fa-artstation"></i>
                <p>
                  News
                </p>
              </a>
            </li>

          </ul>

          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-header">Setting E-Brochure / E-Brochure Data</li>
              <li class="nav-item menu-is-opening menu-open">
              <a href="{{ route('ebrochure') }}" class="nav-link">
                  <i class="nav-icon fas fa-cogs"></i>
                <p>
                  E-Brochure
                </p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('ebrochuredata') }}" class="nav-link">
                  <i class="nav-icon fas fa-cog"></i>
                  <p>
                    E-Brochure Data
                  </p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('contactemail') }}" class="nav-link">
                      <i class="nav-icon fas fa-envelope"></i>
                      <p>
                      Email Contact
                      </p>
                  </a>
              </li>
          </ul>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: white;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">E-Brochure</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">E-Brochure</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>E-Brochure</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">E-Brochure</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    @foreach($ebrochure as $e)
    <form action="{{ route('admebrochure_update') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="id_ebrochure" value="{{ $e->id_ebrochure }}">
      <div class="row">

        <div class="col-sm-12">
            <label>PDF E-Brochure</label><br>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" name="pdfebrochure" accept="image/*" class="custom-file-input" id="pdfebrochure" onchange="imageS(event)">
                <label class="custom-file-label" for="image">{{ old('pdfebrochure') ? old('pdfebrochure') : $e->link }}</label>
                <input type="hidden" name="pdfebrochures" value="{{ $e->image }}">
              </div>
            </div>
          </div>

        <div class="col-sm-12" style="margin-top: 20px">
          <div class="float-right" >
            <button type="submit" class="btn btn-primary">Save</button>
          </div>

        </div>

      </div>
    </form>
    @endforeach
  </div>
</div>

</div>
<!-- ./row -->
</section>

<!-- /.content -->
</div>


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
@endsection

@section('script')
<script>
    $('#image').on('change',function(){
    //get the file name
    var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
  })
</script>
@endsection
