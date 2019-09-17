@extends('layout.main')

@section('title','Detail Riwayat')

@section('container')
<main role="main" class="inner cover">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card text-white bg-dark">
                <div class="card-header">Detail Riwayat</div>
                <div class="card-body">
                    <h5 class="card-title">{{$history->organisasi}}</h5>
                    <p class="card-text">{{$history->jabatan}} - {{$history->tahun}}</p>
                    <a href="{{$history->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="/historys/{{$history->id}}" method="post" css="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/historys" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>

  </main>
  @endsection
