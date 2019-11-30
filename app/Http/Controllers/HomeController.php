<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use File;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = \App\Mylat::all();
        return view('admin/index',['data'=>$data]);
    }
    public function tambah(Request $request)
    {
        $data = \App\Mylat::create($request->all());
        return redirect('/admin')->with('Sukses', 'Data Berhasil Di Masukan');
    }
    public function edit(Request $request,$id)
    {
        $data = \App\Mylat::findOrFail($id);
        return view('/admin/edit', compact('data'));
    }
    public function update(Request $request,$id)
    {
        $data = \App\Mylat::findOrFail($id);
        $data->update($request->all());
        return redirect('/admin')->with('Edit', 'Data Berhasil Di Edit');
    }
    public function hapus(Request $request,$id)
    {
        $data = \App\Mylat::findOrFail($id);
        $data->delete($request->all());
        return redirect('/admin')->with('Hapus', 'Data Berhasil Di Hapus');
    }
    public function doc()
    {
        $data = \App\doc::all();
        return view('admin/dokumen', compact('data'));
    }
    public function look()
    {
        $data = \App\Images::all();
        return view('/admin/lookimages', compact('data'));
    }
public function download($doc){
       // $model_file = \App\doc::findOrFail($id); //Mencari model atau objek yang dicari
     return response()->download(public_path("doc/{$doc}"));
  }

  public function dimg($gambar){
       // $model_file = \App\doc::findOrFail($id); //Mencari model atau objek yang dicari
     return response()->download(public_path("images/{$gambar}"))->with('download', 'Data Sedang Di Download');
  }
  public function docdel(Request $request,$id)
  {
      $data = \App\doc::findOrFail($id);
      $data->delete($request->all());
      return redirect('/admin/dokumen')->with('deldoc', 'Dokumen Berhasil Di Hapus');
  }
  public function imgdel(Request $request,$id)
  {
      $data = \App\Images::findOrFail($id);
      $data->delete($request->all());
      return redirect('/admin/lookimages')->with('imgdel', 'Gambar Berhasil Di Hapus');
  }
}
