@extends('layouts.admin.app')

@section('title', 'Layanan')

@section('content')

<!--Layanan-->
<div class="col-lg-12 form-wrapper" id="layanan">
    <div class="container">
        <h4 class="card-title mb-4"><b>Service Pelayanan</b></h4>
        <div class="d-flex justify-content-end">
            @if(auth()->user()->roles_id == 1)
                <a href="{{ route('super.layanan.create') }}" class="btn btn-dark btn-sm mb-4">Tambah</a>
            @endif
        </div>
        @foreach ($layanans as $layanan)
        <div class="row mb-3">
            @if(auth()->user()->roles_id == 1)
                <a href="{{ route('super.sublayanan.index') }}" class="col-2 bg-secondary text-white d-flex align-items-center rounded-start">
                    @if ($layanan->ikon_layanan == Null)
                        <img src="{{ asset('assets/ikon') }}/default.png" alt="ikon" height="40" width="40"/>
                    @else
                        <img src="{{ asset('assets/ikon') }}/{{ $layanan->ikon_layanan }}" alt="ikon" height="40" width="40"/>
                    @endif
                </a>
                <a href="{{ route('super.sublayanan.index') }}" class="col-5 bg-secondary text-white d-flex align-items-center text-center rounded-end">
                    <b>{{ $layanan->nama_layanan }}</b>
                </a>
            @endif
            <div class="col-5 text-right">
                @if(auth()->user()->roles_id == 1)
                    <a href="{{ route('super.layanan.edit',$layanan->id) }}">
                @endif
                    <button 
                        class="btn btn-dark btn-sm mb-3 ml-1 mt-1 p-1"
                    >
                        Edit
                    </button>
                </a>
                <button
                    type="submit"
                    class="btn btn-dark btn-sm mb-3 ml-1 mt-1 p-1"
                >
                    Hapus
                </button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include('menu')
<!--./Layanan-->

@endsection