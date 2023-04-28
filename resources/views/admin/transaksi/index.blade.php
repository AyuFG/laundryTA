@extends('layouts.admin.app')

@section('title', 'Transaksi')

@section('content')

  <div class="vh-100">
    @if(auth()->user()->roles_id == 1)
        <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="font-size: 20px;">
        <a href="/super" style="color:black;"><i class="fa-solid fa-arrow-left font-weight-bolder"></i></a>
        <span class="fw-bolder px-2">Transaksi</span>
        </section>
    @elseif(auth()->user()->roles_id == 2)
        <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="font-size: 20px;">
        <a href="/admin" style="color:black;"><i class="fa-solid fa-arrow-left font-weight-bolder"></i></a>
        <span class="fw-bolder px-2">Transaksi</span>
        </section>
    @endif

      <section class="row d-flex justify-content-center">
          <p class="row justify-content-center">
              Menampilkan semua riwayat transaksi
          </p>
          <hr class="row w-75" style="background-color: rgb(48, 48, 48);; color: #fff; height: 3px;">
      </section>
      
      <section class="w-100 d-flex flex-column justify-content-center">
        @foreach ($transaksis as $transaksi)
            <div class="card p-2 rounded-3" style="width: 75%;">
                <div class="d-flex mb-3">
                    <div class="d-flex justify-content-center align-content-center">
                        <i class="fa-regular fa-file-lines p-3" style="font-size: 2rem;"></i>
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <p class="text-md fw-bolder">Pesanan #{{$transaksi->user_order}}</p>
                        <div class="d-flex">
                            <span class="text-md">
                                {{$transaksi->waktu_order}}
                            </span>
                            <span class="text-md px-2 text-truncate w-50">
                                {{$transaksi->keluhan}}
                            </span>
                        </div>
                    </div>
                </div>
                <hr class="col mt-0" style="background-color: white; color: #3d3c42; height: 3px;">
                <div class="d-flex px-2 flex-row justify-content-between align-items-center">
                    <span class="">{{$transaksi->status}}</span>
                    @if (auth()->user()->roles_id == 1)
                    <a href="{{route('super.transaksi.show',$transaksi->id)}}" class="text-decoration-none">
                        <button class="btn border border-3">Detail</button>
                    </a> 
                    @elseif (auth()->user()->roles_id == 2)
                    <a href="{{route('admin.transaksi.show',$transaksi->id)}}" class="text-decoration-none">
                        <button class="btn border border-3">Detail</button>
                    </a>                         
                    @endif
                </div>
            </div>
        @endforeach
      </section>
  </div>

@include('menu')
@endsection
