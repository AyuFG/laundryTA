@extends('layouts.admin.app')

@section('title', 'Tambah user')

@section('content')

  <!--Tambah user-->
  <div class="col-lg-12 col-lg-12 form-wrapper" id="tambah-user">
        @if(auth()->user()->roles_id == 1)
        <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="font-size: 20px;">
          <a href="/super/user" style="color:black;"><i class="fa-solid fa-arrow-left font-weight-bolder"></i></a>
          <span class="fw-bolder px-2">Tambah User</span>
        </section>
            <form method="POST" action="{{ route('super.profile.store') }}" enctype='multipart/form-data'>
        @endif
            @csrf
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="nama" name="nama" id="nama" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="email" name="email" id="email" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Gambar User</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" placeholder="gambar_user" name="gambar_user" id="gambar_user" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">No Telepon</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="no_telepon" name="no_telepon" id="no_telepon" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" placeholder="password" name="password" id="password" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Roles ID</label>
            <div class="col-sm-9">
              <select class="col-sm-12 col-form-label rounded-2" name="roles_id" id="roles_id" required>
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
    <!--./Tambah user-->

@endsection