<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//route untuk data buku
route::get('/buku', 'bukucontroller@bukutampil');
route::post('/buku/tambah','BukuCotroller@bukutambah');
route::get('/buku/hapus/{id_buku}','BukuController@bukuhapus');
route::put('/buku/edit/{id_buku}','BukuCotroller@bukuedit');

//route untuk data buku
route::get('/home', function(){return view('view_home');});

//route untuk data anggota
route::get('/anggota', 'Anggotacontroller@anggotatampil');
route::post('/anggota/tambah','AnggotaCotroller@anggotatambah');
route::get('/anggota/hapus/{id_anggota}','AnggotaController@anggotahapus');
route::put('/anggota/edit/{id_anggota}','AnggotaCotroller@anggotaedit');

//route untuk data petugas
route::get('/petugas', 'petugascontroller@petugastampil');
route::post('/petugas/tambah','PetugasCotroller@petugastambah');
route::get('/petugas/hapus/{id_petugas}','PetugasController@petugashapus');
route::put('/petugas/edit/{id_petugas}','PetugasCotroller@petugasedit');

//route untuk data pinjam
route::get('/pinjam', 'Pinjamcontroller@pinjamtampil');
route::post('/pinjam/tambah','PinjamCotroller@pinjamtambah');
route::get('/pinjam/hapus/{id_pinjam}','PinjamController@pinjamhapus');
route::put('/pinjam/edit/{id_pinjam}','PinjamCotroller@pinjamedit');
