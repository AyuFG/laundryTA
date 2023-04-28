@extends('layouts.admin.app')

@section('title', 'Edit Layanan')

@section('content')

<!--edit layanan-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="edit-layanan">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.layanan.update', $layanan->id) }}" enctype='multipart/form-data'>
    @endif
    @csrf
    @method('PUT')
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    @if(auth()->user()->roles_id == 1)
                        <a class="pr-3 text-dark" href="{{ route('super.layanan.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    @endif
                    <b>Edit Pelayanan</b>
                </h4>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-dark btn-sm">
                        Simpan
                    </button>
                </div>
            </div>
            <div class="card-body p-3 mb-2 bg-secondary text-white">
                @csrf
                <div class="d-flex justify-content-center m-4">
                    <label for="ikon_layanan" style="cursor: pointer">
                        @if ($layanan->ikon_layanan == Null)
                            <i class="fa-solid fa-camera fa-2xl"></i>
                            <input type="file" class="visually-hidden" placeholder="ikon_layanan" name="ikon_layanan" id="ikon_layanan" enabled>
                        @else
                            <img src="{{ asset('assets/ikon') }}/{{ $layanan->ikon_layanan }}" style="width:200px !important; height:200px !important;" class="img-circle elevation-2" alt="">
                            <input type="file" class="visually-hidden" placeholder="ikon_layanan" name="ikon_layanan" id="ikon_layanan" enabled>
                        @endif
                    </label>
                </div>
                <div class="mb-3 pb-4 row">
                    <label class="col-sm-3 col-form-label"
                        >Nama Pelayanan :
                    </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="nama_layanan"
                            id="nama_layanan"
                            value="{{$layanan->nama_layanan}}"
                            required
                        />
                    </div>
                </div>
                <div class="mb-3 pb-4 row">
                    <label class="col-sm-3 col-form-label"
                        >Deskripsi Pelayanan :
                    </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="deskripsi_layanan"
                            id="deskripsi_layanan"
                            value="{{$layanan->deskripsi_layanan}}"
                            required
                        />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!--./edit layanan-->

@endsection