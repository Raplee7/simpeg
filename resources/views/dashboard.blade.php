@extends('layouts.admin')

@section('content')
      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                  <h6>Total Jumlah Pegawai</h6>
                  
                  <h3>{{ $jumlahpegawai }}</h3>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a class="small-box-footer"><i class="fas fa-circle"></i></a>
            </div>

          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h6>Jumlah Pegawai Laki-Laki</h6>
                <h3>{{ $jumlahpegawaicowo }}</h3>
              </div>
              <div class="icon">
                <i class="fa fa-mars"></i>
              </div>
              <a class="small-box-footer"><i class="fas fa-circle"></i></a>
            </div>

          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-pink">
              <div class="inner">
                <h6>Jumlah Pegawai Perempuan</h6>
                <h3>{{ $jumlahpegawaicewe }}</h3>

              </div>
              <div class="icon">
                <i class="fa fa-venus"></i>
              </div>
              <a class="small-box-footer"><i class="fas fa-circle"></i></a>
            </div>
            
          </div>
          <!-- ./col -->
          @if (auth()->user()->role == 'admin')
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner text-white">
                <h6>Jumlah User</h6>
                <h3>{{ $jumlahuser }}</h3>

              </div>
              <div class="icon">
                <i class="fa fa-user "></i>
              </div>
              <a class="small-box-footer"><i class="fas fa-circle text-white"></i></a>
            </div>
            @endif

          </div>
          <!-- ./col -->

          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection