@extends('layouts.admin')

@section('content')
<!-- Profile Image -->
<section class="content mt-5">
    <div class="container-fluid">
        <div class="row" style="margin-left: 24%">
            <div class="card card-primary card-outline mr-3" style="width: 30%">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-circle" style="width: 60%" src="{{ asset('fotopegawai/'.$data->foto) }}"
                            alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center mt-3">{{ $data->nama }}</h3>


                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary" style="width: 60%">
                <div class="card-header">
                    <h3 class="card-title">Detail Profile</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> NIP</strong>

                    <p class="text-muted">
                        {{ $data->nip }}
                    </p>

                    <hr>

                    <strong><i class="fas fa-user mr-1"></i> Nama Lengkap</strong>

                    <p class="text-muted">{{ $data->nama }}</p>

                    <hr>

                    <strong><i class="fas fa-circle mr-1"></i> Jenis Kelamin</strong>

                    <p class="text-muted">{{ $data->jeniskelamin }}</p>

                    <hr>

                    <strong><i class="fas fa-calendar mr-1"></i> Tempat, Tanggal Lahir</strong>

                    <p class="text-muted">{{ $data->tlahir }}, {{ $data->tgllahir }}</p>

                    <hr>

                    <strong><i class="fas fa-phone mr-1"></i> No Telpon</strong>

                    <p class="text-muted">{{ $data->notelpon }}</p>

                    <hr>

                    <strong><i class="fas fa-circle mr-1"></i> Agama</strong>

                    <p class="text-muted">{{ $data->agama }}</p>

                    <hr>

                    <strong><i class="fas fa-ring mr-1"></i> Status Perkawinan</strong>

                    <p class="text-muted">{{ $data->statuskawin }}</p>

                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                    <p class="text-muted">{{ $data->alamat }}</p>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

    </div>
</section>
@endsection
