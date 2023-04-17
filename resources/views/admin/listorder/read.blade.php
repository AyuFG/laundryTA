@extends('layouts.admin.app')

@section('title', 'Detail Order')

@section('content')

<!--detail order-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-order">
    <form action="">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    <a class="pr-3 text-dark" href="#"
                        ><i class="fa fa-arrow-left" aria-hidden="true"></i></a
                    ><b>Detail Order</b>
                </h4>
            </div>
            <div class="card-body p-3 mb-2 bg-secondary text-white">
                @csrf
                <div class="d-flex justify-content-center m-4">
                    <img src="assets/img/splash2.png" alt="" width="100">
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label"
                        >Nama:
                    </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="nama-order"
                            id="nama-order"
                            value="Medium"
                            required disabled
                        />
                    </div>
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label"
                        >Tanggal :
                    </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="tanggal-order"
                            id="tanggal-order"
                            value="10"
                            required disabled
                        />
                    </div>
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label">Nomor Whatsapp : </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="no-wa-order"
                            id="no-wa-order"
                            value="08234567890"
                            required disabled
                        />
                    </div>
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label">Alamat : </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="alamat-order"
                            id="alamat-order"
                            value="Jl.xxxxx"
                            required disabled
                        />
                    </div>
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label">Jenis Pelayanan : </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="jenis-order"
                            id="jenis-order"
                            value="Medium"
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
                            name="harga-order"
                            id="harga-order"
                            value="30000"
                            required disabled
                        />
                    </div>
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label">Keluhan : </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="keluhan-order"
                            id="keluhan-order"
                            value="keluhan"
                            required disabled
                        />
                    </div>
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label">Foto Keluhan: </label>
                    <div class="col-sm-9">
                        <input
                            type="file"
                            class="form-control"
                            name="foto-order"
                            id="foto-order"
                            value=""
                            required disabled
                        />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!--./detail order-->

@endsection
