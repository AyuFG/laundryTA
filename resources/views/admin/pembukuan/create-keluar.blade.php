@extends('layouts.admin.app')

@section('title', 'Pengeluaran')

@section('content')

<!--pengeluaran-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="pengeluaran">
    <form action="">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">
                    <b>Pengeluaran</b>
                </h4>
            </div>
            <div class="card-body p-3 mb-2 bg-secondary text-white">
                @csrf
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label"
                        >Tanggal :
                    </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="tanggal-pengeluaran"
                            id="tanggal-pengeluaran"
                            value="Medium"
                            required disabled
                        />
                    </div>
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label">Deskripsi : </label>
                    <div class="col-sm-9">
                        <textarea
                            class="form-control"
                            name="deskripsi-pengeluaran"
                            id="deskripsi-pengeluaran"
                            required cols="30" rows="10">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem eaque, iste similique eum maxime amet perspiciatis recusandae aliquid officia ad tempora, quos molestiae nemo! Nesciunt, nihil nostrum? Exercitationem, a adipisci!</textarea>
                    </div>
                </div>
                <div class="mb-2 pb-2 row">
                    <label class="col-sm-3 col-form-label">Total : </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            name="total-pengeluaran"
                            id="total-pengeluaran"
                            value="10000"
                            required
                        />
                    </div>
                </div>
            </div>
            <button
                    type="submit"
                    class="btn btn-dark btn-sm mb-3 ml-1 mt-1 p-1"
                >
                    Simpan
            </button>
            <button
                    type="submit"
                    class="btn btn-dark btn-sm mb-3 ml-1 mt-1 p-1"
                >
                    Batal
            </button>            
        </div>
    </form>
</div>
<!--./pengeluaran-->

@endsection
