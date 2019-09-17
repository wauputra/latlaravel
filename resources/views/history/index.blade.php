@extends('layout.main')

@section('title','Daftar Riwayat')

@section('container')
<main role="main" class="inner cover">
    <h1 class="cover-heading">Daftar Riwayat</h1>
    <a href="/historys/create" class="btn btn-primary my-3">Tambah Riwayat</a>

    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    <ul class="list-group">
    @foreach($history as $his)
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-dark">
            {{$his->organisasi}}
            <a href="/historys/{{$his->id}}" class="badge btn-light">Detail</a>
        </li>
    @endforeach
</ul>
  </main>
  @endsection
