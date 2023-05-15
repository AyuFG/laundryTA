@extends('layouts.client.app')

@section('title', 'Layanan')

@section('content')

<div class="vh-100" style="background-color: #24A384;">
    <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="font-size: 20px;">
        <a href="/member"><i class="fa-solid fa-arrow-left font-weight-bolder text-white"></i>
            <span class="fw-bolder px-2" style="color: #E2DFEB;">Service Pelayanan</span>
        </a>
    </section>
    <section class="px-4 body-section d-flex flex-column gap-3 pt-3" style="padding-bottom: 100px">
    @foreach ($layanans as $layanan)
        <a href="{{ route('member.m-layanan.show',$layanan->id) }}" class="d-flex align-items-center bg-white rounded-4 px-4 py-2 ">
                <div class="d-flex">
                   @if ($layanan->ikon_layanan == Null)
                        <img src="{{ asset('assets/ikon') }}/default.png" alt="ikon" style="width: 4.2rem; height: 4.2rem;" class="p-1 rounded-circle"/>
                    @else
                        <img src="{{ asset('assets/ikon') }}/{{ $layanan->ikon_layanan }}" alt="ikon" style="width: 4.2rem; height: 4.2rem;" class="p-1 rounded-circle"/>
                    @endif
                </div>
                <div class="col d-flex flex-column justify-content-between"> 
                    <span class="fw-bolder py-1">{{ $layanan->nama_layanan }}</span>
                    <div class="font-weight-normal text-black">
                        <span>{{$layanan->deskripsi_layanan}}</span>
                    </div>
                </div>
            </a>

    {{-- <section class="row d-flex justify-content-center gap-3 px-4 pt-5">
        <a href="{{ route('member.m-layanan.show',$layanan->id) }}" class="d-flex align-items-center gap-4 bg-white ps-4 text-decoration-none font-weight-bolder text-black rounded-4">
            @if ($layanan->ikon_layanan == Null)
                <img src="{{ asset('assets/ikon') }}/default.png" alt="ikon" style="width: 4.2rem; height: 4.2rem;" class="p-1"/>
            @else
                <img src="{{ asset('assets/ikon') }}/{{ $layanan->ikon_layanan }}" alt="ikon" style="width: 4.2rem; height: 4.2rem;" class="p-1"/>
            @endif
            <span>{{ $layanan->nama_layanan }}</span>
        </a>
    </section> --}}
    @endforeach
    </section>
</div>

@endsection

@include('menu')