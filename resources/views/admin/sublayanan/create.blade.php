@extends('layouts.admin.app')

@section('title', 'Tambah Sublayanan')

@section('content')

<!--tambah sublayanan-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="tambah-sublayanan">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.sublayanan.store') }}" enctype='multipart/form-data'>
    @elseif(auth()->user()->roles_id == 2)
        <form method="POST" action="{{ route('admin.sublayanan.store') }}" enctype='multipart/form-data'>
    @endif
    @csrf
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    @if(auth()->user()->roles_id == 1)
                        <a class="pr-3 text-dark" href="{{ route('super.sublayanan.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    @elseif(auth()->user()->roles_id == 2)
                        <a class="pr-3 text-dark" href="{{ route('admin.sublayanan.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    @endif
                    <b>Tambah Jenis Pelayanan</b>
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
                    <label for="ikon_sub" style="cursor: pointer">
                        <i class="fa-solid fa-camera fa-2xl"></i>
                        <input type="file" class="visually-hidden" placeholder="ikon_sub" name="ikon_sub" id="ikon_sub" enabled>
                    </label>
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label"
                        >Nama Jenis Pelayanan :
                    </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="nama_sub"
                            id="nama_sub"
                            required
                        />
                    </div>
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label">Deskripsi : </label>
                    <div class="col-sm-9">
                        <textarea
                            class="form-control"
                            name="deskripsi_sub"
                            id="deskripsi_sub"
                            required>
                        </textarea>
                    </div>
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label"
                        >Estimasi Waktu :
                    </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="waktu_sub"
                            id="waktu_sub"
                            required
                        />
                    </div>
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label">Harga : </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="harga_sub"
                            id="harga_sub"
                            required
                        />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!--./tambah sublayanan-->

@endsection