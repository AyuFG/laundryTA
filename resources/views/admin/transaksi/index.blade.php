@extends('layouts.admin.app')

@section('title', 'Transaksi')

@section('content')

<!DOCTYPE html>
<html>
  <head>
    <style>
      body{
        background-color: rgb(73, 73, 73);
      }
      
      .item1 {
        grid-area: gambar;
      }
      .item2 {
        grid-area: nama;
      }
      .item3 {
        grid-area: tanggal;
      }
      .item4 {
        grid-area: keluhan;
      }
      .item5 {
        grid-area: status;
      }
      .item6 {
        grid-area: detail;
      }

      .grid-container {
        display: grid;
        grid-template-areas:
          "gambar nama nama nama nama nama"
          "gambar tanggal keluhan keluhan keluhan keluhan"
          "gambar status status status detail detail";
        gap: 10px;
        background-color: #2196f3;
        padding: 10px;
      }

      .grid-container > div {
        background-color: rgba(255, 255, 255, 0.8);
        text-align: center;
      }
    </style>
  </head>
    <body>
            <div class="col-lg-12 col-lg-12 form-wrapper" id="transaksi">
                <form action="">
                    <div class="">
                        @csrf
                        <div class="card-header" style="background-color: #f1f1f1">
                            <h4 class="">
                                <b>Transaksi</b>
                            </h4>
                        </div>
                        @foreach ($transaksis as $transaksi)
                            <div class="grid-container rounded-2">
                                <div class="item1"><img src="{{asset('assets/ikon/default.png')}}" width="30" alt="" /></div>
                                <div class="item2">Pesanan #Udin</div>
                                <div class="item3">22/22/2222</div>
                                <div class="item4">Kotor Banget</div>
                                <div class="item5">Sedang Dikerjakan</div>
                                <div class="item6">
                                    @if(auth()->user()->roles_id == 1)
                                        <a href="{{ route('super.transaksi.show', $transaksi->id) }}" class="btn btn-dark btn-sm mb-4">Detail</a>  
                                    @elseif(auth()->user()->roles_id == 2)
                                        <a href="{{ route('admin.transaksi.show', $transaksi->id) }}" class="btn btn-dark btn-sm mb-4">Detail</a> 
                                    @endif
                                </div>
                            </div>
                        @endforeach             
                    </div>
                </form>
            </div>
    </body>
</html>

@include('menu')
@endsection
