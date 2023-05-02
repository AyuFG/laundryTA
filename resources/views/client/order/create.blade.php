@extends('layouts.client.app')

@section('title', 'Order')

@section('content')
<body class="" style="background-color: #AD48FA;">
    <div class="vh-100">
        <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="font-size: 20px;">
            <a href="{{ route('member.m-layanan.index') }}" class="bg-opacity-10 btn" style="color: #E2DFEB;font-size: 1.2rem;">
                <i class="fa-solid fa-arrow-left font-weight-bolder"></i>
                <span class="fw-bolder px-2">Order</span>
            </a>
        </section>
        <section class="px-4">
            <div class="col-lg-12 col-lg-12 form-wrapper" id="detail-sublayanan">
                <form action="">
                    <div class="">
                        <div class="p-3 mb-2 text-white">
                            @csrf
                            <div class="d-flex justify-content-center m-4">
                                <label for="ikon_sub">
                                    @if ($order->ikon_sub == null)
                                        <img src="{{ asset('assets/ikon') }}/default.png" style="width:200px !important; height:200px !important;" class="img-circle elevation-2" alt="">
                                    @else
                                        <img src="{{ asset('assets/ikon') }}/{{ $order->ikon_sub }}" style="width:200px !important; height:200px !important;" class="img-circle elevation-2" alt="">
                                    @endif
                                    <input type="file" class="visually-hidden" placeholder="ikon_sub" name="ikon_sub" id="ikon_sub" disabled>
                                </label>
                            </div>
                            <div class="mb-2 pb-2 row">
                                <label class="col-sm-3 col-form-label"
                                    >Nama Jenis Pelayanan:
                                </label>
                                <div class="col-sm-9">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_sub"
                                        id="nama_sub"
                                        value="{{$order->nama_sub}}"
                                        required disabled
                                    />
                                </div>
                            </div>
                            <div class="mb-2 pb-2 row">
                                <label class="col-sm-3 col-form-label">Deskripsi : </label>
                                <div class="col-sm-9">
                                    <textarea
                                        class="form-control"
                                        name="deskripsi_sub"
                                        id="deskripsi_sub"
                                        required disabled>{{$order->deskripsi_sub}}</textarea>
                                </div>
                            </div>
                            <div class="mb-2 pb-2 row">
                                <label class="col-sm-3 col-form-label"
                                    >Estimasi Waktu :
                                </label>
                                <div class="col-sm-9">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="waktu_sub"
                                        id="waktu_sub"
                                        value="{{$order->waktu_sub}} hari"
                                        required disabled
                                    />
                                </div>
                            </div>
                            <div class="mb-2 pb-2 row">
                                <label class="col-sm-3 col-form-label">Harga : </label>
                                <div class="col-sm-9">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="harga_sub"
                                        id="harga_sub"
                                        value="{{$order->harga_sub}}"
                                        required disabled
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
            
            <!-- Modal -->
            <div class="modal fade show" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-modal="false" role="dialog">
                        <div class="modal-dialog modal-fullscreen pb-4">
                            <div class="modal-content overflow-auto pb-4" style="background-color: #AD48FA;">
                                <div class="d-flex px-3 pt-4">
                                    <button type="button" class="border-0" data-bs-dismiss="modal" aria-label="Close" style="background-color: #AD48FA; color: #E2DFEB; font-size: 20px;">
                                        <i class="fa-solid fa-arrow-left font-weight-bolder"></i>
                                    </button>
                                    <span class="font-weight-bolder px-2" style="color: #E2DFEB; font-size: 20px;">Order</span>
                                </div>
                                
                            <form action="{{ route('member.m-order.store') }}" method="POST" class="py-3 d-flex flex-column gap-3 justify-content-center align-items-center w-100">
                            @csrf
                                <div class="d-flex justify-content-center gap-3 align-items-center flex-column w-100">
                                <div class="card w-75 bg-transparent p-3">
                                    <div class="d-flex flex-column w-100 align-items-center">
                                        <div class="d-flex w-75">
                                            <label class="fw-bold text-md text-white" for="user_order">Nama</label>
                                        </div>
                                        <input type="hidden" name="list_id" value="{{$order->id}}">
                                        <input class="border-0 rounded-3 py-2 px-3 w-75 text-white text-lg fw-normal" type="text" name="user_order" required id="user_order" value="{{auth()->user()->nama}}" disabled>
                                        <input type="hidden" name="user_order" value="{{auth()->user()->nama}}">
                                    </div>
            
                                    <div class="d-flex flex-column w-100 align-items-center">
                                        <div class="d-flex w-75">
                                            <label class="fw-bold text-md text-white" for="no_telepon">Nomor Whatsapp</label>
                                        </div>
                                        <input class="border-0 rounded-3 py-2 px-3 w-75 text-white text-lg fw-normal" type="text" name="no_telepon" required id="no_telepon" value="{{auth()->user()->no_telepon}}" disabled>
                                        <input type="hidden" name="no_telepon" value="{{auth()->user()->no_telepon}}">
                                    </div>
                
                                    <div class="d-flex flex-column w-100 align-items-center">
                                        <div class="d-flex w-75">
                                            <label class="fw-bold text-md text-white" for="jenis_pelayanan">Jenis layanan</label>
                                        </div>
                                        <input class="border-0 rounded-3 py-2 px-3 w-75 text-white text-lg fw-normal" type="text" name="jenis_pelayanan" required id="jenis_pelayanan" value="{{$order->nama_sub}}" disabled>
                                        <input type="hidden" name="jenis_pelayanan" value="{{$order->nama_sub}}">
                                    </div>
                                    
                                    <div class="d-flex flex-column w-100 align-items-center">
                                        <div class="d-flex w-75">
                                            <label class="fw-bold text-md text-white" for="harga_order">Harga</label>
                                        </div>
                                        <input class="border-0 rounded-3 py-2 px-3 w-75 text-white text-lg fw-normal" type="number" name="harga_order" required id="harga_order" value="{{$order->harga_sub}}" disabled>
                                        <input type="hidden" name="harga_order" value="{{$order->harga_sub}}">
                                    </div>
                                </div>

                                <div class="d-flex flex-column w-100 align-items-center">
                                    <div class="d-flex w-75">
                                        <label class="fw-bold text-md text-white" for="waktu_order">Tanggal Order</label>
                                    </div>
                                    <input class="border-0 rounded-3 py-2 px-3 w-75" type="date" name="waktu_order" required id="waktu_order" placeholder="Tanggal Order" required>
                                </div>

                                <div class="d-flex flex-column w-100 align-items-center">
                                    <div class="d-flex w-75">
                                        <label class="fw-bold text-md text-white" for="alamat_order">Alamat</label>
                                    </div>
                                    <input class="border-0 rounded-3 py-2 px-3 w-75" type="text" name="alamat_order" required id="alamat_order" placeholder="Jalan .....">
                                </div>
            
                                <div class="d-flex flex-column w-100 align-items-center">
                                    <div class="d-flex w-75">
                                        <label class="fw-bold text-md text-white" for="keluhan">Keluhan</label>
                                    </div>
                                    <input class="border-0 rounded-3 py-2 px-3 w-75" type="text" name="keluhan" required id="keluhan" placeholder="Contoh : Sepatu kotor di bagian....">
                                </div>
            
                                <div class="d-flex flex-column w-100 align-items-center">
                                    <div class="d-flex w-75">
                                        <label class="fw-bold text-md text-white" for="foto_keluhan">Foto Keluhan</label>
                                    </div>
                                    <input class="border-0 rounded-3 py-2 px-3 w-75 bg-white" type="file" name="foto_keluhan" id="foto_keluhan">
                                </div>
                                
                                <div class="input-group d-flex flex-column justify-content-center w-75">
                                    <label class="fw-bold text-md text-white border-0" style="background-color: #AD48FA;" for="pembayaran">Metode Pembayaran</label>
                                    <select class="custom-select border-0 rounded-3 py-2 px-3 w-100" required id="pembayaran" name="pembayaran">
                                        <option selected value="tunai">Tunai</option>
                                        <option value="QRIS">QRIS</option>
                                        <option value="BCA">Transfer BCA</option>
                                    </select>
                                </div>

                                <div class="input-group d-flex flex-column justify-content-center w-75">
                                    <label class="fw-bold text-md text-white border-0" style="background-color: #AD48FA;" for="opsi_pengiriman">Opsi Pengiriman</label>
                                    <select class="custom-select border-0 rounded-3 py-2 px-3 w-100" required id="opsi_pengiriman" name="opsi_pengiriman">
                                        <option selected value="pickup">Pick Up</option>
                                        <option value="delivery">Delivery</option>
                                    </select>
                                </div>
                                
                                <div class="d-flex flex-column w-100 align-items-center">
                                    <div class="d-flex w-75">
                                        <label class="fw-bold text-md text-white" for="no_rekening">No. Rekening (optional)</label>
                                    </div>
                                    <input class="border-0 rounded-3 py-2 px-3 w-75" type="text" name="no_rekening" required id="no_rekening" placeholder="12131">
                                </div>

                                <div class="d-flex flex-column w-100 align-items-center">
                                    <div class="d-flex w-75">
                                        <label class="fw-bold text-md text-white" for="foto_pembayaran">Bukti Pembayaran</label>
                                    </div>
                                    <input class="border-0 rounded-3 py-2 px-3 w-75 bg-white" type="file" name="foto_pembayaran" id="foto_pembayaran">
                                </div>
                                <button type="submit" class="btn w-25 mt-2" style="background-color: #D6C37E;">Order</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
            <div class="pb-5 d-flex justify-content-center align-items-center w-100">
                <button data-bs-target="#exampleModalFullscreen" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn w-50 mt-4" style="background-color: #D6C37E;">Pesan Layanan</button>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
@endsection
