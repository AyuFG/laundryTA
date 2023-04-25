@extends('layouts.admin.app')

@section('title', 'Deskripsi Sublyanan')

@section('content')

<!--detail sublayanan-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-sublayanan">
    <form action="">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    @if(auth()->user()->roles_id == 1)
                        <a class="pr-3 text-dark" href="{{ route('super.sublayanan.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    @elseif(auth()->user()->roles_id == 2)
                        <a class="pr-3 text-dark" href="{{ route('admin.sublayanan.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    @endif
                    <b>Detail Jenis Pelayanan</b>
                </h4>
                <div class="d-flex justify-content-end">
                    @if(auth()->user()->roles_id == 1)
                        <a href="{{ route('super.sublayanan.edit',$sublayanan->id) }}" class="btn btn-dark btn-sm ml-1 mt-1">
                            Edit
                        </a>
                    @elseif(auth()->user()->roles_id == 2)
                        <a href="{{ route('admin.sublayanan.edit',$sublayanan->id) }}" class="btn btn-dark btn-sm ml-1 mt-1">
                            Edit
                        </a>
                    @endif
                </div>
            </div>
            <div class="card-body p-3 mb-2 bg-secondary text-white">
                @csrf
                <div class="d-flex justify-content-center m-4">
                    <img src="{{$sublayanan->ikon_sub}}" alt="" width="100">
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label"
                        >Nama Jenis Pelayanan:
                    </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="nama_sub"
                            id="nama_sub"
                            value="{{$sublayanan->nama_sub}}"
                            required disabled
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
                            required disabled>{{$sublayanan->deskripsi_sub}}</textarea>
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
                            value="{{$sublayanan->waktu_sub}}"
                            required disabled
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
                            value="{{$sublayanan->harga_sub}}"
                            required disabled
                        />
                    </div>
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label"
                        >Jenis Barang :
                    </label>
                    <select class="col-sm-9 col-form-label rounded-2" name="barang" id="barang" value="{{$sublayanan->barang_sub}}">
                      <option value="sepatu">sepatu</option>
                      <option value="sendal">sendal</option>
                      <option value="baju">baju</option>
                      <option value="celana">Audi</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
</div>
<!--./detail sublayanan-->

@endsection

