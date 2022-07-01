@extends('layouts.admin')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
@endpush
@section('content')


<style>
    .tombol{
        width: 70%;
    }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pegawai</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pegawai</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <div class="container">
        <div class="container">
            @if (auth()->user()->role == 'admin')
                <a href="/tambahpegawai" type="button" class="btn btn-primary">Tambah</a>
            @endif
            
            <div class="row g-3 align-items-center mt-2">
                <div class="col-auto">
                    <form action="/pegawai" method="GET">
                        <input type="search" name="search" id="inputPassword6" class="form-control" placeholder="Cari Nama Pegawai"
                            aria-describedby="passwordHelpInline">
                    </form>
                </div>
            
                <div class="col-auto">
                    <a href="/exportpdf" type="button" class="btn btn-info">Export PDF</a>
                </div>
            </div>
            <div class="row">

                <table class="table mt-2">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Foto</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            {{-- <th scope="col">No Telpon</th> --}}
                            {{-- <th scope="col">Tempat, Tanggal Lahir</th> --}}
                            <th scope="col">Dibuat</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($data as $index => $row)
                        <tr>
                            <th scope="row">{{ $index + $data->firstItem() }}</th>
                            <td>
                                <img src="{{ asset('fotopegawai/'.$row->foto) }}" alt="" style="width: 60px">
                                {{-- <img src="{{ URL::asset('fotopegawai/'.$row->foto) }}" alt="" style="width: 60px"> --}}
                            </td>
                            <td>{{ $row->nip }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->jeniskelamin }}</td>
                            {{-- <td>{{ $row->notelpon }}</td> --}}
                            {{-- <td>{{ $row->tlahir}}, {{ $row->tgllahir->toDateString()}}</td> --}}
                            <td>{{ $row->created_at->format('D, M Y') }}</td>
                            <td class="text-center">
                                <a href="/detaildata/{{ $row->id }}" class="btn btn-info text-light tombol">
                                    <i class="fas fa-eye"></i> Detail
                                </a><br>
                                @if (auth()->user()->role == 'admin')
                                    <a href="/editdata/{{ $row->id }}" class="btn btn-warning text-light tombol">
                                        <i class="fas fa-pen"></i> Edit
                                    </a><br>
                                    <a href="#" type="button" class="btn btn-danger delete text-light tombol" 
                                        data-id="{{ $row->id }}"
                                        data-nama="{{ $row->nama }}">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>


</div>
<!-- /.content-header -->




@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.slim.js"
    integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
</body>

<script>
    $('.delete').click(function () {
        var pegawaiid = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');


        swal({
                title: "Yang bener???",
                text: "Kamu akan menghapus data pegawai dengan nama " + nama + " ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletedata/" + pegawaiid +
                        swal("Data berhasil dihapus!", {
                            icon: "success",
                        });
                } else {
                    swal("Data tidak jadi dihapus");
                }
            });
    })

</script>
@endpush