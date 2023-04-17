@extends('layouts.admin.app')

@section('title', 'Edit user')

@section('content')

<!--Edit user-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="edit-user">

    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Edit Data user</h4>
    </div>
    <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.user.update',$user->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.user.update',$user->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
      @method('PUT')
      <input type="hidden" value="$user->id" name="id">
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Judul</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Judul..." name="judul" id="judul" value="{{  $user->judul  }}" required>{{ $user->judul }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Deskripsi</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="deskripsi" id="deskripsi" value="{{  $user->deskripsi  }}" required>{{ $user->deskripsi }}</textarea>
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

