@extends('layouts.admin.app')

@section('title', 'Tambah user')

@section('content')

  <!--Tambah user-->
  <div class="col-lg-12 col-lg-12 form-wrapper" id="tambah-user">
      <div class="card">
      <div class="card-header">
      <h4 class="card-title">Input Data user</h4>
      </div>
      <div class="card-body">
        @if(auth()->user()->roles_id == 1)
            <form method="POST" action="{{ route('super.user.store') }}" enctype='multipart/form-data'>
        @elseif(auth()->user()->roles_id == 2)
            <form method="POST" action="{{ route('admin.user.store') }}" enctype='multipart/form-data'>
        @endif
            @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Judul</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area" placeholder="Judul..." name="judul" id="judul" required></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-9">
              <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="deskripsi" id="deskripsi" required></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-9">
              <button type="submit" class="btn btn-primary ">Tambah</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!--./Tambah user-->

@endsection