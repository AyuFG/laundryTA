@extends('layouts.admin.app')

@section('title', 'Konfirmasi Order')

@section('content')

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
        <div class="input-group d-flex flex-column w-100 align-items-center pt-3 pb-0">
            <a href="https://wa.me/+62{{$order->no_telepon}}?text=Halo saya admin SOC Clean Lampung">
                <button class="btn fw-bold rounded-3 btn-dark" style="text-align: center;" id="Chat">
                    Chat User
                    <i class="fa-brands fa-whatsapp font-weight-bolder"></i>
                </button>
            </a></div>
        <section class="px-4 pb-5">
            <form action="{{route("super.transaksi.update",$order->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="input-group d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="status_order">Status</label>
                    </div>
                    <select class="custom-select d-flex w-75 rounded-3" id="status_order" name="status_order" enabled>
                        <option hidden selected value="{{$order->status_order}}">{{$order->status_order}}</option>
                        <option value="Belum Dikonfirmasi">Belum Dikonfirmasi</option>
                        <option value="Dikonfirmasi">Dikonfirmasi</option>
                        <option value="Sedang Dikerjakan">Sedang Dikerjakan</option>
                        <option value="Dapat Diambil">Dapat Diambil</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center w-100 py-4">
                    <button class="btn btn-dark w-50" type="submit">Update Status</button>
                </div>
            </form>
                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="token">No Order</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75 @error('token') is-invalid @enderror" type="text" name="token" id="token" value="{{$order->token}}" disabled>
                    @error('token')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="user_order">Nama</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75 @error('user_order') is-invalid @enderror" type="text" name="user_order" id="user_order" value="{{$order->user_order}}" disabled>
                    @error('user_order')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="waktu_order">Tanggal Order</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75 @error('waktu_order') is-invalid @enderror" type="text" name="waktu_order" id="waktu_order" value="{{$order->waktu_order}}" disabled>
                    @error('waktu_order')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="no_telepon">Nomor Whatsapp</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75 @error('no_telepon') is-invalid @enderror" type="text" name="no_telepon" id="no_telepon" value="{{$order->no_telepon}}" disabled>
                    @error('no_telepon')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="alamat_order">Alamat</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75" type="text" name="alamat_order" id="alamat_order" value="{{$order->alamat_order}}" disabled>
                    @error('alamat_order')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="jenis_pelayanan">Jenis layanan</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75 @error('jenis_pelayanan') is-invalid @enderror" type="text" name="jenis_pelayanan" id="jenis_pelayanan" value="{{$order->jenis_pelayanan}}" disabled>
                    @error('jenis_pelayanan')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="harga_order">Harga</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75 @error('harga_order') is-invalid @enderror" type="number" name="harga_order" id="harga_order" value="{{$order->harga_order}}" disabled>
                    @error('harga_order')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="keluhan">Keluhan</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75" type="text" name="keluhan" id="keluhan" value="{{$order->keluhan}}" disabled>
                    @error('keluhan')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="pembayaran">Pembayaran</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75" type="text" name="pembayaran" id="pembayaran" value="{{$detail->pembayaran}}" disabled>
                    @error('pembayaran')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex flex-row w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex flex-column w-75 align-items-center">
                        <label class="fw-bold text-md" for="foto_keluhan">Foto Keluhan</label>
                        <img src="{{asset('assets/img/keluhan')}}/{{$detail->foto_keluhan}}" class="border-1 rounded-3 py-2 px-3 bg-white" style="width: 8.2rem; height: 8.2rem;" name="foto_keluhan" id="foto_keluhan">
                        @error('foto_keluhan')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button data-bs-target="#modal_keluhan" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-dark mt-3">Lihat</button>
                    </div>
                    <div class="d-flex flex-column w-75 align-items-center">
                        <label class="fw-bold text-md" for="foto_pembayaran">Foto Pembayaran</label>
                        <img src="{{asset('assets/img/pembayaran')}}/{{$detail->foto_pembayaran}}" class="border-1 rounded-3 py-2 px-3 bg-white" style="width: 8.2rem; height: 8.2rem;" name="foto_pembayaran" id="foto_pembayaran">
                        @error('foto_pembayaran')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button data-bs-target="#modal_pembayaran" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-dark mt-3">Lihat</button>
                    </div>
                    <div class="modal fade show" id="modal_keluhan" tabindex="-1" aria-labelledby="modal_keluhan" aria-modal="false" role="dialog">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="align-items-start">
                                    <button type="button" class="m-4 text-dark btn" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa-solid fa-arrow-left font-weight-bolder"></i>
                                    </button>
                                </div>
                                <img src="{{asset('assets/img/keluhan')}}/{{$detail->foto_keluhan}}" class="border-1 rounded-3 py-2 px-3 bg-white align-items-center justify-content-center d-flex vh-100" style="object-fit: contain" name="foto_keluhan" id="foto_keluhan">
                            </div>
                        </div>
                    </div>
                    <div class="modal fade show" id="modal_pembayaran" tabindex="-1" aria-labelledby="modal_pembayaran" aria-modal="false" role="dialog">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="align-items-start">
                                    <button type="button" class="m-4 text-dark btn" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa-solid fa-arrow-left font-weight-bolder"></i>
                                    </button>
                                </div>
                                <img src="{{asset('assets/img/pembayaran')}}/{{$detail->foto_pembayaran}}" class="border-1 rounded-3 py-2 px-3 bg-white align-items-center justify-content-center d-flex vh-100" style="object-fit: contain" name="foto_keluhan" id="foto_keluhan">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="opsi_pengiriman">Opsi Pengiriman</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75 @error('opsi_pengiriman') is-invalid @enderror" type="text" name="opsi_pengiriman" id="opsi_pengiriman" value="{{$detail->opsi_pengiriman}}" disabled>
                    @error('opsi_pengiriman')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex flex-column w-100 align-items-center pt-3 pb-0">
                    <div class="d-flex w-75">
                        <label class="fw-bold text-md" for="no_rekening">No. Rekening (optional)</label>
                    </div>
                    <input class="border-1 rounded-3 py-2 px-3 w-75 @error('no_rekening') is-invalid @enderror" type="text" name="no_rekening" id="no_rekening" value="{{$detail->no_rekening}}" disabled>
                    @error('no_rekening')
                        <span class="invalid-feedback text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

@endsection
