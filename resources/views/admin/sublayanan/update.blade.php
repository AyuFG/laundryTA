@extends('layouts.admin.app')

@section('title', 'Edit sublayanan')

@section('content')

<!--Edit sublayanan-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="edit-sublayanan">

    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Edit Data sublayanan</h4>
    </div>
    <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.sublayanan.update',$sublayanan->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.sublayanan.update',$sublayanan->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
      @method('PUT')
      <input type="hidden" value="$sublayanan->id" name="id">
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Judul</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Judul..." name="judul" id="judul" value="{{  $sublayanan->judul  }}" required>{{ $sublayanan->judul }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Deskripsi</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="deskripsi" id="deskripsi" value="{{  $sublayanan->deskripsi  }}" required>{{ $sublayanan->deskripsi }}</textarea>
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
  <!--./Edit sublayanan-->

@endsection
