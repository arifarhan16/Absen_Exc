<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MylatController extends Controller
{
    public function index()
    {
    	$data = \App\Mylat::all();
    	return view('/share.index', ['data'=>$data]);
    }
    public function pengurus(){
    	return view('/share.pengurus');
    }
    public function contact()
    {
    	return view('/share.contact');
    }
    public function absen()
    {
    	// $data = \App\Mylat::all();
    	// return view('/share.absen', ['data'=>$data]);

    	$data = \App\Mylat::all ();
    	return view ('/share.absen')->withData ( $data );
    }
     public function indexing()
    {
        return Datatables::of(Mylat::query())->make(true);
    }


}
