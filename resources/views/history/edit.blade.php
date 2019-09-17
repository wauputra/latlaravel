@extends('layout.main')

@section('title','Form Edit Riwayat')

@section('container')
<main role="main" class="inner cover">
    <h1 class="cover-heading">Form Edit Riwayat</h1>
    <form method="post" action="/historys/{{ $history->id }}">
    @method('patch')
    @csrf
    <div class="form-group">
        <label for="organisasi">Organisasi</label>
        <input type="text" class="form-control @error('organisasi') is-invalid @enderror" name="organisasi" placeholder="Masukan Organisasi" value="{{$history->organisasi}}">
        @error('organisasi')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" placeholder="Jabatan" value="{{$history->jabatan}}">
        @error('jabatan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="tahun">Tahun</label>
        <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" placeholder="Tahun" value="{{$history->tahun}}">
        @error('tahun')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-light">Ubah Data</button>
    </form>
  </main>
  @endsection
