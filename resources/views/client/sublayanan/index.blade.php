@extends('layouts.client.app')

@section('title', 'Sublayanan')

@section('content')

<div class="vh-100"  style="background-color: #AD48FA;">
    <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="color: #E2DFEB; font-size: 20px;">
        <i class="fa-solid fa-arrow-left font-weight-bolder"></i>
        <span class="fw-bolder px-2">Premium Deep Clean</span>
    </section>
    @foreach ($sublayanans as $sublayanan)
        <section class="px-4 body-section d-flex flex-column gap-3 py-3">
            <div class="d-flex align-items-center justify-content-between gap-4 bg-white rounded-4 px-4">
                @if ($sublayanan->ikon_sub == Null)
                    <img src="{{ asset('assets/ikon') }}/default.png" alt="ikon" height="40" width="40"/>
                @else
                    <img src="{{ asset('assets/ikon') }}/{{ $sublayanan->ikon_sub }}" alt="ikon" height="40" width="40"/>
                @endif
                <span class="fw-bolder">{{ $sublayanan->nama_sub }}</span>
                <div class="d-flex gap-2">
                    <a href="{{route('member.m-order.create')}}">
                        <button class="btn fw-bold rounded-3" style="background-color: #D6C37E;" id="desc-toggle">
                            Desc
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn fw-bold rounded-3" style="background-color: #D6C37E;" id="Chat">
                            Chat
                        </button> 
                    </a>
                </div>
            </div>
        </section>
    @endforeach
    
</div>

@endsection

@include('menu')
