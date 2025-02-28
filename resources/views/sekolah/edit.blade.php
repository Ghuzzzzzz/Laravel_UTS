@extends('layouts.template')
    @section('content')
    @include('components.pesan')

<form action='{{ url('sekolah/'.$data->id) }}' method='post'>
    @csrf
    @method('put')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ route('sekolah.index') }}" class="btn btn-secondary">KEMBALI</a>
        <div class="mb-3 row">
            <label for="nama_sekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_sekolah' value="{{ $data->nama_sekolah }}" id="nama_sekolah" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='alamat' value="{{ $data->alamat }}" id="alamat" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" name='telepon' value="{{ $data->telepon }}" id="telepon" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name='email' value="{{ $data->email }}" id="email" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jenis_sekolah" class="col-sm-2 col-form-label">Jenis Sekolah</label>
            <div class="col-sm-10">
                <select class="form-select" name='jenis_sekolah' id="jenis_sekolah" required>
                    <option value="">Pilih Jenis Sekolah</option>
                    <option value="Negeri" {{ $data->jenis_sekolah == 'Negeri' ? 'selected' : '' }}>Negeri</option>
                    <option value="Swasta" {{ $data->jenis_sekolah == 'Swasta' ? 'selected' : '' }}>Swasta</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="status_sekolah" class="col-sm-2 col-form-label">Status Sekolah</label>
            <div class="col-sm-10">
                <select class="form-select" name='status_sekolah' id="status_sekolah" required>
                    <option value="">Pilih Status Sekolah</option>
                    <option value="Aktif" {{ $data->status_sekolah == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Tidak Aktif" {{ $data->status_sekolah == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="akreditasi" class="col-sm-2 col-form-label">Akreditasi</label>
            <div class="col-sm-10">
                <select class="form-select" name='akreditasi' id="akreditasi" required>
                    <option value="">Pilih Akreditasi</option>
                    <option value="A" {{ $data->akreditasi == 'A' ? 'selected' : '' }}>A</option>
                    <option value="B" {{ $data->akreditasi == 'B' ? 'selected' : '' }}>B</option>
                    <option value="C" {{ $data->akreditasi == 'C' ? 'selected' : '' }}>C</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="website" class="col-sm-2 col-form-label">Website</label>
            <div class="col-sm-10">
                <input type="url" class="form-control" name='website' value="{{ $data->website }}" id="website">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="latitude" class="col-sm-2 col-form-label">Latitude</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='latitude' value="{{ $data->latitude }}" id="latitude" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="longitude" class="col-sm-2 col-form-label">Longitude</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='longitude' value="{{ $data->longitude }}" id="longitude" required>
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