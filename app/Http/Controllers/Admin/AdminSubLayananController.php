<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubLayanan;
use App\Models\Layanan;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminSubLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $sublayanans = SubLayanan::all();
        $layanans = Layanan::all();
        return view('admin.sublayanan.index', compact('sublayanans','layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sublayanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SubLayanan::create([
            'layanan_id' => $request->layanan_id,
            'nama_sub' => $request->nama_sub,
            'deskripsi_sub' => $request->deskripsi_sub,
            'waktu_sub' => $request->waktu_sub,
            'harga_sub' => $request->harga_sub,
            'barang_sub' => $request->barang_sub
        ]);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/sublayanan')->with('sukses', 'Berhasil Tambah Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/sublayanan')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sublayanan = SubLayanan::where('id', $id)->first();
        return view('admin.sublayanan.read', compact('sublayanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sublayanan = SubLayanan::where('id', $id)->first();
        return view('admin.sublayanan.update', compact('sublayanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sublayanan = SubLayanan::where('id', $id)->first();
        $sublayanan->update(
            [
                'layanan_id' => $request->layanan_id,
                'nama_sub' => $request->nama_sub,
                'deskripsi_sub' => $request->deskripsi_sub,
                'waktu_sub' => $request->waktu_sub,
                'harga_sub' => $request->harga_sub,
                'barang_sub' => $request->barang_sub
            ]
        );
        if (auth()->user()->roles_id == 1) {
            return redirect('super/sublayanan')->with('sukses', 'Berhasil Edit Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/sublayanan')->with('sukses', 'Berhasil Edit Data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
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
