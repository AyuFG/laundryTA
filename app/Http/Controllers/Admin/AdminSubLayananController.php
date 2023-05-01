<?php

namespace App\Http\Controllers\Admin;

use App\Models\Layanan;
use App\Models\SubLayanan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSubLayananController extends Controller
{
    public function createSub(string $id)
    {
        $layanan = Layanan::where('id', $id)->first();
        return view('admin.sublayanan.create', compact('layanan'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'layanan_id' => 'required',
            'nama_sub' => 'required',
            'deskripsi_sub' => 'required',
            'waktu_sub' => 'required',
            'harga_sub' => 'required',
        ]);

        $sublayanan = SubLayanan::create([
            'layanan_id' => $request->layanan_id,
            'nama_sub' => $request->nama_sub,
            'deskripsi_sub' => $request->deskripsi_sub,
            'waktu_sub' => $request->waktu_sub,
            'harga_sub' => $request->harga_sub
        ]);
        

        $validasi = $request->validate([
            'ikon_sub' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:2560 ',
        ]);

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
        $request->validate([
            'nama_sub' => 'required',
            'deskripsi_sub' => 'required',
            'waktu_sub' => 'required',
            'harga_sub' => 'required|numeric',
        ]);

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
        
        $validasi = $request->validate([
            'ikon_sub' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:1280 ',
        ]);

        $file = $validasi[('ikon_sub')];
        $sublayanan->ikon_sub = time().'_'.$file->getClientOriginalName();
        $sublayanan->update();
        $nama_file = time().'_'.$file->getClientOriginalName();

        $location = '../public/assets/ikon/';

        $file->move($location,$nama_file);

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
