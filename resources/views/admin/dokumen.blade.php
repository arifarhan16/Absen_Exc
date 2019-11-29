@extends('layouts.app')

@section('content')
<div class="container">
@if(session('deldoc'))
<script>
    Swal.fire({
  title: 'Hapus',
  text: 'Data Dokumen Berhasil Di Hapus',
  icon: 'error',
  confirmButtonText: 'Okay'
})
</script>
@endif
@if(session('download'))
<script>
    Swal.fire({
  title: 'Download',
  text: 'Data Dokumen Sedang Di Download',
  icon: 'info',
  confirmButtonText: 'Okay'
})
</script>
@endif
	<div class="row">
		          <button type="button" class="btn btn-secondary" id="mabut"><i class="fa fa-refresh"></i>
</button>
		    <a href="/admin" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
		<table id="down" class="table table-striped table-dark table-hover" width="100%" cellspacing="10" cellpadding="10">
			<thead>
			<tr>
				<th>No</th>
				<th>Dokumen</th>
				<th>Option</th>
			</tr>
			</thead>
			<?php $no=1;?>
				@foreach($data as $doc)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$doc->document}}</td>
				<td>
				<a href="dokumen/{{$doc->document}}" class="btn btn-warning"><i class="fa fa-download"></i></a>
        		<a href="dokumen/{{$doc->id}}/hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a> 
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>

@endsection