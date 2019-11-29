@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row-col-4">
                  <button type="button" class="btn btn-secondary" id="mabut"><i class="fa fa-refresh"></i>
</button>
    <a href="/admin" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
        <table id="image" class="table table-striped table-dark table-hover" width="100%" cellspacing="10" cellpadding="10">
    <thead>
        <tr>
            <th><font color="white">No</font></th>
            <th><font color="white">Gambar</font></th>
            <th><font color="white">Nama</font></th>
            <th><font color="white">Option</font></th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;?>
            @foreach($data as $gambar)
        <tr>
            
            <td><font color="white">{{$no++}}</font></td>
            <td><img src="{{asset('images/'.$gambar->gambar)}}" alt="" width="100" height="100"></td>
            <td>{{$gambar->gambar}}</td>
            <td>

        <a href="lookimages/{{$gambar->gambar}}" class="btn btn-warning"><i class="fa fa-download"></i></a>
        <a href="admin/{{$gambar->id}}/hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection