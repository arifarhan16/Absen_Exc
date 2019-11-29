<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class DocController extends Controller
{
    //
    public function upload(Request $request){
        request()->validate([
            'FileUpload' => 'required|mimes:doc,docx,ppt,txt,xls,pdf|max:5048',
       ]);
        if($request->hasFile('FileUpload')){
            $resorce = $request->file('FileUpload');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/doc", $name);
            $save = DB::table('doc')->insert(['document' => $name]);
        
            return redirect('/admin')->with('dokumen', 'Dokumen Berhasil Di Kirim!');
        }
}
//     request()->validate([
//         'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//    ]);
//    if ($files = $request->file('image')) {
//        $destinationPath = 'public/images/'; // upload path
//        $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
//        $files->move($destinationPath, $profileImage);
//        $insert['image'] = "$profileImage";
//     }
//     $check = image::insertGetId($insert);

//     return Redirect::to("image")
//     ->withSuccess('Great! Image has been successfully uploaded.');

// }
    public function images(Request $request){
        request()->validate([
            'FileUpload' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:5048',
       ]);
        if($request->hasFile('FileUpload')){
            $resorce = $request->file('FileUpload');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/images", $name);
            $save = DB::table('images')->insert(['gambar' => $name]);
        
            return redirect('/admin')->with('dokumen', 'Dokumen Berhasil Di Kirim!');
        }
}
}
