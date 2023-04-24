@extends('layouts.client.app')

@section('title', 'Beranda')

@section('content')
<body>
    <div class="vh-100" style="background-color: #AD48FA;">
        <section class="nev-section py-5 px-4 d-flex justify-content-between align-items-center">
            <div class="p-2 d-flex rounded-4" style="background-color: #D6C37E;">
                <span>Laundry Sepatu SOC CLEAN Lampung</span>
            </div>
            <div class="button-container d-flex justify-content-center align-items-center">
                <a class="px-2" href="#">
                    <i class="fa-solid fa-clock-rotate-left" style="font-size: 3rem; color: #E2DFEB;"></i>
                </a>
                <a class="px-2" href="#">
                    <img src="../assets/img/user-profile.png" class="rounded-4" style="width: 60px;" alt="">
                </a>
            </div>
        </section>
        <section class="px-4">
            <div class="d-flex gap-4 align-items-center text-white text-lg font-weight-bolder mt-1">
                <i class="fa-solid fa-calendar-days"></i>
                <span>Senin-Jum'at</span>
            </div>
            <div class="d-flex gap-4 align-items-center text-white text-lg font-weight-bolder mt-1">
                <i class="fa-regular fa-clock"></i>
                <span>10.00 - 18.00</span>
            </div>
            <div class="d-flex gap-4 align-items-center text-white text-lg font-weight-bolder mt-1">
                <i class="fa-solid fa-location-dot"></i>
                <span>Jalan Mayor Sukardi Hamdani No.10, Kedaton, Bandar Lampung</span>
            </div>
            <div class="d-flex gap-4 align-items-center text-white text-lg font-weight-bolder mt-1">
                <i class="fa-brands fa-whatsapp"></i>
                <span>0813-9757-5460</span>
            </div>
            <div class="d-flex gap-4 align-items-center text-white text-lg font-weight-bolder mt-1">
                <i class="fa-brands fa-instagram"></i>
                <span>@soc.cleanlampung</span>
            </div>
        </section>
        <section class="d-flex flex-column gap-3 px-4 pt-5">
            <a href="" class="d-flex align-items-center gap-4 bg-white ps-4 text-decoration-none font-weight-bolder text-black rounded-4">
                <img src="../assets/img/clean-shoes.png" style="width: 4.2rem;" alt="">
                <span>Premium Deep Clean</span>
            </a>
            <a href="" class="d-flex align-items-center gap-4 bg-white ps-4 text-decoration-none font-weight-bolder text-black rounded-4">
                <img src="../assets/img/pain-shoes.png" style="width: 4.2rem;" alt="">
                <span>Repaint</span>
            </a>
            <a href="" class="d-flex align-items-center gap-4 bg-white ps-4 text-decoration-none font-weight-bolder text-black rounded-4">
                <img src="../assets/img/clean-shoes.png" style="width: 4.2rem;" alt="">
                <span>Other</span>
            </a>
        </section>
    </div>
    
</body>
@endsection
