@extends('layouts.admin.app')

@section('title', 'Edit Profile')

@section('content')
<div class="col-lg-12 col-lg-12 form-wrapper" id="edit-user">
    <div class="card">
      @if(auth()->user()->roles_id == 1)
      <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="font-size: 20px;">
        <a href="/super" style="color:black;"><i class="fa-solid fa-arrow-left font-weight-bolder"></i></a>
        <span class="fw-bolder px-2">Edit Profile</span>
      </section>
    <div class="card-body">
          <form method="POST" action="{{ route('super.profile.update', $user->id) }}" enctype='multipart/form-data'>
      @elseif(auth()->user()->roles_id == 2)
      <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="font-size: 20px;">
        <a href="/admin" style="color:black;"><i class="fa-solid fa-arrow-left font-weight-bolder"></i></a>
        <span class="fw-bolder px-2">Edit Profile</span>
      </section>
    <div class="card-body">
          <form method="POST" action="{{ route('admin.profile.update', $user->id) }}" enctype='multipart/form-data'>
      @endif
      @csrf
      @method('PUT')
      <div class="d-flex justify-content-center m-4">
        <label for="gambar_user">
            @if ($user->gambar_user == Null)
                <i class="fa-solid fa-camera fa-2xl"></i>
                <input type="file" class="visually-hidden" placeholder="gambar_user" name="gambar_user" id="gambar_user" enabled>
            @else
                <img src="{{ asset('assets/profile') }}/{{ $user->gambar_user }}" style="width:200px !important; height:200px !important;" class="img-circle elevation-2" alt="">
                <input type="file" class="visually-hidden" placeholder="gambar_user" name="gambar_user" id="gambar_user" enabled>
            @endif
        </label>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="nama" name="nama" id="nama" value="{{$user->nama}}" enabled>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="email" name="email" id="email" value="{{$user->email}}" enabled>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">No Telepon</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="no_telepon" name="no_telepon" id="no_telepon" value="{{$user->no_telepon}}" enabled>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="password" name="password" id="password" value="{{$user->password}}" enabled>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-sm-9">
            <button type="submit" class="btn btn-primary ">Simpan</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection

