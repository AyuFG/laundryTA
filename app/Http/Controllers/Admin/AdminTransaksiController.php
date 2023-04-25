<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaksi;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('admin.transaksi.index', compact('transaksis'));
    }

    public function indexLaporan()
    {
        $laporans = Transaksi::all();
        return view('admin.pembukuan.laporan', compact('laporans'));
    }

    public function indexChart()
    {
        $charts = Transaksi::all();
        return view('admin.pembukuan.index', compact('charts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transaksis = Transaksi::all();
        return view('admin.transaksi.create', compact('transaksis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'user_id' => $request->user_id,
            'jenis_transaksi' => $request->jenis_transaksi,
            'nominal_transaksi' => $request->nominal_transaksi
        ]);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/transaksi')->with('sukses', 'Berhasil Tambah Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/transaksi')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        return view('admin.transaksi.read', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        return view('admin.transaksi.update', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        $transaksi->update(
            [
                'user_id' => $request->user_id,
                'jenis_transaksi' => $request->jenis_transaksi,
                'nominal_transaksi' => $request->nominal_transaksi
            ]
        );
        if (auth()->user()->roles_id == 1) {
            return redirect('super/transaksi')->with('sukses', 'Berhasil Edit Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/transaksi')->with('sukses', 'Berhasil Edit Data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Transaksi::where('id', $id)->first();
        $data->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/transaksi')->with('sukses', 'Berhasil Hapus Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/transaksi')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
