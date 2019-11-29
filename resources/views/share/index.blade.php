@extends('layouts.header')
@section('content')
  <main role="main" class="inner cover">

  	<audio id="myAudio">
  <source src="{{asset('/audio/1.mp3')}}" type="audio/ogg">
  <source src="horse.mp3" type="audio/mpeg">
</audio>

    <h1 class="cover-heading"><font face="Odibee Sans">Selamat Datang!</font></h1>
    <p class="lead">Selamat Datang Di Web Absen Eskul Exercise Smk Telematika Indramayu</p>
      <button class="btn btn-lg btn-secondary" id="mybutton" onclick="playAudio()">Click Here!</a>
  </main>
@endsection
