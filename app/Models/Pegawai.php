<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'tb_pegawai';
    protected $primaryKey = 'nip_pegawai';
    protected $fillable = ['nip_pegawai','nama_peagwai','golongan_pegawai','pangkat_pegawai','jabatan_pegawai','agama_pegawai','jk_pegawai','eamil_pegawai','alamat_pegawai','telp_pegawai'];
}
