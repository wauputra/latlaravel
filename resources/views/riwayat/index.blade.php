@extends('layout.main')

@section('title','Daftar Riwayat')

@section('container')
<main role="main" class="inner cover">
    <h1 class="cover-heading">Daftar Riwayat</h1>
    <table class="table table-striped">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Organisasi</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Tahun</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody class="text-white">
    @foreach($riwayat as $rw)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$rw->organisasi}}</td>
      <td>{{$rw->jabatan}}</td>
      <td>{{$rw->tahun}}</td>
      <td>
        <a href="" class="badge badge-success">edit</a>
        <a href="" class="badge badge-danger">hapus</a>
      </td>
    </tr>
    @endforeach
    </tbody>
    </table>
  </main>
  @endsection
