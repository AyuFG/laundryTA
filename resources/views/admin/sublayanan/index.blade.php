@extends('layouts.admin.app')

@section('title', 'Jenis Layanan')

@section('content')

<!--subLayanan-->
<div class="col-lg-12 form-wrapper" id="sublayanan">
  <form action="">
    <div class="container">
        @if(auth()->user()->roles_id == 1)
            <a class="pr-3 text-dark" href="{{ route('super.layanan.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        @elseif(auth()->user()->roles_id == 2)
            <a class="pr-3 text-dark" href="{{ route('admin.layanan.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        @endif
        @foreach ($layanans as $layanan)
            <h4 class="card-title mb-4"><b>{{$layanan->nama_layanan}}</b></h4>
        @endforeach
        <div class="d-flex justify-content-end">
            @if(auth()->user()->roles_id == 1)
                <a href="{{ route('super.sublayanan.create') }}" class="btn btn-dark btn-sm mb-4">Tambah</a>  
            @elseif(auth()->user()->roles_id == 2)
                <a href="{{ route('admin.sublayanan.create') }}" class="btn btn-dark btn-sm mb-4">Tambah</a> 
            @endif
        </div>
        @foreach ($sublayanans as $sublayanan)
        <div class="row mb-3">
            <div class="col-2 bg-secondary text-white d-flex align-items-center rounded-start">
                @if ($sublayanan->ikon_sub == Null)
                    <img src="{{ asset('assets/ikon') }}/default.png" alt="ikon" height="40" width="40"/>
                @else
                    <img src="{{ asset('assets/ikon') }}/{{ $sublayanan->ikon_sub }}" alt="ikon" height="40" width="40"/>
                @endif
            </div>
            <div
                class="col-5 bg-secondary text-white d-flex align-items-center text-center rounded-end"
            >
                <b>{{ $sublayanan->nama_sub }}</b>
            </div>
            <div class="col-5 text-right">
                @if(auth()->user()->roles_id == 1)
                    <a href="{{ route('super.sublayanan.show',$sublayanan->id) }}" class="btn btn-dark btn-sm mb-3 ml-1 mt-1 p-1">
                        Desc
                    </a>
                @elseif(auth()->user()->roles_id == 2)
                    <a href="{{ route('admin.sublayanan.show',$sublayanan->id) }}" class="btn btn-dark btn-sm mb-3 ml-1 mt-1 p-1">
                        Desc
                    </a>
                @endif
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
  </form>
</div>
@include('menu')
<!--./subLayanan-->

@endsection