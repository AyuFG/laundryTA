@if(auth()->user()->roles_id != 99)
@extends('layouts.client.app')

@section('title', 'Beranda')

@section('content')
@if(auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2)
<body class="bg-dark">
    <div class="vh-100">
        <section class="nev-section py-5 px-4 d-flex justify-content-between align-items-center">
            <div class="p-2 d-flex rounded-4" style="background-color: #f1f1f1; color:black;">
@else
<body style="background-color: #24A384;">
    <div class="vh-100">
        <section class="nev-section py-5 px-4 d-flex justify-content-between align-items-center">
            <div class="p-2 d-flex rounded-4" style="background-color: #D6C37E;">
@endif
                <span class="fw-bolder m-2" style="font-size: 1rem">Laundry Sepatu SOC CLEAN Lampung</span>
            </div>
            <div class="button-container d-flex justify-content-center align-items-center">
                @if(auth()->user()->roles_id == 1)
                    <div class="modal fade show" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-modal="false" role="dialog">
                        <div class="modal-dialog fixed-bottom bottom-0">
                            <div class="modal-content" style="background-color: #E2DFEB;">
                                <div class="d-flex px-3 py-4">
                                    <button type="button" class="border-0" data-bs-dismiss="modal" aria-label="Close" style="background-color: #E2DFEB; color: #2b2b2b; font-size: 20px;">
                                        <i class="fa-solid fa-arrow-left font-weight-bolder"></i>
                                    </button>
                                    <span class="font-weight-bolder px-2" style="color: #2b2b2b; font-size: 20px;">Menu</span>
                                </div>
                                <div class="d-flex flex-column gap-3 justify-content-start align-items-start w-100 pb-4">
                                        <a href="/super/layanan" class="d-flex align-items-center px-5 w-100">
                                            <i class="fa-solid fa-cart-arrow-down" style="color: #2b2b2b"></i>
                                            <p class="text-black m-0 px-2 text-lg">Layanan</p>
                                        </a>
                                        <a href="/super/transaksi" class="d-flex align-items-center px-5 w-100">
                                            <i class="fa-solid fa-clock-rotate-left" style="color: #2b2b2b"></i>
                                            <p class="text-black m-0 px-2 text-lg">Transaksi</p>
                                        </a>
                                        <a href="/super/chart" class="d-flex align-items-center px-5 w-100">
                                            <i class="fa-solid fa-book" style="color: #2b2b2b"></i>
                                            <p class="text-black m-0 px-2 text-lg">Pembukuan</p>
                                        </a>
                                        <a href="/super/user" class="d-flex align-items-center px-5 w-100">
                                            <i class="fa-solid fa-users" style="color: #2b2b2b"></i>
                                            <p class="text-black m-0 px-2 text-lg">Kelola User</p>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                                            @csrf
                                        </form>
                                        <a href="#" class="d-flex align-items-center px-5 w-100" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa-solid fa-person-walking-arrow-right" style="color: #ce1a1a"></i>
                                            <p class="text-black m-0 px-2 text-lg text-danger" >Logout</p>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button data-bs-target="#exampleModalFullscreen" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn border-0" style="background-color: transparent">
                        <i class="fa-solid fa-bars" style="font-size: 3rem; color: #E2DFEB;"></i>
                    </button>
                    <a class="px-2" href="{{route('super.profile.edit',$user->id)}}">
                        @if ($user->gambar_user == Null)
                            <img src="{{ asset('assets/profile') }}/default.png" alt="profile" class="rounded-circle" style="width: 60px; height: 60px; border:4px solid #E2DFEB;">
                        @else
                            <img src="{{ asset('assets/profile') }}/{{ $user->gambar_user }}" alt="profile" class="rounded-circle" style="width: 60px; height: 60px; border:4px solid #E2DFEB; background-color: #E2DFEB">
                        @endif
                    </a>
                @elseif(auth()->user()->roles_id == 2)
                    <div class="modal fade show" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-modal="false" role="dialog">
                        <div class="modal-dialog fixed-bottom bottom-0">
                            <div class="modal-content" style="background-color: #E2DFEB;">
                                <div class="d-flex px-3 py-4">
                                    <button type="button" class="border-0" data-bs-dismiss="modal" aria-label="Close" style="background-color: #E2DFEB; color: #2b2b2b; font-size: 20px;">
                                        <i class="fa-solid fa-arrow-left font-weight-bolder"></i>
                                    </button>
                                    <span class="font-weight-bolder px-2" style="color: #2b2b2b; font-size: 20px;">Menu</span>
                                </div>
                                <div class="d-flex flex-column gap-3 justify-content-start align-items-start w-100 pb-4">
                                        <a href="/admin/layanan" class="d-flex align-items-center px-5 w-100">
                                            <i class="fa-solid fa-cart-arrow-down" style="color: #2b2b2b"></i>
                                            <p class="text-black m-0 px-2 text-lg">Layanan</p>
                                        </a>
                                        <a href="/admin/transaksi" class="d-flex align-items-center px-5 w-100">
                                            <i class="fa-solid fa-clock-rotate-left" style="color: #2b2b2b"></i>
                                            <p class="text-black m-0 px-2 text-lg">Transaksi</p>
                                        </a>
                                        <a href="/admin/chart" class="d-flex align-items-center px-5 w-100">
                                            <i class="fa-solid fa-book" style="color: #2b2b2b"></i>
                                            <p class="text-black m-0 px-2 text-lg">Pembukuan</p>
                                        </a>
                                        <a href="/admin/user" class="d-flex align-items-center px-5 w-100">
                                            <i class="fa-solid fa-users" style="color: #2b2b2b"></i>
                                            <p class="text-black m-0 px-2 text-lg">Kelola User</p>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                                            @csrf
                                        </form>
                                        <a href="#" class="d-flex align-items-center px-5 w-100" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa-solid fa-person-walking-arrow-right" style="color: #ce1a1a"></i>
                                            <p class="text-black m-0 px-2 text-lg text-danger" >Logout</p>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button data-bs-target="#exampleModalFullscreen" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn border-0" style="background-color: transparent">
                        <i class="fa-solid fa-bars" style="font-size: 3rem; color: #E2DFEB;"></i>
                    </button>
                    <a class="px-2" href="{{route('admin.profile.edit',$user->id)}}">
                        @if ($user->gambar_user == Null)
                            <img src="{{ asset('assets/profile') }}/default.png" alt="profile" class="rounded-circle" style="width: 60px; height: 60px; border:4px solid #E2DFEB;">
                        @else
                            <img src="{{ asset('assets/profile') }}/{{ $user->gambar_user }}" alt="profile" class="rounded-circle" style="width: 60px; height: 60px; border:4px solid #E2DFEB; background-color: #E2DFEB">
                        @endif
                    </a>
                @elseif(auth()->user()->roles_id == 3)
                <div class="modal fade show" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-modal="false" role="dialog">
                    <div class="modal-dialog fixed-bottom bottom-0">
                        <div class="modal-content" style="background-color: #E2DFEB;">
                            <div class="d-flex px-3 py-4">
                                <button type="button" class="border-0" data-bs-dismiss="modal" aria-label="Close" style="background-color: #E2DFEB; color: #2b2b2b; font-size: 20px;">
                                    <i class="fa-solid fa-arrow-left font-weight-bolder"></i>
                                </button>
                                <span class="font-weight-bolder px-2" style="color: #2b2b2b; font-size: 20px;">Menu</span>
                            </div>
                            <div class="d-flex flex-column gap-3 justify-content-start align-items-start w-100 pb-4">
                                    <a href="/member/m-layanan" class="d-flex align-items-center px-5 w-100">
                                        <i class="fa-solid fa-cart-arrow-down" style="color: #2b2b2b"></i>
                                        <p class="text-black m-0 px-2 text-lg">Layanan</p>
                                    </a>
                                    <a href="/member/m-order" class="d-flex align-items-center px-5 w-100">
                                        <i class="fa-solid fa-clock-rotate-left" style="color: #2b2b2b"></i>
                                        <p class="text-black m-0 px-2 text-lg">Riwayat Transaksi</p>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                                        @csrf
                                    </form>
                                    <a href="#" class="d-flex align-items-center px-5 w-100" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa-solid fa-person-walking-arrow-right" style="color: #ce1a1a"></i>
                                        <p class="text-black m-0 px-2 text-lg text-danger" >Logout</p>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>

                <button data-bs-target="#exampleModalFullscreen" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn border-0" style="background-color: transparent">
                    <i class="fa-solid fa-bars" style="font-size: 3rem; color: #E2DFEB;"></i>
                </button>
                <a class="px-2" href="{{route('member.profile.edit',$user->id)}}">
                    @if ($user->gambar_user == Null)
                        <img src="{{ asset('assets/profile') }}/default.png" alt="profile" class="rounded-circle" style="width: 60px; height: 60px; border:4px solid #E2DFEB;">
                    @else
                        <img src="{{ asset('assets/profile') }}/{{ $user->gambar_user }}" alt="profile" class="rounded-circle" style="width: 60px; height: 60px; border:4px solid #E2DFEB; background-color: #E2DFEB">
                    @endif
                </a>
                @endif

            </div>
        </section>
        <section class="px-4">
            <div class="d-flex gap-4 align-items-center text-white text-md fw-normal mt-1">
                <i class="fa-solid fa-calendar-days"></i>
                <span>Senin - Sabtu</span>
            </div>
            <div class="d-flex gap-4 align-items-center text-white text-md fw-normal mt-1">
                <i class="fa-regular fa-clock"></i>
                <span>10.00 - 18.00</span>
            </div>
            <div class="d-flex gap-4 align-items-center text-white text-md fw-normal mt-1">
                <i class="fa-solid fa-location-dot"></i>
                <span>Jalan Mayor Sukardi Hamdani No.10, Kedaton, Bandar Lampung</span>
            </div>
            <div class="d-flex gap-4 align-items-center text-white text-md fw-normal mt-1">
                <i class="fa-brands fa-whatsapp"></i>
                <span>0813-9757-5460</span>
            </div>
            <div class="d-flex gap-4 align-items-center text-white text-md fw-normal mt-1">
                <i class="fa-brands fa-instagram"></i>
                <span>@soc.cleanlampung</span>
            </div>
        </section>
        <section class="d-flex flex-column gap-3 px-4 py-5">
            @foreach ($layanans as $layanan)
            @if(auth()->user()->roles_id == 1)
                <a href="{{ route('super.layanan.show',$layanan->id) }}" class="d-flex align-items-center gap-4 bg-white ps-4 text-decoration-none font-weight-bolder text-black rounded-4">
            @elseif(auth()->user()->roles_id == 2)
                <a href="{{ route('admin.layanan.show',$layanan->id) }}" class="d-flex align-items-center gap-4 bg-white ps-4 text-decoration-none font-weight-bolder text-black rounded-4">
            @elseif(auth()->user()->roles_id == 3)
                <a href="{{ route('member.m-layanan.show',$layanan->id) }}" class="d-flex align-items-center gap-4 bg-white ps-4 text-decoration-none font-weight-bolder text-black rounded-4">
            @endif
                    @if ($layanan->ikon_layanan == Null)
                        <img src="{{ asset('assets/ikon/default.png') }}" alt="ikon" style="width: 4.2rem; height: 4.2rem;" class="p-1 rounded-circle" alt="">
                    @else
                        <img src="{{ asset("assets/ikon/{$layanan->ikon_layanan}") }}" alt="ikon" style="width: 4.2rem; height: 4.2rem;" class="p-1 rounded-circle" alt="">
                    @endif
                    <span>{{ $layanan->nama_layanan }}</span>
                </a>
            @endforeach
            @if(auth()->user()->roles_id == 1)
                <a href="{{ route('super.layanan.index') }}" class="d-flex align-items-center gap-4 bg-white ps-4 text-decoration-none font-weight-bolder text-black rounded-4">
            @elseif(auth()->user()->roles_id == 2)
                <a href="{{ route('admin.layanan.index') }}" class="d-flex align-items-center gap-4 bg-white ps-4 text-decoration-none font-weight-bolder text-black rounded-4">
            @elseif(auth()->user()->roles_id == 3)
                <a href="{{ route('member.m-layanan.index') }}" class="d-flex align-items-center gap-4 bg-white ps-4 text-decoration-none font-weight-bolder text-black rounded-4">
            @endif
                    <img src="{{ asset('assets/ikon/default.png')}}" style="width: 4.2rem; height: 4.2rem;" class="p-1 rounded-circle" alt="">
                    <span>Other</span>
                </a>
        </section>
    </div>
</body>
@endsection
@else
@include('auth.verify')
@endif
