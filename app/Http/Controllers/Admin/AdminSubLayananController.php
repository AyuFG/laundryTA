<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubLayanan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSubLayananController extends Controller
{
    public function create()
    {
        return view('admin.sublayanan.create');
    }

    public function store(Request $request)
    {
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

    public function show(string $id)
    {
        $sublayanan = SubLayanan::where('id', $id)->first();
        return view('admin.sublayanan.read', compact('sublayanan'));
    }

    public function edit(string $id)
    {
        $sublayanan = SubLayanan::where('id', $id)->first();
        return view('admin.sublayanan.update', compact('sublayanan'));
    }

    public function update(Request $request, string $id)
    {
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
            'ikon_sub' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:2560 ',
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
