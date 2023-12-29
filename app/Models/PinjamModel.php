<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamModel extends Model
{
    use HasFactory;
    protected $table        = "pinjam";
    protected $primaryKey   = "id_pinjam";
    protected $fillable     = ['id_pinjam','id_petugas','id_anggota','id_buku'];

    //relasi ke petugas
    public function petugas()
    {
        return$this->belongsto('app\Models\PetugasModel', 'id_petugas');
    }

    //relasi ke anggota
    public function anggota()
    {
        return$this->belongsto('app\Models\AnggotaModel', 'id_anggota');
    }

    //relasi ke buku
    public function buku()
    {
        return$this->belongsto('app\Models\BukuModel', 'id_buku');
    }

    
}