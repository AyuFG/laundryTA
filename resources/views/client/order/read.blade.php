@extends('layouts.client.app')

@section('title', 'Detail Order')

@section('content')
<body class="" style="background-color: #AD48FA;">
    <div class="vh-100">
        @if(auth()->user()->roles_id == 3)
        <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="font-size: 20px;">
            <a href="{{route('member.m-order.index')}}" style="color:black;"><i class="fa-solid fa-arrow-left font-weight-bolder"></i></a>
            <span class="fw-bolder px-2">Detail Transaksi</span>
        </section>
        @endif
        <section class="px-4">
                <div class="d-flex flex-column w-100 align-items-center">
                        <div class="d-flex w-75">
                            <label class="fw-bold text-md text-white" for="user_order">Nama</label>
                        </div>
                        <input class="border-0 rounded-3 py-2 px-3 w-75 bg-white bg-opacity-75" type="text" name="user_order" id="user_order" value="{{auth()->user()->nama}}" disabled>
                    </div>

                    <div class="d-flex flex-column w-100 align-items-center">
                        <div class="d-flex w-75">
                            <label class="fw-bold text-md text-white" for="waktu_order">Tanggal Order</label>
                        </div>
                        <input class="border-0 rounded-3 py-2 px-3 w-75" type="date" name="waktu_order" id="waktu_order" value="{{$order->waktu_order}}" disabled>
                    </div>

                    <div class="d-flex flex-column w-100 align-items-center">
                        <div class="d-flex w-75">
                            <label class="fw-bold text-md text-white" for="no_telepon">Nomor Whatsapp</label>
                        </div>
                        <input class="border-0 rounded-3 py-2 px-3 w-75 bg-white bg-opacity-75" type="text" name="no_telepon" id="no_telepon" value="{{auth()->user()->no_telepon}}" disabled>
                    </div>

                    <div class="d-flex flex-column w-100 align-items-center">
                        <div class="d-flex w-75">
                            <label class="fw-bold text-md text-white" for="alamat_order">Alamat</label>
                        </div>
                        <input class="border-0 rounded-3 py-2 px-3 w-75" type="text" name="alamat_order" id="alamat_order" value="{{$order->alamat_order}}" disabled>
                    </div>

                    <div class="d-flex flex-column w-100 align-items-center">
                        <div class="d-flex w-75">
                            <label class="fw-bold text-md text-white" for="jenis_layanan">Jenis layanan</label>
                        </div>
                        <input class="border-0 rounded-3 py-2 px-3 w-75 bg-white bg-opacity-75" type="text" name="jenis_layanan" id="jenis_layanan" value="{{$order->jenis_layanan}}" disabled>
                    </div>

                    <div class="d-flex flex-column w-100 align-items-center">
                        <div class="d-flex w-75">
                            <label class="fw-bold text-md text-white" for="harga_order">Harga</label>
                        </div>
                        <input class="border-0 rounded-3 py-2 px-3 w-75 bg-white bg-opacity-75" type="number" name="harga_order" id="harga_order" value="{{$order->harga_order}}" disabled>
                    </div>

                    <div class="d-flex flex-column w-100 align-items-center">
                        <div class="d-flex w-75">
                            <label class="fw-bold text-md text-white" for="keluhan">Keluhan</label>
                        </div>
                        <input class="border-0 rounded-3 py-2 px-3 w-75" type="text" name="keluhan" id="keluhan" value="{{$order->keluhan}}" disabled>
                    </div>

                    <div class="d-flex flex-column w-100 align-items-center">
                        <div class="d-flex w-75">
                            <label class="fw-bold text-md text-white" for="foto_keluhan">Foto Keluhan</label>
                        </div>
                        <img src="{{asset('assets/img')}}/{{$order->foto_keluhan}}" class="border-0 rounded-3 py-2 px-3 w-75 bg-white" type="file" name="foto_keluhan" id="foto_keluhan" disabled>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade show" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-modal="false" role="dialog">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content" style="background-color: #AD48FA;">
                                <div class="d-flex px-3 pt-4">
                                    <button type="button" class="border-0" data-bs-dismiss="modal" aria-label="Close" style="background-color: #AD48FA; color: #E2DFEB; font-size: 20px;">
                                        <i class="fa-solid fa-arrow-left font-weight-bolder"></i>
                                    </button>
                                    <span class="font-weight-bolder px-2" style="color: #E2DFEB; font-size: 20px;">Pembayaran</span>
                                </div>
                            <div class="d-flex justify-content-center gap-3 align-items-center flex-column w-100">
                                <div class="input-group d-flex flex-column justify-content-center w-75">
                                    <label class="fw-bold text-md text-white border-0" style="background-color: #AD48FA;" for="pembayaran">Metode Pembayaran</label>
                                    <select class="custom-select border-0 rounded-3 py-2 px-3 w-100" id="pembayaran" value="{{$order->pembayaran}}" disabled>
                                        <option value="tunai">Tunai</option>
                                        <option value="QRIS">QRIS</option>
                                        <option value="BCA">Transfer BCA</option>
                                    </select>
                                </div>

                                <div class="input-group d-flex flex-column justify-content-center w-75">
                                    <label class="fw-bold text-md text-white border-0" style="background-color: #AD48FA;" for="opsi_pengiriman">Opsi Pengiriman</label>
                                    <select class="custom-select border-0 rounded-3 py-2 px-3 w-100" id="opsi_pengiriman"  value="{{$order->opsi_pengiriman}}" disabled>
                                        <option value="pickup">Pick Up</option>
                                        <option value="delivery">Delivery</option>
                                    </select>
                                </div>
                                
                                <div class="d-flex flex-column w-100 align-items-center">
                                    <div class="d-flex w-75">
                                        <label class="fw-bold text-md text-white" for="no_rekening">No. Rekening (optional)</label>
                                    </div>
                                    <input class="border-0 rounded-3 py-2 px-3 w-75" type="text" name="no_rekening" id="no_rekening" value="{{$order->no_rekening}}" disabled>
                                </div>

                                <div class="d-flex flex-column w-100 align-items-center">
                                    <div class="d-flex w-75">
                                        <label class="fw-bold text-md text-white" for="foto_pembayaran">Bukti Pembayaran</label>
                                    </div>
                                    <img src="{{asset('assets/img')}}/{{$order->foto_pembayaran}}" class="border-0 rounded-3 py-2 px-3 w-75 bg-white" type="file" name="foto_pembayaran" id="foto_pembayaran" disabled>
                                </div>
                                <button type="submit" class="btn w-25 mt-2" style="background-color: #D6C37E;">Kembali</button>
                            </div>
                            </div>
                        </div>
                    </div>
            <div class="pb-5 d-flex justify-content-center align-items-center w-100">
                <button data-bs-target="#exampleModalFullscreen" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn w-50 mt-4" style="background-color: #D6C37E;">Next</button>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
@endsection
