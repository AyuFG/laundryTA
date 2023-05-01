@extends('layouts.client.app')

@section('title', 'Edit Profile')

@section('content')
<div class="col-lg-12 col-lg-12 vh-100 d-flex justify-content-center flex-column" id="edit-user">
    <div class="card mx-lg-4" style="background-color: #AD48FA; color: #f1f1f1">
      <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="font-size: 20px;">
        <a href="/member"><i class="fa-solid fa-arrow-left font-weight-bolder text-white"></i>
          <span class="fw-bolder px-2" style="color: #E2DFEB;">Edit Profile</span>
        </a>
      </section>
    <div class="card-body">
      @if(auth()->user()->roles_id == 3)
          <form method="POST" action="{{ route('member.profile.update', $user->id) }}" enctype='multipart/form-data'>
      @endif
      @csrf
      @method('PUT')
      <div class="d-flex justify-content-center mb-3">
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
            <button type="submit" class="btn" style="background-color: #D6C37E;">Simpan</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection

