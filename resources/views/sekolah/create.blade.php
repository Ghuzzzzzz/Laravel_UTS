@extends('layouts.template')
@section('content')
@include('components.pesan')

<form action='{{ route('sekolah.store') }}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ route('sekolah.index') }}" class="btn btn-secondary">KEMBALI</a>
        <div class="mb-3 row">
            <label for="nama_sekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_sekolah' value="{{ session('nama_sekolah') }}" id="nama_sekolah" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='alamat' id="alamat" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" name='telepon' id="telepon" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name='email' id="email" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jenis_sekolah" class="col-sm-2 col-form-label">Jenis Sekolah</label>
            <div class="col-sm-10">
                <select class="form-select" name='jenis_sekolah'  id="jenis_sekolah" required>
                    <option value="">Pilih Jenis Sekolah</option>
                    <option value="Negeri">Negeri</option>
                    <option value="Swasta">Swasta</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="status_sekolah" class="col-sm-2 col-form-label">Status Sekolah</label>
            <div class="col-sm-10">
                <select class="form-select" name='status_sekolah' id="status_sekolah" required>
                    <option value="">Pilih Status Sekolah</option>
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="akreditasi" class="col-sm-2 col-form-label">Akreditasi</label>
            <div class="col-sm-10">
                <select class="form-select" name='akreditasi' id="akreditasi" required>
                    <option value="">Pilih Akreditasi</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="website" class="col-sm-2 col-form-label">Website</label>
            <div class="col-sm-10">
                <input type="url" class="form-control" name='website' id="website">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="latitude" class="col-sm-2 col-form-label">Latitude</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='latitude' id="latitude" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="longitude" class="col-sm-2 col-form-label">Longitude</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='longitude' id="longitude" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="submit" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
        </div>
    </div>
</form>
@endsection