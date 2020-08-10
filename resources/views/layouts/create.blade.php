@extends('layouts.master')

@section('content')
<div class="p-5">
  <div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">FORM INPUT</h1>
  </div>
  <form class="user" method="POST" action="/Proyek">
    @csrf 
    <div class="form-group">
      <input type="text" class="form-control form-control-user" id="nama_proyek" name="nama_proyek" placeholder="Masukkan Nama Proyek">
    </div>
    <div class="form-group">
      <input type="text" class="form-control form-control-user" id="deskripsi_proyek" name="deskripsi_proyek" placeholder="Masukkan Deskripsi Proyek">
    </div>
    <input type="submit" class="btn btn-primary">
  </form>
 
</div>
@endsection