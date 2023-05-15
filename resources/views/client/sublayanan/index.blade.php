@extends('layouts.client.app')

@section('title', 'Sublayanan')

@section('content')

<div class="vh-100"  style="background-color: #24A384;">
    <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="color: #E2DFEB; font-size: 20px;">
        <a class="pr-3 text-light" href="{{ route('member.m-layanan.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <span class="fw-bolder px-2">{{$layanans->nama_layanan}}</span>
    </section>
    <section class="px-4 body-section d-flex flex-column gap-3 pt-3" style="padding-bottom: 100px">
    @foreach ($sublayanans as $sublayanan)
            <div class="d-flex align-items-center bg-white rounded-4 px-4 py-2">
                <div class="d-flex">
                    @if ($sublayanan->ikon_sub == Null)
                        <img src="{{ asset('assets/ikon') }}/default.png" alt="ikon" style="width: 4.2rem; height: 4.2rem;" class="p-1 rounded-circle"/>
                    @else
                        <img src="{{ asset('assets/ikon') }}/{{ $sublayanan->ikon_sub }}" alt="ikon" style="width: 4.2rem; height: 4.2rem;" class="p-1 rounded-circle"/>
                    @endif
                </div>
                <div class="col d-flex flex-column flex-md-row justify-content-between"> 
                    <span class="fw-bolder py-1">{{ $sublayanan->nama_sub }}</span>
                    <div class="d-flex justify-content-end gap-2">
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
            </div>
            @endforeach
        </section>

</div>

@include('menu')
@endsection

