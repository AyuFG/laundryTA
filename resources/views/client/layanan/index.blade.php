@extends('layouts.client.app')

@section('title', 'Layanan')

@section('content')

<div class="vh-100" style="background-color: #AD48FA;">
    <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="font-size: 20px;">
        <a href="/member"><i class="fa-solid fa-arrow-left font-weight-bolder text-white"></i>
            <span class="fw-bolder px-2" style="color: #E2DFEB;">Service Pelayanan</span>
        </a>
    </section>
    @foreach ($layanans as $layanan)
    <section class="row d-flex justify-content-center gap-3 px-4 pt-5">
        <a href="{{ route('member.m-layanan.show',$layanan->id) }}" class="d-flex align-items-center gap-4 bg-white ps-4 text-decoration-none font-weight-bolder text-black rounded-4">
            @if ($layanan->ikon_layanan == Null)
                <img src="{{ asset('assets/ikon') }}/default.png" alt="ikon" style="width: 4.2rem; height: 4.2rem;" class="p-1"/>
            @else
                <img src="{{ asset('assets/ikon') }}/{{ $layanan->ikon_layanan }}" alt="ikon" style="width: 4.2rem; height: 4.2rem;" class="p-1"/>
            @endif
            <span>{{ $layanan->nama_layanan }}</span>
        </a>
    </section>
    @endforeach
</div>

@endsection

@include('menu')