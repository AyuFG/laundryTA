@extends('layouts.admin.app')

@section('title', 'Edit user')

@section('content')

<!--Edit user-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="edit-user">
  <div class="card">
  <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="font-size: 20px;">
          <a href="{{ route('super.user.index') }}" style="color:black;"><i class="fa-solid fa-arrow-left font-weight-bolder"></i></a>
          <span class="fw-bolder px-2">Edit User</span>
        </section>
            <form method="POST" action="{{ route('super.user.update', $user->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="font-size: 20px;">
          <a href="{{ route('admin.user.index') }}" style="color:black;"><i class="fa-solid fa-arrow-left font-weight-bolder"></i></a>
          <span class="fw-bolder px-2">Edit User</span>
        </section>
            <form method="POST" action="{{ route('super.user.update', $user->id) }}" enctype='multipart/form-data'>
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
        <label class="col-sm-3 col-form-label">Roles ID</label>
        <div class="col-sm-9">
          <select class="col-sm-12 col-form-label rounded-2" name="roles_id" id="roles_id" value="{{$user->roles_id}}" enabled>
            @if (auth()->user()->roles_id == 1)
            <option value="1">Super Admin</option>
            <option value="2">Admin</option>
            @endif
            <option value="3">Member</option>
            <option value="99">Guest</option>
          </select>
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
  <!--./Edit user-->

@endsection

