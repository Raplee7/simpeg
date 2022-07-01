@extends('layouts.admin')

@section('content')

<body>
        <h1 class="text-center mb-4">Tambah Data Pegawai</h1>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Isi Data Pegawai</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/insertdata" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">NIP</label>
                                    <input type="number" name="nip" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" />
                                    @error('nip')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" />
                                    @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                                        <input type="text" name="tlahir" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" />
                                        @error('tlahir')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-6">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tgllahir" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" />
                                        @error('tgllahir')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                    <select class="form-control" name="jeniskelamin"
                                        aria-label="Default select example">
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="1">Laki-Laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                    @error('jeniskelamin')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">No Telpon</label>
                                    <input type="number" name="notelpon" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" />
                                    @error('notelpon')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Agama</label>
                                    <input type="text" name="agama" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" />
                                    @error('agama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Status Perkawinan</label>
                                    <select class="form-control" name="statuskawin"
                                        aria-label="Default select example">
                                        <option selected>Pilih Status</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                    </select>
                                    @error('statuskawin')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                    <input type="With textarea" name="alamat" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" />
                                    @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="foto" class="form-control"
                                                aria-describedby="emailHelp" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    
</body>
@endsection
