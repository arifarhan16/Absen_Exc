@extends('layouts.header')
@section('content')
  <main role="main" class="inner cover">
    <h1 class="cover-heading">About</h1>
    <hr>
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card card-inverse" style="background-color: transparent; border-color: transparent;">
<div class="card-block">
<div class="row">
<div class="col-md-8 col-sm-8">
<h2 class="card-title">Ari Farhan</h2>
<p class="card-text"><strong> WebDev, NetworkEngineer </strong></p>
<p class="card-text"><strong>[FullStack_Dev]</strong></p>
<p><strong>Platform: </strong>
<span class="badge bg-danger">Laravel</span> 
<span class="badge bg-info">Wordpress</span>
<span class="badge bg-warning">CodeIgniter</span>
<span class="badge bg-success">Native</span>
</p>
</div>
<div class="col-md-4 col-sm-4 text-center">
<img class="btn-md" src="{{asset('gambar/profil1.jpg')}}" alt="" style="border-radius:50%;" width="80%" height="80%">
</div>         
<div class="col-md-4 col-sm-4 text-center">
<h2><strong> 150 K </strong></h2>                    
<p><small>Like</small></p>
<button class="btn btn-primary btn-block btn-md">Like</button>
</div>
<div class="col-md-4 col-sm-4 text-center">
<h2><strong>1.4K</strong></h2>                    
<p><small>Following</small></p>
<button class="btn btn-success btn-block btn-md">Follow</button>
</div>
<div class="col-md-4 col-sm-4 text-center">
<h2><strong>151</strong></h2>                    
<p><small>Subscriber</small></p>
<a href="https://www.youtube.com/channel/UCFbBevg1ehRAAq4AbvVGXRg?sub_confirmation=1" style="text-decoration-line: none;"><button type="button" class="btn btn-danger btn-block btn-md">Subscribe</button></a>
</div>
</div>
</div>
</div>
</div>
</div> 
</div>
  </main>
@endsection
