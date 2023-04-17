@extends('layouts.admin.app')

@section('title', 'Layanan')

@section('content')

<!--Layanan-->
<div class="col-lg-12 form-wrapper" id="layanan">
    <div class="container">
        <h4 class="card-title mb-4"><b>Service Pelayanan</b></h4>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-dark btn-sm mb-4">
                Tambah
            </button>
        </div>
        <div class="row mb-3">
            <div
                class="col-2 bg-secondary text-white d-flex align-items-center rounded-start"
            >
                <img
                    src="assets/img/splash1.png"
                    alt=""
                    height="40"
                    width="40"
                />
            </div>
            <div
                class="col-5 bg-secondary text-white d-flex align-items-center text-center rounded-end"
            >
                <b>Premium Deep Clean</b>
            </div>
            <div class="col-5 text-right">
                <button
                    type="submit"
                    class="btn btn-dark btn-sm mb-3 ml-1 mt-1 p-1"
                >
                    Edit
                </button>
                <button
                    type="submit"
                    class="btn btn-dark btn-sm mb-3 ml-1 mt-1 p-1"
                >
                    Hapus
                </button>
            </div>
        </div>
        <div class="row mb-3">
            <div
                class="col-2 bg-secondary text-white d-flex align-items-center rounded-start"
            >
                <img
                    src="assets/img/splash1.png"
                    alt=""
                    height="40"
                    width="40"
                />
            </div>
            <div
                class="col-5 bg-secondary text-white d-flex align-items-center text-center rounded-end"
            >
                <b>Premium Deep Clean</b>
            </div>
            <div class="col-5 text-right">
                <button
                    type="submit"
                    class="btn btn-dark btn-sm mb-3 ml-1 mt-1 p-1"
                >
                    Edit
                </button>
                <button
                    type="submit"
                    class="btn btn-dark btn-sm mb-3 ml-1 mt-1 p-1"
                >
                    Hapus
                </button>
            </div>
        </div>
    </div>
</div>
<!--./Layanan-->

@endsection