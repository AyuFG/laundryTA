@extends('layouts.admin.app')

@section('title', 'Konfirmasi Order')

@section('content')

<body class="bg-dark">
    <div class="vh-100">
        @if(auth()->user()->roles_id == 1)
        <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="font-size: 20px;">
            <a href="{{route('super.transaksi.index')}}" style="color:black;">
                <i class="fa-solid fa-arrow-left font-weight-bolder"></i>
                <span class="fw-bolder px-2">Konfirmasi Order</span>
            </a>
        </section>
        @elseif(auth()->user()->roles_id == 2)
        <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="font-size: 20px;">
            <a href="{{route('admin.transaksi.index')}}" style="color:black;">
                <i class="fa-solid fa-arrow-left font-weight-bolder"></i>
                <span class="fw-bolder px-2">Konfirmasi Order</span>
            </a>
        </section>
        @endif
        <section class="px-4 pb-5">
            <form action="{{route("super.transaksi.update",$order->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="input-group d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="status_order">Status</label>
                    </div>
                    <select class="custom-select d-flex w-75 rounded-3" id="status_order" value="{{$order->status_order}}" enabled>
                        <option value="Belum Dikonfirmasi">Belum Dikonfirmasi</option>
                        <option value="Dikonfirmasi">Dikonfirmasi</option>
                        <option value="Sedang Dikerjakan">Sedang Dikerjakan</option>
                        <option value="Dapat Diambil">Dapat Diambil</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                </div>
                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="user_order">Nama</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75 bg-white bg-opacity-75" type="text" name="user_order" id="user_order" value="{{$order->user_order}}" enabled>
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="waktu_order">Tanggal Order</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75 bg-white bg-opacity-75" type="text" name="waktu_order" id="waktu_order" value="{{$order->waktu_order}}" disabled>
                    <input type="hidden" name="waktu_order" value="{{$order->waktu_order}}">
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="no_telepon">Nomor Whatsapp</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75 bg-white bg-opacity-75" type="text" name="no_telepon" id="no_telepon" value="{{$order->no_telepon}}" enabled>
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="alamat_order">Alamat</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75" type="text" name="alamat_order" id="alamat_order" value="{{$order->alamat_order}}" enabled>
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="jenis_pelayanan">Jenis layanan</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75 bg-white bg-opacity-75" type="text" name="jenis_pelayanan" id="jenis_pelayanan" value="{{$order->jenis_pelayanan}}" enabled>
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="harga_order">Harga</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75 bg-white bg-opacity-75" type="number" name="harga_order" id="harga_order" value="{{$order->harga_order}}" disabled>
                    <input type="hidden" name="harga_order" value="{{$order->harga_order}}">
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="keluhan">Keluhan</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75" type="text" name="keluhan" id="keluhan" value="{{$order->keluhan}}" enabled>
                </div>
                
                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="pembayaran">Pembayaran</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75" type="text" name="pembayaran" id="pembayaran" value="{{$detail->pembayaran}}" enabled>
                </div>

                <div class="d-flex flex-row w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex flex-column w-75 align-items-center">
                        <label class="fw-bold text-md" for="foto_keluhan">Foto Keluhan</label>
                        <img src="{{asset('assets/img')}}/{{$detail->foto_keluhan}}" class="border-1 rounded-3 py-2 px-3 bg-white" style="width: 8.2rem; height: 8.2rem;" name="foto_keluhan" id="foto_keluhan">
                        <input class="visually-hidden" type="text" name="foto_keluhan" id="foto_keluhan" value="{{$detail->foto_pembayaran}}">
                    </div>
                    <div class="d-flex flex-column w-75 align-items-center">
                        <label class="fw-bold text-md" for="foto_pembayaran">Foto Pembayaran</label>
                        <img src="{{asset('assets/img')}}/{{$detail->foto_pembayaran}}" class="border-1 rounded-3 py-2 px-3 bg-white" style="width: 8.2rem; height: 8.2rem;" name="foto_pembayaran" id="foto_pembayaran">
                        <input class="visually-hidden" type="text" name="foto_pembayaran" id="foto_pembayaran" value="{{$detail->foto_pembayaran}}">
                    </div>
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="opsi_pengiriman">Opsi Pengiriman</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75 bg-white bg-opacity-75" type="text" name="opsi_pengiriman" id="opsi_pengiriman" value="{{$detail->opsi_pengiriman}}" enabled>
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="no_rekening">No. Rekening (optional)</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75 bg-white bg-opacity-75" type="text" name="no_rekening" id="no_rekening" value="{{$detail->no_rekening}}" enabled>
                </div>

                <div class="d-flex justify-content-center w-100 py-4">
                    <button class="btn btn-dark w-50" type="submit">Submit</button>
                </div>
            </form>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

@endsection
