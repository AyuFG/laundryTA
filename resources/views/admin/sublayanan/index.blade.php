@extends('layouts.admin.app')

@section('title', 'Jenis Layanan')

@section('content')

<!--subLayanan-->
<div class="col-lg-12 form-wrapper" id="sublayanan">
    <div class="container">
        <div class="d-flex flex-row">
            @if(auth()->user()->roles_id == 1)
                <a class="pr-3 text-dark" href="{{ route('super.layanan.show',$layanan->id) }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            @elseif(auth()->user()->roles_id == 2)
                <a class="pr-3 text-dark" href="{{ route('admin.layanan.show',$layanan->id) }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            @endif
                <h4 class="card-title mb-4"><b>Belum</b></h4> 
        </div>      
            <div class="d-flex justify-content-end">
                @if(auth()->user()->roles_id == 1)
                    <a href="{{ route('super.layanan.create') }}" class="btn btn-dark btn-sm mb-4">Tambah</a>  
                @elseif(auth()->user()->roles_id == 2)
                    <a href="{{ route('admin.layanan.create') }}" class="btn btn-dark btn-sm mb-4">Tambah</a> 
                @endif
            </div>
        @foreach ($layanan as $sublayanan)
        <div class="row mb-3">
            <div class="col-2 bg-secondary text-white d-flex align-items-center rounded-start">
                @if ($sublayanan->ikon_sub == Null)
                    <img src="{{ asset('assets/ikon') }}/default.png" alt="ikon" height="40" width="40"/>
                @else
                    <img src="{{ asset('assets/ikon') }}/{{ $sublayanan->ikon_sub }}" alt="ikon" height="40" width="40"/>
                @endif
            </div>
            <div
                class="col-5 bg-secondary text-white d-flex align-items-center text-center rounded-end"
            >
                <b>{{ $sublayanan->nama_sub }}</b>
            </div>
            <div class="col-5 text-right">
                @if(auth()->user()->roles_id == 1)
                    <a href="{{ route('super.sublayanan.show',$sublayanan->id) }}" class="btn btn-dark btn-sm mb-3 ml-1 mt-1 p-1">
                        Desc
                    </a>
                @elseif(auth()->user()->roles_id == 2)
                    <a href="{{ route('admin.sublayanan.show',$sublayanan->id) }}" class="btn btn-dark btn-sm mb-3 ml-1 mt-1 p-1">
                        Desc
                    </a>
                @endif
                <button type="submit" class="btn btn-dark btn-sm mb-3 ml-1 mt-1 p-1" role="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$sublayanan->id}}">
                    Hapus
                </button>
                <!-- Modal -->
                <div class="modal fade bd-example-modal-sm{{$sublayanan->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><strong>Hapus Jenis Layanan?</strong></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                </button>
                            </div>
                            <div class="modal-footer">
                                <form action="{{route('super.sublayanan.destroy', $sublayanan->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" class="btn btn-dark light" name="" id="" value="Ya">
                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tidak</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include('menu')
<!--./subLayanan-->

@endsection