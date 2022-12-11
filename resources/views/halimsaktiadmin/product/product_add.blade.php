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
            <li class="nav-item menu-is-opening menu-open">
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
          <h1 class="m-0">Product</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Product</li>
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
          <h1>Product</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Product</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <form action="{{ route('admproduct_store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12">
          <a href="{{ route('admproduct') }}" class="btn btn-warning btn-sm" style="margin-bottom: 5px; border-radius: 20px 1px 10px;">
            <i class="fas fa-arrow-circle-left" style="position: relative; right: 3%; top: 1px;"></i>
            back
          </a>
          <div class="card">
            <div class="card-body">
              <div class="row">
                  <div class="col-sm-12">
                  <label>Image</label><br>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="image" class="custom-file-input" id="image">
                      <label class="custom-file-label" for="image"></label>
                      <input type="hidden" name="images">
                    </div>
                  </div>
                </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Nama Produk</label>
                      <input type="text" class="form-control" placeholder="" name="product_nama" value="{{ old('product_nama') }}" required>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Nama Product En</label>
                      <input type="text" class="form-control" placeholder="" name="product_nama_eng" value="{{ old('product_nama_eng') }}" required>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                        <label>Deskripsi Singkat</label>
                        <textarea class="form-control" id="description_sub" name="description_sub" rows="3">{{ old('description_sub') }}</textarea>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                        <label>Deskripsi Singkat En</label>
                        <textarea class="form-control" id="description_sub_eng" name="description_sub_eng" rows="3">{{ old('description_sub_eng') }}</textarea>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea id="description" name="description" rows="7">
                            {{ old('description') }}
                        </textarea>
                    </div>
                  </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Deskripsi En</label>
                            <textarea id="description_eng" name="description_eng" rows="7">
                                {{ old('description_eng') }}
                            </textarea>
                        </div>
                    </div>

                  <div class="col-sm-12">
                    <div class="float-right" >
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                  </div>

                </div>
              </div>
            </div>
          </form>
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

  $('#description').summernote({
        toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['insert', ['link']],
    ['view', ['fullscreen', 'codeview', 'help']],
    ]
  });

  $('#description_eng').summernote({
        toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['insert', ['link']],
    ['view', ['fullscreen', 'codeview', 'help']],
    ]
  });
</script>
@endsection
