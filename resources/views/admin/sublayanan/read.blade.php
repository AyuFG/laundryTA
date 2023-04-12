@extends('layouts.admin.app')

@section('title', 'Detail sublayanan')

@section('content')

<!--Detail sublayanan-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-sublayanan">

    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Detail Data sublayanan</h4>
    </div>
    <div class="card-body">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.sublayanan.show',$sublayanan->id) }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.sublayanan.show',$sublayanan->id) }}" enctype='multipart/form-data'>
    @endif
      @method('PUT')
      @csrf
      <input type="hidden" value="$sublayanan->id" name="id">
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Judul</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Judul..." name="judul" id="judul" value="{{  $sublayanan->judul  }}" disabled>{{ $sublayanan->judul }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Deskripsi</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Deskripsi" name="deskripsi" id="deskripsi" value="{{  $sublayanan->deskripsi  }}" disabled>{{ $sublayanan->deskripsi }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-9">
              <a>
                @if(auth()->user()->roles_id == 1)
                    <a class="btn btn-primary" href="{{ route('super.sublayanan.index') }}">Kembali</a>
                @elseif(auth()->user()->roles_id == 2)
                    <a class="btn btn-primary" href="{{ route('admin.sublayanan.index') }}">Kembali</a>
                @endif
              </a>
            </div>
        </div><br><br><br>
        </form>
      </div>
    </div>
  </div>
  <!--./Detail sublayanan-->

@endsection

