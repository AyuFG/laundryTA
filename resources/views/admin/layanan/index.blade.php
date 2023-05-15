@extends('layouts.admin.app')

@section('title', 'Layanan')

@section('content')

<!--Layanan-->
<div class="" id="layanan">
    <div class="">
        <div class="d-flex px-3 py-3 flex-row justify-content-between align-items-center">
            <div class="bg-opacity-10" style="font-size: 1.2rem;">
                @if(auth()->user()->roles_id == 1)
                <a class="pr-2 text-dark" href="/super"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                @elseif(auth()->user()->roles_id == 2)
                <a class="pr-2 text-dark" href="/admin"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                @endif
                <span class="font-weight-bolder px-1">Detail Jenis Pelayanan</span>
            </div>
            <div class="d-flex px-0">
                @if(auth()->user()->roles_id == 1)
                <div class="d-flex justify-content-end px-0">
                    <a href="{{ route('super.layanan.create') }}" class="btn px-0">
                        <button type="submit" class="btn btn-dark btn-sm">
                            Tambah
                        </button>
                    </a>
                </div>
                @endif
            </div>
        </div>
        <section class="body-section d-flex flex-column gap-3 py-3">
            @foreach ($layanans as $layanan)
            <div class="d-flex align-items-center justify-content-between">
                @if(auth()->user()->roles_id == 1)
                    <a href="{{ route('super.layanan.show',$layanan->id) }}" class="text-decoration-none bg-dark px-3 me-1 rounded-4 w-60 d-flex align-items-center" style="min-height: 45px; width: 400px;">
                        <div class="d-flex align-items-center px-1 py-2">
                            @if ($layanan->ikon_layanan == Null)
                                <img src="{{ asset('assets/ikon') }}/default.png" class="rounded-circle" style="width: 45px;" alt="ikon">
                            @else
                                <img src="{{ asset('assets/ikon') }}/{{ $layanan->ikon_layanan }}" class="rounded-circle" style="width: 45px;" alt="ikon"/>
                            @endif
                        </div>
                        <div class="d-flex align-items-center w-100">
                            <span class="fw-bolder text-sm px-1 text-white">{{ $layanan->nama_layanan }}</span>
                        </div>
                    </a>
                @elseif(auth()->user()->roles_id == 2)
                    <a href="{{ route('admin.layanan.show',$layanan->id) }}" class="text-decoration-none bg-dark px-3 rounded-4 w-100 d-flex align-items-center">
                        <div class="d-flex align-items-center px-1 py-2">
                            @if ($layanan->ikon_layanan == Null)
                                <img src="{{ asset('assets/ikon') }}/default.png" class="rounded-circle" style="width: 45px;" alt="ikon">
                            @else
                                <img src="{{ asset('assets/ikon') }}/{{ $layanan->ikon_layanan }}" class="rounded-circle" style="width: 45px;" alt="ikon"/>
                            @endif
                        </div>
                        <div class="d-flex align-items-center w-100">
                            <span class="fw-bolder text-sm px-1 text-white">{{ $layanan->nama_layanan }}</span>
                        </div>
                    </a>
                @endif
                <div class="d-flex gap-2">
                    @if(auth()->user()->roles_id == 1)
                        <a href="{{ route('super.layanan.edit',$layanan->id) }}">
                        <button class="btn-sm btn-dark rounded-2">
                            Edit
                        </button>
                    </a>
                    <button type="submit" class="btn-sm btn-dark rounded-2" role="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$layanan->id}}">
                        Hapus
                    </button>
                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-sm{{$layanan->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><strong>Hapus Layanan?</strong></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    </button>
                                </div>
                                <div class="modal-footer">
                                    <form action="{{route('super.layanan.destroy', $layanan->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" class="btn btn-dark light" name="" id="" value="Ya">
                                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tidak</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </section>
    </div>
</div>
@include('menu')
<!--./Layanan-->

@endsection