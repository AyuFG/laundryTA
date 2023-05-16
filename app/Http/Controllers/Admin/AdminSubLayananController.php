<?php

namespace App\Http\Controllers\Admin;

use App\Models\Layanan;
use App\Models\SubLayanan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSubLayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::all();
        return view('admin.layanan.index', compact('layanans'));
    }

    public function createSub(string $id)
    {
        $layanan = Layanan::where('id', $id)->first();
        return view('admin.sublayanan.create', compact('layanan'));
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                'layanan_id' => 'required',
                'nama_sub' => 'required|max:255',
                'deskripsi_sub' => 'required',
                'waktu_sub' => 'required|numeric',
                'harga_sub' => 'required|numeric',
            ],[
                'layanan_id.required' => 'Layanan Tidak Boleh Kosong!',
                'nama_sub.required' => 'Nama Sub Layanan Tidak Boleh Kosong!',
                'nama_sub.max' => 'Nama Sub Layanan Terlalu Panjang!',
                'deskripsi_sub.required' => 'Deskripsi Sub Layanan Tidak Boleh Kosong!',
                'waktu_sub.required' => 'Waktu Sub Layanan Tidak Boleh Kosong!',
                'waktu_sub.numeric' => 'Waktu Sub Layanan Harus Berupa Angka!',
                'harga_sub.required' => 'Harga Sub Layanan Tidak Boleh Kosong!',
                'harga_sub.numeric' => 'Harga Sub Layanan Harus Berupa Angka!',
            ]
        );

        $sublayanan = SubLayanan::create([
            'layanan_id' => $request->layanan_id,
            'nama_sub' => $request->nama_sub,
            'deskripsi_sub' => $request->deskripsi_sub,
            'waktu_sub' => $request->waktu_sub,
            'harga_sub' => $request->harga_sub
        ]);
        

        $validasi = $request->validate(
            [
                'ikon_sub' => 'mimes:jpg,bmp,png,svg,jpeg|max:2560 ',
            ],[
                'ikon_sub.mimes' => 'Format Ikon Tidak Sesuai!',
                'ikon_sub.max' => 'Ukuran Ikon Terlalu Besar!',
            ]
        );

        $file = $validasi[('ikon_sub')];
        $sublayanan->ikon_sub = time().'_'.$file->getClientOriginalName();
        $sublayanan->update();
        $nama_file = time().'_'.$file->getClientOriginalName();

        $location = '../public/assets/ikon/';

        $file->move($location,$nama_file);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/sublayanan')->with('sukses', 'Berhasil Tambah Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/sublayanan')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function edit(string $id)
    {
        $layanan = Layanan::where('id', $id)->first();
        $sublayanan = SubLayanan::where('id', $id)->first();
        return view('admin.sublayanan.update', compact('sublayanan', 'layanan'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama_sub' => 'required|max:255',
                'deskripsi_sub' => 'required',
                'waktu_sub' => 'required|numeric',
                'harga_sub' => 'required|numeric',
            ],[
                'nama_sub.required' => 'Nama Sub Layanan Tidak Boleh Kosong!',
                'nama_sub.max' => 'Nama Sub Layanan Terlalu Panjang!',
                'deskripsi_sub.required' => 'Deskripsi Sub Layanan Tidak Boleh Kosong!',
                'waktu_sub.required' => 'Waktu Sub Layanan Tidak Boleh Kosong!',
                'waktu_sub.numeric' => 'Waktu Sub Layanan Harus Berupa Angka!',
                'harga_sub.required' => 'Harga Sub Layanan Tidak Boleh Kosong!',
                'harga_sub.numeric' => 'Harga Sub Layanan Harus Berupa Angka!',
            ]
        );

        $sublayanan = SubLayanan::where('id', $id)->first();
        $sublayanan->update(
            [
                'layanan_id' => $request->layanan_id,
                'nama_sub' => $request->nama_sub,
                'deskripsi_sub' => $request->deskripsi_sub,
                'waktu_sub' => $request->waktu_sub,
                'harga_sub' => $request->harga_sub
            ]
        );
        
        $validasi = $request->validate(
            [
                'ikon_sub' => 'mimes:jpg,bmp,png,svg,jpeg|max:1280 ',
            ],[
                'ikon_sub.mimes' => 'Format Ikon Tidak Sesuai!',
                'ikon_sub.max' => 'Ukuran Ikon Terlalu Besar!',
            ]
        );

        if($request->hasFile('ikon_sub')){
            $ikon_sub = $validasi[('ikon_sub')];
            $sublayanan->ikon_sub = time().'_'.$ikon_sub->getClientOriginalName();
            $sublayanan->update();
            $ikon_sub->move('../public/assets/ikon/',time().'_'.$ikon_sub->getClientOriginalName());
        }

        if (auth()->user()->roles_id == 1) {
            return redirect('super/sublayanan/'.$id.'/edit')->with('sukses', 'Berhasil Edit Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/sublayanan/'.$id.'/edit')->with('sukses', 'Berhasil Edit Data!');
        }
    }

    public function destroy(string $id)
    {
        $data = SubLayanan::where('id', $id)->first();
        $data->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/sublayanan')->with('sukses', 'Berhasil Hapus Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/sublayanan')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
