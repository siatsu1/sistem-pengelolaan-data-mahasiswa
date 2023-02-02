<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

use App\Models\Mahasiswa;


class MahasiswaController extends Controller
{

  function index()
  {
    
    $data['mahasiswa'] = Mahasiswa::all();
    return view('serverside.mahasiswa.index', $data);
  }

  function create()
  {
    return view('serverside.mahasiswa.create');
  }

  function store()
  {
  
    $simpan = new Mahasiswa;
    $simpan->nama = request('nama');
    $simpan->prodi = request('prodi');
    $simpan->semester = request('semester');
    $simpan->kelas = request('kelas');
    $simpan->angkatan = request('angkatan');
    $simpan->id_user = Auth::User()->id_user;
    $simpan->handleUploadFoto();
    $simpan->save();
    return redirect('admin/mahasiswa')->with('success', 'Berhasil Menambahkan Mahasiswa baru');
  }

  function update(request $request)
  {  
    $simpan = Mahasiswa::where('id', $request->id)->first();
    $simpan->nama = request('nama');
    $simpan->prodi = request('prodi');
    $simpan->semester = request('semester');
    $simpan->kelas = request('kelas');
    $simpan->angkatan = request('angkatan');
    $simpan->handleUploadFoto();
    $simpan->save();
    return redirect('admin/mahasiswa')->with('success', 'Berhasil Mengupdate Data Mahasiswa');
  }

  function detail(request $request)
  {
    $data['detailMahasiswa'] = Mahasiswa::where('id', $request->id)->first();
    return view('serverside.mahasiswa.detail', $data);
  }

  function edit(request $request)
  {

   $data['mahasiswa'] = Mahasiswa::where('id', $request->id)->first();
    return view('serverside.mahasiswa.edit', $data);
  }

  function delete(request $request)
  {

   $data['mahasiswa'] = Mahasiswa::where('id', $request->id)->delete();
    return back()->with('success', 'Data Mahasiswa telah terhapuskan');
  }

}
