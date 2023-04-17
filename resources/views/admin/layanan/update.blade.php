@extends('layouts.admin.app')

@section('title', 'Edit Layanan')

@section('content')

<!--edit layanan-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="edit-layanan">
    <form action="">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    <a class="pr-3 text-dark" href="#"
                        ><i class="fa fa-arrow-left" aria-hidden="true"></i></a
                    ><b>Edit Pelayanan</b>
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
                <div class="mb-3 pb-4 row">
                    <label class="col-sm-3 col-form-label"
                        >Nama Pelayanan :
                    </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="nama-layanan"
                            id="nama-layanan"
                            value="Premium Deep Clean"
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