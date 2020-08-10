@extends('layouts.master')

@section('content')
<div class="card mb-4">
  @foreach ($users as $user)
  <div class="card-header">
  {{ $user->nama_proyek }}
  </div>

  <div class="card-body">
    {{ $user->deskripsi_proyek }}
  </div>
  @endforeach
</div>
@endsection