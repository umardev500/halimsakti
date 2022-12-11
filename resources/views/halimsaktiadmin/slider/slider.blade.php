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
        <li class="nav-item menu-is-opening menu-open">
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
          <h1 class="m-0">Slider</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#" style="color: darkred;">Dashboard</a></li>
            <li class="breadcrumb-item active">Slider</li>
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
          <h1>Slider</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#" style="color: darkred;">Dashboard</a></li>
            <li class="breadcrumb-item active">Slider</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <a href="{{ route('admslider_add') }}">
            <button type="button" class="btn btn-dark" style="border-radius: 2px 0px 0px 9px; background: black;">Add Slider</button>
          </a>
          <div class="card">



            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Image</th>
                      <th>Judul</th>
                      <th>Judul_en</th>
                      <th>Sub_description</th>
                      <th>Sub_description_eng</th>
                      <th>Description</th>
                      <th>Description_en</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1 ?>
                    @foreach($slide as $s)
                    <tr>
                      <td>{{ $no }}</td>
                      <td>
                        <img class="img-thumbnail" src="{{ asset('image/slider/'. $s->image) }}">
                        <span style="font-size: 0.8rem; color: #62200a"></span>
                      </td>
                      <td><p>{{ $s->judul }}</p></td>
                      <td><p>{{ $s->judul_eng }}</p></td>
                      <td><p>{!! $s->description_sub !!}</p></td>
                      <td><p>{!! $s->description_sub_eng !!}</p></td>
                      <td><p>{!! $s->description !!}</p></td>
                      <td><p>{!! $s->description_eng !!}</p></td>

                      <td><a href="{{ route('admslider_edit', $s->id_slide) }}" type="button" class="btn btn-info btn-sm">Edit</a> | <a href="{{ route('admslider_delete', $s->id_slide) }}" type="button" class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                    <?php $no++ ?>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>


          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>

      <!-- /.content -->
    </div>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    @endsection
