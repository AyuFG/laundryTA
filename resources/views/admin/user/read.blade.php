@extends('layouts.admin.app')

@section('title', 'Detail user')

@section('content')

<!--Detail user-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-user">
      @if(auth()->user()->roles_id == 1)
        <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="font-size: 20px;">
          <a href="{{ route('super.user.index') }}" style="color:black;"><i class="fa-solid fa-arrow-left font-weight-bolder"></i></a>
          <span class="fw-bolder px-2">Detail User</span>
        </section>
            <form method="POST" action="{{ route('super.user.show', $user->id) }}" enctype='multipart/form-data'>
      @elseif(auth()->user()->roles_id == 2)
        <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="font-size: 20px;">
          <a href="{{ route('admin.user.index') }}" style="color:black;"><i class="fa-solid fa-arrow-left font-weight-bolder"></i></a>
          <span class="fw-bolder px-2">Detail User</span>
        </section>
            <form method="POST" action="{{ route('admin.user.show', $user->id) }}" enctype='multipart/form-data'>
      @endif
    @csrf
    @method('PUT')
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Nama</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="nama" name="nama" id="nama" value="{{$user->nama}}" disabled>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="email" name="email" id="email" value="{{$user->email}}" disabled>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Gambar User</label>
        <div class="col-sm-9">
          <input type="file" class="form-control" placeholder="gambar_user" name="gambar_user" id="gambar_user" value="{{$user->gambar_user}}" disabled>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">No Telepon</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="no_telepon" name="no_telepon" id="no_telepon" value="{{$user->no_telepon}}" disabled>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="password" name="password" id="password" value="{{$user->password}}" disabled>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-3 col-form-label">Roles</label>
        <div class="col-sm-9">
          @if ($user->roles_id==1)
            <input class="form-control" name="roles_id" id="roles_id" value="Admin" disabled>
          @elseif($user->roles_id==2)
              <input class="form-control" name="roles_id" id="roles_id" value="Admin" disabled>
          @elseif($user->roles_id==3)
              <input class="form-control" name="roles_id" id="roles_id" value="Member" disabled>
          @elseif($user->roles_id==99)
              <input class="form-control" name="roles_id" id="roles_id" value="Guest" disabled>
          @endif
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
  <!--./Detail user-->

@endsection

