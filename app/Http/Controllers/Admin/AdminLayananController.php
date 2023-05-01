<?php

namespace App\Http\Controllers\Admin;

use App\Models\Layanan;
use App\Models\SubLayanan;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminLayananController extends Controller
{
    public function index():View
    {
        $layanans = Layanan::all();
        return view('admin.layanan.index', compact('layanans'));
    }

    public function create()
    {
        return view('admin.layanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'deskripsi_layanan' => 'required',
        ]);

        $layanan = Layanan::create([
            'nama_layanan' => $request->nama_layanan,
            'deskripsi_layanan' => $request->deskripsi_layanan
        ]);

        $validasi = $request->validate([
            'ikon_layanan' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:1280 ',
        ]);

        $file = $validasi[('ikon_layanan')];
        $layanan->ikon_layanan = time().'_'.$file->getClientOriginalName();
        $layanan->update();
        $nama_file = time().'_'.$file->getClientOriginalName();

        $location = '../public/assets/ikon/';

        $file->move($location,$nama_file);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/layanan')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function show(string $id)
    {
        $layanans = Layanan::findOrFail($id);
        $sublayanans = SubLayanan::where('layanan_id', $id)->get();
        return view('admin.sublayanan.index', compact('layanans', 'sublayanans'));
    }

    public function edit(string $id)
    {
        $layanan = Layanan::where('id', $id)->first();
        return view('admin.layanan.update', compact('layanan'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'deskripsi_layanan' => 'required',
        ]);

        $layanan = Layanan::where('id', $id)->first();
        $layanan->update(
            [
                'nama_layanan' => $request->nama_layanan,
                'deskripsi_layanan' => $request->deskripsi_layanan
            ]
        );

        $validasi = $request->validate([
            'ikon_layanan' => 'required|mimes:jpg,bmp,png,svg,jpeg|max:2560 ',
        ]);

        $file = $validasi[('ikon_layanan')];
        $layanan->ikon_layanan = time().'_'.$file->getClientOriginalName();
        $layanan->update();
        $nama_file = time().'_'.$file->getClientOriginalName();

        $location = '../public/assets/ikon/';

        $file->move($location,$nama_file);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/layanan/'.$id.'/edit')->with('sukses', 'Berhasil Edit Data!');
        }
    }

    public function destroy(string $id)
    {
        $data = Layanan::where('id', $id)->first();
        $data->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/layanan')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
