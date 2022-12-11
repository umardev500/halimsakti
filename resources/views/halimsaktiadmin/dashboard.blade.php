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
  <a href="{{ route('dashboard') }}" class="brand-link" style="text-align: center;">
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
            <li class="nav-header">Setting E-Brochure / Email</li>
            <li class="nav-item">
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
          <h1 class="m-0">Chart</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Chart</li>
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
          <h1>Chart</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Chart</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <a href="{{ route('admslider') }}" style="text-decoration: none; color: black;">
              <div class="info-box shadow-lg">
                <span class="info-box-icon" style="background: #f7a93c;"><i class="nav-icon far fa-image"></i></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Slider</span>
                  <span class="info-box-number">{{ $slider }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
          </div>

          <div class="col-md-3 col-sm-6 col-12">
            <a href="{{ route('admproduct') }}" style="text-decoration: none; color: black;">
              <div class="info-box shadow-lg">
                <span class="info-box-icon" style="background: #02615b"><i class="nav-icon fab fa-product-hunt"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Product</span>
                  <span class="info-box-number">{{ $product }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
          </div>

          <div class="col-md-3 col-sm-6 col-12">
            <a href="{{ route('admnews') }}" style="text-decoration: none; color: black;">
              <div class="info-box shadow-lg">
                <span class="info-box-icon" style="background: #386102"><i class="nav-icon fab fa-artstation"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">News</span>
                  <span class="info-box-number">{{ $news }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
          </div>

          <div class="col-md-3 col-sm-6 col-12">
            <a href="{{ route('ebrochure') }}" style="text-decoration: none; color: black;">
              <div class="info-box shadow-lg">
                <span class="info-box-icon" style="background: #350261"><i class="nav-icon fas fa-cogs"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">E-Brochure</span>
                  <span class="info-box-number">{{ $ebrochure }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
          </div>

          <div class="col-md-3 col-sm-6 col-12">
            <a href="{{ route('ebrochuredata') }}" style="text-decoration: none; color: black;">
              <div class="info-box shadow-lg">
                <span class="info-box-icon" style="background: #350261"><i class="nav-icon fas fa-cog"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">E-Brochure Data</span>
                  <span class="info-box-number">{{ $ebrochuredata }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
          </div>

          <div class="col-md-3 col-sm-6 col-12">
            <a href="{{ route('contactemail') }}" style="text-decoration: none; color: black;">
              <div class="info-box shadow-lg">
                <span class="info-box-icon" style="background: #de3f32"><i class="nav-icon fas fa-envelope"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Email Contact</span>
                  <span class="info-box-number">{{ $contact }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
          </div>

            <!-- /.col -->
          </div>
        </a>
        <!-- /.row -->
      </div>
    </div>
  </div>
</section>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    @endsection
