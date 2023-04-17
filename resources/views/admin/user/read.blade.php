@extends('layouts.admin.app')

@section('title', 'Detail user')

@section('content')

<!--Detail user-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-user">

    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Detail Data user</h4>
    </div>
    <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.user.show',$user->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.user.show',$user->id) }}" enctype='multipart/form-data'>
    @endif
      @method('PUT')
      @csrf
      <input type="hidden" value="$user->id" name="id">
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Judul</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Judul..." name="judul" id="judul" value="{{  $user->judul  }}" disabled>{{ $user->judul }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Deskripsi</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="deskripsi" id="deskripsi" value="{{  $user->deskripsi  }}" disabled>{{ $user->deskripsi }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-9">
              <a>
                @if(auth()->user()->roles_id == 1)
                    <a class="btn btn-primary" href="{{ route('super.user.index') }}">Kembali</a>
                @elseif(auth()->user()->roles_id == 2)
                    <a class="btn btn-primary" href="{{ route('admin.user.index') }}">Kembali</a>
                @endif
              </a>
            </div>
        </div><br><br><br>
        </form>
      </div>
    </div>
  </div>
  <!--./Detail user-->

@endsection

