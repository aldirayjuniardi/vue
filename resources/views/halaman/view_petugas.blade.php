view_buku.blade.php
@extends('index')
@section('title', 'Petugas')

@section('isihalaman')
    <h3><center>Daftar Petugas Perpustakaan STMIK Madria Indonesia</center></h3>
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPetugasTambah"> 
        Tambah Data Petugas
    </button>

    <p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td align="center">No</td>
                <td align="center">ID Petugas</td>
                <td align="center">Nama Petugas</td>
                <td align="center">Hp</td>
                <td align="center">Aksi</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($petugas as $index=>$p)
                <tr>
                    <td align="center" scope="row">{{ $index + $petugas->firstItem() }}</td>
                    <td>{{$a->id_petugas}}</td>
                    <td>{{$a->nama_petugas}}</td>
                    <td>{{$a->hp}}</td>
                    <td align="center">
                        
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalPetugasEdit{{$p->id_petugas}}"> 
                            Edit
                        </button>
                         <!-- Awal Modal EDIT data Petugas -->
                        <div class="modal fade" id="modalPetugasEdit{{$p->id_petugas}}" tabindex="-1" role="dialog" aria-labelledby="modalpetugasEditLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalPetugasEditLabel">Form Edit Data Petugas</h5>
                                    </div>
                                    <div class="modal-body">

                                        <form name="formpetugasedit" id="formpetugasdit" action="/petugas/edit/{{ $p->id_petugas}} " method="post" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="form-group row">
                                                <label for="id_petugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Masukan nama_petugas">
                                                </div>
                                            </div>

                                            <p>
                                            <div class="form-group row">
                                                <label for="hp" class="col-sm-4 col-form-label">hp</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="hp" name="hp" value="{{ $p->hp}}">
                                                </div>
                                            </div>

                                            <p>
                                            <div class="modal-footer">
                                                <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" name="petugastambah" class="btn btn-success">Edit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal EDIT data petugas -->
                        |
                        <a href="anggota/hapus/{{$p->id_petugas}}" onclick="return confirm('Yakin mau dihapus?')">
                            <button class="btn-danger">
                                Delete
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!--awal pagination-->
    Halaman : {{ $petugas->currentPage() }} <br />
    Jumlah Data : {{ $petugas->total() }} <br />
    Data Per Halaman : {{ $petugas->perPage() }} <br />

    {{ $petugas->links() }}
    <!--akhir pagination-->

    <!-- Awal Modal tambah data Petugas -->
    <div class="modal fade" id="modalPetugasTambah" tabindex="-1" role="dialog" aria-labelledby="modalPetugasTambahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPetugasTambahLabel">Form Input Data Petugas</h5>
                </div>
                <div class="modal-body">
                    <form name="formpetugastambah" id="formpetugastambah" action="/petugas/tambah " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="id_petugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Masukan nama_petugas">
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="hp" class="col-sm-4 col-form-label">HP</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukan HP">
                            </div>
                        </div>

                        <p>
                        <div class="modal-footer">
                            <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" name="petugastambah" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal tambah data petugas -->
    
@endsection