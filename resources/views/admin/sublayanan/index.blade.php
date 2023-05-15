@extends('layouts.admin.app')

@section('title', 'Jenis Layanan')

@section('content')

<!--subLayanan-->
<div class="col-lg-12 form-wrapper mb-5 pb-5" id="sublayanan">
    <div class="container">
        <div class="d-flex flex-row">
            @if(auth()->user()->roles_id == 1)
                <a class="pr-3 text-dark" href="{{ route('super.layanan.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            @elseif(auth()->user()->roles_id == 2)
                <a class="pr-3 text-dark" href="{{ route('admin.layanan.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            @endif
                <h4 class="card-title mb-4"><b>{{$layanans->nama_layanan}}</b></h4>
        </div>
            <div class="d-flex justify-content-end">
                @if(auth()->user()->roles_id == 1)
                    <a href="/super/createSub/{{$layanans->id}}" class="btn btn-dark btn-sm mb-4">Tambah</a>
                @endif
            </div>
            @foreach ($sublayanans->where('layanan_id', $layanans->id) as $sublayanan)
            <div class="d-flex bg-secondary align-items-center rounded-4 px-4 py-2 my-4">
                <div class="d-flex text-white d-flex align-items-center rounded-start">
                    @if ($sublayanan->ikon_sub == Null)
                    <img src="{{ asset('assets/ikon') }}/default.png" alt="ikon" height="40" width="40"/>
                    @else
                    <img src="{{ asset('assets/ikon') }}/{{ $sublayanan->ikon_sub }}" alt="ikon" height="40" width="40"/>
                    @endif
                </div>
                <div class="col bg-secondary d-flex flex-column flex-md-row justify-content-between"> 
                    <span class="fw-bolder py-1">{{ $sublayanan->nama_sub }}</span>
                    <div class="d-flex justify-content-end gap-2">
                        @if(auth()->user()->roles_id == 1)
                        <a href="{{ route('super.sublayanan.edit',$sublayanan->id) }}" class="btn btn-dark btn-sm mb-3 ml-1 mt-1 p-1 my-auto">
                        Edit
                        </a>
                        <button type="submit" class="btn btn-dark btn-sm mb-3 ml-1 mt-1 p-1 my-auto" role="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$sublayanan->id}}">
                        Hapus
                        </button>
                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-sm{{$sublayanan->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark"><strong>Hapus Jenis Layanan?</strong></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{route('super.sublayanan.destroy', $sublayanan->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-dark light" name="" id="">Ya</button>
                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tidak</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>
@include('menu')
<!--./subLayanan-->

@endsection
