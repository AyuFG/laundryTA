@extends('layouts.admin.app')

@section('title', 'Deskripsi Sublayanan')

@section('content')

<!--detail sublayanan-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-sublayanan">
    <form action="">
        <div class="card">
            <div class="d-flex px-3 py-3 flex-row justify-content-between align-items-center">
                <div>
                    @if(auth()->user()->roles_id == 1)
                        <div>
                            <a href="{{ route('super.layanan.show',$layanan->id) }}" class="bg-opacity-10 btn" style="font-size: 1.2rem;">
                                <i class="fa-solid fa-arrow-left font-weight-bolder"></i>
                                <span class="font-weight-bolder px-2">Detail Jenis Pelayanan</span>
                            </a>
                        </div>
                    @elseif(auth()->user()->roles_id == 2)
                        <div>
                            <a href="{{ route('admin.layanan.show',$layanan->id) }}" class="bg-opacity-10 btn" style="font-size: 1.2rem;">
                                <i class="fa-solid fa-arrow-left font-weight-bolder"></i>
                                <span class="font-weight-bolder px-2">Detail Jenis Pelayanan</span>
                            </a>
                        </div>
                    @endif
                </div>
                <div>
                    @if(auth()->user()->roles_id == 1)
                        <a href="{{ route('super.sublayanan.edit',$sublayanan->id) }}" class="text-decoration-none">
                            <button class="btn btn-dark">Simpan</button>
                        </a>
                        @elseif(auth()->user()->roles_id == 2)
                        <a href="{{ route('admin.sublayanan.edit',$sublayanan->id) }}" class="text-decoration-none">
                            <button class="btn btn-dark">Simpan</button>
                        </a>
                    @endif
                </div>
            </div>
            <div class="card-body p-3 mb-2 bg-secondary text-white">
                @csrf
                <div class="d-flex justify-content-center m-4">
                    <label for="ikon_sub">
                        <img src="{{ asset('assets/ikon') }}/{{ $sublayanan->ikon_sub }}" style="width:200px !important; height:200px !important;" class="img-circle elevation-2" alt="">
                        <input type="file" class="visually-hidden" placeholder="ikon_sub" name="ikon_sub" id="ikon_sub" disabled>
                    </label>
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

