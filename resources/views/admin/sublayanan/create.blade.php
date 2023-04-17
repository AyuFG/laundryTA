@extends('layouts.admin.app')

@section('title', 'Tambah Sub Layanan')

@section('content')

<!--tambah sublayanan-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="tambah-sublayanan">
    <form action="">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    <a class="pr-3 text-dark" href="#"
                        ><i class="fa fa-arrow-left" aria-hidden="true"></i></a
                    ><b>Tambah Jenis Pelayanan</b>
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
                    <label for="file_input"
                        ><i class="fa-solid fa-camera fa-2xl"></i></label
                    ><input
                        type="file"
                        id="file_input"
                        class="visually-hidden"
                    />
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label"
                        >Nama Jenis Pelayanan :
                    </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="nama-sublayanan"
                            id="nama-sublayanan"
                            required
                        />
                    </div>
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label">Deskripsi : </label>
                    <div class="col-sm-9">
                        <textarea
                            class="form-control"
                            name="deskripsi-sublayanan"
                            id="deskripsi-sublayanan"
                            required cols="30" rows="10"></textarea>
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
                            name="waktu-sublayanan"
                            id="waktu-sublayanan"
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
                            name="harga-sublayanan"
                            id="harga-sublayanan"
                            required
                        />
                    </div>
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label"
                        >Jenis Barang :
                    </label>
                    <select class="col-sm-9 col-form-label rounded-2" name="barang" id="barang">
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
<!--./tambah sublayanan-->

@endsection