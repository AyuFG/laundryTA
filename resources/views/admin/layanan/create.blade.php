@extends('layouts.admin.app')

@section('title', 'Tambah Layanan')

@section('content')

<!--tambah layanan-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="tambah-layanan">
    @if(auth()->user()->roles_id == 1)
        <form method="POST" action="{{ route('super.layanan.store') }}" enctype='multipart/form-data'>
    @endif
    @csrf
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    @if(auth()->user()->roles_id == 1)
                        <a class="pr-3 text-dark" href="{{ route('super.layanan.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                    @endif
                    <b>Tambah Pelayanan</b>
                </h4>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-dark btn-sm">
                        Simpan
                    </button>
                </div>
            </div>
            <div class="card-body p-3 bg-secondary text-white">
                @csrf
                <div class="d-flex justify-content-center m-4">
                    <label for="ikon_layanan" class="justify-content-center d-flex align-items-center" style="cursor: pointer">
                            <i class="fa-solid fa-camera fa-2xl" id="ikon_fa"></i>
                            <input type="file" onchange="loadFile(event)" class="visually-hidden" name="ikon_layanan" id="ikon_layanan" enabled>
                            @error('ikon_layanan')
                                <span class="invalid-feedback text-center" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <img src="" id="output" style="width:200px !important; height:200px !important;" class="img-circle elevation-2 visually-hidden" alt="">
                    </label>
                </div>
                <div class="mb-3 pb-4 row">
                    <label class="col-sm-3 col-form-label"
                        >Nama Pelayanan :
                    </label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control @error('nama_layanan') is-invalid @enderror" value="{{ old('nama_layanan') }}"
                            name="nama_layanan"
                            id="nama_layanan"
                            placeholder="Nama Pelayanan"
                            required
                        />
                        @error('nama_layanan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 pb-4 row">
                    <label class="col-sm-3 col-form-label"
                        >Deskripsi Pelayanan :
                    </label>
                    <div class="col-sm-9">
                        <textarea
                            class="form-control @error('deskripsi_layanan') is-invalid @enderror" value="{{ old('deskripsi_layanan') }}"
                            name="deskripsi_layanan"
                            id="deskripsi_layanan"
                            placeholder="Deskripsi Pelayanan"
                            required>
                        </textarea>
                        @error('deskripsi_layanan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!--./tambah layanan-->
@endsection
@section('script')
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    var ikon = document.getElementById('ikon_fa');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
      ikon.classList.add("visually-hidden");
      output.classList.remove("visually-hidden");
    }
  };
</script>
@endsection