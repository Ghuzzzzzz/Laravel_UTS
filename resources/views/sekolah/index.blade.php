@extends('layouts.template')

@section('title', 'Data Sekolah')

@section('content')
<!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">      
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='{{ route('sekolah.create') }}' class="btn btn-primary">+ Tambah Data</a>
        </div>
      
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">Nama Sekolah</th>
                    <th class="col-md-3">Alamat</th>
                    <th class="col-md-2">Telepon</th>
                    <th class="col-md-2">Email</th>
                    <th class="col-md-2">Jenis Sekolah</th>
                    <th class="col-md-2">Status Sekolah</th>
                    <th class="col-md-2">Akreditasi</th>
                    <th class="col-md-2">Website</th>
                    <th class="col-md-2">Latitude</th>
                    <th class="col-md-2">Longitude</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstItem(); ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->nama_sekolah }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->telepon }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->jenis_sekolah }}</td>
                    <td>{{ $item->status_sekolah }}</td>
                    <td>{{ $item->akreditasi }}</td>
                    <td>{{ $item->website }}</td>
                    <td>{{ $item->latitude }}</td>
                    <td>{{ $item->longitude }}</td>
                    <td>
                        <a href='{{ url('sekolah/'.$item->id.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                        <form onsubmit="return confirm('Yakin Ingin Menghapus Data?')" class="d-inline" 
                        action='{{ url('sekolah/'.$item->id) }}' method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
                @endforeach
            </tbody>
        </table> 
        {{ $data->links() }}
    </div>
    <!-- AKHIR DATA -->
@endsection