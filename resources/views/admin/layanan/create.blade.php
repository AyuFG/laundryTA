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
            <div class="card-body p-3 mb-2 bg-secondary text-white">
                @csrf
                <div class="d-flex justify-content-center m-4">
                    <label for="ikon_layanan" style="cursor: pointer">
                            <i class="fa-solid fa-camera fa-2xl"></i>
                            <input type="file" class="visually-hidden" name="ikon_layanan" id="ikon_layanan" enabled>
                            @error('ikon_layanan')
                                <span class="invalid-feedback text-center" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#ikon_layanan").change(function(){
    readURL(this);
});
</script>
@endsection