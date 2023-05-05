@extends('layouts.client.app')

@section('title', 'Sublayanan')

@section('content')

<div class="vh-100"  style="background-color: #AD48FA;">
    <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="color: #E2DFEB; font-size: 20px;">
        <a class="pr-3 text-light" href="{{ url()->previous() }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <span class="fw-bolder px-2">{{$layanans->nama_layanan}}</span>
    </section>
    <section class="px-4 body-section d-flex flex-column gap-3 pt-3" style="padding-bottom: 100px">
    @foreach ($sublayanans as $sublayanan)
            <div class="d-flex align-items-center justify-content-between gap-4 bg-white rounded-4 px-4">
                @if ($sublayanan->ikon_sub == Null)
                    <img src="{{ asset('assets/ikon') }}/default.png" alt="ikon" style="width: 4.2rem; height: 4.2rem;" class="p-1"/>
                @else
                    <img src="{{ asset('assets/ikon') }}/{{ $sublayanan->ikon_sub }}" alt="ikon" style="width: 4.2rem; height: 4.2rem;" class="p-1"/>
                @endif
                <span class="fw-bolder">{{ $sublayanan->nama_sub }}</span>
                <div class="d-flex gap-2">
                    <a href="/member/order/{{$sublayanan->id}}">
                        <button class="btn fw-bold rounded-3" style="background-color: #D6C37E;" id="desc-toggle">
                            Order
                        </button>
                    </a>
                    <a href="https://wa.me/+6281397575460?text=Halo admin SOC Clean Lampung, Saya {{auth()->user()->nama}}">
                        <button class="btn fw-bold rounded-3" style="background-color: #D6C37E;" id="Chat">
                            Chat
                        </button>
                    </a>
                </div>
            </div>
            @endforeach
        </section>

</div>

@include('menu')
@endsection

