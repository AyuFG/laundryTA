<?php

namespace App\Http\Controllers\Admin;

use App\Models\ListOrder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = ListOrder::all();
        return view('admin.transaksi.index', compact('transaksis'));
    }

    public function indexLaporan()
    {
        $laporans = ListOrder::all();
        return view('admin.pembukuan.laporan', compact('laporans'));
    }

    public function indexChart()
    {
        $charts = ListOrder::all();
        return view('admin.pembukuan.index', compact('charts'));
    }

    public function create()
    {
        return view('admin.transaksi.create');
    }

    public function store(Request $request)
    {

        $token = "1324" . Time();
        ListOrder::create([
            'token' => $token,
            'user_order' => $request->user_order,
            'jenis_transaksi' => $request->jenis_transaksi,
            'waktu_order' => $request->waktu_order,
            'harga_order' => $request->harga_order
        ]);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/laporan')->with('sukses', 'Berhasil Tambah Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/laporan')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function show(string $id)
    {
        $order = ListOrder::where('id', $id)->first();
        return view('admin.transaksi.read', compact('order'));
    }

    public function edit(string $id)
    {
        $order = ListOrder::where('id', $id)->first();
        return view('admin.transaksi.update', compact('order'));
    }

    public function update(Request $request, string $id)
    {
        $order = ListOrder::where('id', $id)->first();
        $token = "1324" . Time();
        $order->update(
            [
                'token' => $token,
                'user_order' => $request->user_order,
                'jenis_pelayanan' => $request->jenis_pelayanan,
                'jenis_transaksi' => $request->jenis_transaksi,
                'waktu_order' => $request->waktu_order,
                'alamat_order' => $request->alamat_order,
                'harga_order' => $request->harga_order,
                'list_id' => $request->list_id,
                'keluhan' => $request->keluhan,
                'foto_keluhan' => $request->foto_keluhan,
                'opsi_pengiriman' => $request->opsi_pengiriman,
                'pembayaran' => $request->pembayaran,
                'foto_pembayaran' => $request->foto_pembayaran,
                'no_rekening' => $request->no_rekening,
                'status' => $request->status
            ]
        );
        if (auth()->user()->roles_id == 1) {
            return redirect('super/transaksi')->with('sukses', 'Berhasil Edit Data!');
        } elseif (auth()->user()->roles_id == 2) {
            return redirect('admin/transaksi')->with('sukses', 'Berhasil Edit Data!');
        }
    }

    public function destroy(string $id)
    {
        $data = ListOrder::where('id', $id)->first();
        $data->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/transaksi')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
