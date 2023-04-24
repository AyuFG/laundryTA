@extends('layouts.admin.app')

@section('title', 'Edit Profile')

@section('content')
<div class="col-lg-12 col-lg-12 form-wrapper" id="edit-user">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Edit Profile</h4>
    </div>
    <div class="card-body">
      @if(auth()->user()->roles_id == 1)
          <form method="POST" action="{{ route('super.profile.update', $user->id) }}" enctype='multipart/form-data'>
      @elseif(auth()->user()->roles_id == 2)
          <form method="POST" action="{{ route('admin.profile.update', $user->id) }}" enctype='multipart/form-data'>
      @endif
      @csrf
      @method('PUT')
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
          <label class="col-sm-3 col-form-label">Gambar User</label>
          <div class="col-sm-9">
            <input type="file" class="form-control" placeholder="gambar_user" name="gambar_user" id="gambar_user" value="{{$user->gambar_user}}" enabled>
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

