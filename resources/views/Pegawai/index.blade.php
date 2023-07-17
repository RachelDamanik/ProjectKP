@extends('layout.template')
<!-- START DATA -->
@section('konten')    
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="{{ url('pegawai') }}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href='{{ url('pegawai/create') }}' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">NIP</th>
                <th class="col-md-3">Nama</th>
                <th class="col-md-1">Golongan</th>
                <th class="col-md-2">Pangkat</th>
                <th class="col-md-3">Jabatan</th>
                <th class="col-md-3">Agama</th>
                <th class="col-md-3">Jenis Kelamnin</th>
                <th class="col-md-2">Telp</th>
                <th class="col-md-2">Email</th>
				<th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = $data->firstItem() ?>
            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->nip }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->golongan }}</td>
                <td>{{ $item->pangkat }}</td>
                <td>{{ $item->jabatan }}</td>
                <td>{{ $item->agama }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->telp }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href='{{ url('pegawai/'.$item->nip.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('pegawai/'.$item->nip) }}" method="post">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            <?php $i++ ?>
            @endforeach
        </tbody>
    </table>
    {{ $data->withQueryString()->links() }}
</div>
<!-- AKHIR DATA -->
@endsection
