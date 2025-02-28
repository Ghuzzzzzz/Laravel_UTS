<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Sekolah::orderBy('nama_sekolah', 'asc')->paginate(5);
        return view('dashboard')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        session()->flash('nama_sekolah', $request->nama_sekolah);
        
        $request->validate([
            'nama_sekolah' => 'required|string|unique:sekolahs,nama_sekolah',
            'alamat' => 'required',
            'telepon' => 'required|numeric|digits_between:10,15',
            'email' => 'required|email',
            'jenis_sekolah' => 'required',
            'status_sekolah' => 'required',
            'akreditasi' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ],[
            'nama_sekolah.required' => 'Nama Sekolah wajib diisi',
            'nama_sekolah.unique' => 'Nama Sekolah sudah ada',
            'telepon.required' => 'Telepon wajib diisi',
            'email.required' => 'Email wajib diisi',
            'latitude.required' => 'Latitude wajib diisi',
            'latitude.numeric' => 'Format Latitude tidak valid',
            'longitude.required' => 'Longitude wajib diisi',
            'longitude.numeric' => 'Format Longitude tidak valid',
        ]); 

        $data = [
            'nama_sekolah' => session('nama_sekolah'),
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'jenis_sekolah' => $request->jenis_sekolah,
            'status_sekolah' => $request->status_sekolah,
            'akreditasi' => $request->akreditasi,
            'website' => $request->website,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ];
        Sekolah::create($data);
        return redirect()->to('sekolah')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Sekolah::where('id', $id)->first();
        return view('sekolah.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_sekolah' => 'required|string|unique:sekolahs,nama_sekolah,'.$id,
            'alamat' => 'required',
            'telepon' => 'required|numeric|digits_between:10,15',
            'email' => 'required|email',
            'jenis_sekolah' => 'required',
            'status_sekolah' => 'required',
            'akreditasi' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ],[
            'nama_sekolah.required' => 'Nama Sekolah wajib diisi',
            'nama_sekolah.unique' => 'Nama Sekolah sudah ada',
            'telepon.required' => 'Telepon wajib diisi',
            'email.required' => 'Email wajib diisi',
            'latitude.required' => 'Latitude wajib diisi',
            'latitude.numeric' => 'Format Latitude tidak valid',
            'longitude.required' => 'Longitude wajib diisi',
            'longitude.numeric' => 'Format Longitude tidak valid',
        ]); 

        $data = [
            'nama_sekolah' => $request->nama_sekolah,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'jenis_sekolah' => $request->jenis_sekolah,
            'status_sekolah' => $request->status_sekolah,
            'akreditasi' => $request->akreditasi,
            'website' => $request->website,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ];
        Sekolah::where('id', $id)->update($data);
        return redirect()->to('sekolah')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Sekolah::where('id', $id)->delete();
        return redirect()->to('sekolah')->with('success', 'Data berhasil dihapus');
    }
}
