@extends('layout.template')
<!-- START FORM -->
@section('konten') 

<form action='{{ url('pegawai/'.$data->nip) }}' method='post'>
@csrf 
@method('PUT')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href='{{ url('pegawai') }}' class="btn btn-secondary"><< Kembali</a>
    <div class="mb-3 row">
        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
        <div class="col-sm-10">
            {{ $data->nip }}
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="golongan" class="col-sm-2 col-form-label">Golongan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='golongan' value="{{ $data->golongan }}" id="golongan">
        </div>
    </div>
	<div class="mb-3 row">
        <label for="pangkat" class="col-sm-2 col-form-label">Pangkat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='pangkat' value="{{ $data->pangkat }}" id="pangkat">
        </div>
    </div>
	<div class="mb-3 row">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='jabatan' value="{{ $data->jabatan }}" id="jabatan">
        </div>
    </div>
	<div class="mb-3 row">
        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='agama' value="{{ $data->agama }}" id="agama">
        </div>
    </div>
	<div class="mb-3 row">
        <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='jk' value="{{ $data->jk }}" id="jk">
        </div>
    </div>
	<div class="mb-3 row">
        <label for="telp" class="col-sm-2 col-form-label">Telp</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='telp' value="{{ $data->telp }}" id="telp">
        </div>
    </div>
	<div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='email' value="{{ $data->email }}" id="email">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>
</form>
<!-- AKHIR FORM -->
@endsection