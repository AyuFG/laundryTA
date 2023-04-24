@extends('layouts.admin.app')

@section('title', 'Detail Profile')

@section('content')
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-user">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Detail Profile</h4>
    </div>
    <div class="card-body">
      @if(auth()->user()->roles_id == 1)
          <form method="POST" action="{{ route('super.profile.show', $user->id) }}" enctype='multipart/form-data'>
      @elseif(auth()->user()->roles_id == 2)
          <form method="POST" action="{{ route('admin.profile.show', $user->id) }}" enctype='multipart/form-data'>
      @endif
      @csrf
      @method('PUT')
        <div class="image text-center mb-4">
            @if ($user->fotoProfil == Null)
            <img src="{{ asset('assets/profile') }}/default.png" style="width:200px !important; height:200px !important;" class="img-circle elevation-2" alt="User Image">
            @else
            <img src="{{ asset('assets/profile') }}/{{ $user->gambar_user }}" style="width:200px !important; height:200px !important;" class="img-circle elevation-2" alt="User Image">
            @endif
        </div>
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
          <label class="col-sm-3 col-form-label">No Telepon</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="no_telepon" name="no_telepon" id="no_telepon" value="{{$user->no_telepon}}" disabled>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-sm-9">
            <a>
              @if(auth()->user()->roles_id == 1)
                  <a class="btn btn-primary" href="{{ route('super.user.index') }}">Kembali</a>
              @endif
            </a>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  @include('menu')
@endsection

