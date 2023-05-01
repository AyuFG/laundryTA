<?php

namespace App\Http\Controllers\Admin;

use App\Models\ListOrder;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\DetailOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listorders = ListOrder::all();
        $detailorders = DetailOrder::all();
        return view('admin.transaksi.index', compact('listorders', 'detailorders'));
    }

    public function indexLaporan()
    {
        $laporans = ListOrder::all();
        return view('admin.pembukuan.laporan', compact('laporans'));
    }

    public function indexChart()
    {
        $orders = DB::table('list_order')
                    ->select(DB::raw("MONTH(waktu_order) as month"), 'jenis_transaksi', DB::raw('SUM(harga_order) as total'))
                    ->groupBy('month', 'jenis_transaksi')
                    ->orderBy('month', 'asc')
                    ->get();

        $data = [];

        foreach ($orders as $order) {
            $data[$order->month][$order->jenis_transaksi] = $order->total;
        }
        
    return view('admin.pembukuan.index', compact('data'));
    
    }

    public function create()
    {
        return view('admin.transaksi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_order' => 'required',
            'jenis_transaksi' => 'required',
            'waktu_order' => 'required',
            'harga_order' => 'required|numeric'
        ]);

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
        $detail = DetailOrder::where('list_id', $id)->first();
        return view('admin.transaksi.update', compact('order', 'detail'));
    }

    public function update(Request $request, string $id)
    {
        $order = ListOrder::where('id', $id)->first();
        $detail = DetailOrder::where('list_id', $id)->first();
        $token = "1324" . Time();
        $order->update(
            [
                'token' => $token,
                'user_order' => $request->user_order,
                'jenis_pelayanan' => $request->jenis_pelayanan,
                'jenis_transaksi' => $request->jenis_transaksi || "pemasukan",
                'waktu_order' => $request->waktu_order,
                'alamat_order' => $request->alamat_order,
                'harga_order' => $request->harga_order,
                'status_order' => $request->status_order,
                'keluhan' => $request->keluhan
                ]
            );
        $detail->update([
            'list_id' => $order->$id,
            'foto_keluhan' => $request->foto_keluhan,
            'opsi_pengiriman' => $request->opsi_pengiriman,
            'pembayaran' => $request->pembayaran,
            'foto_pembayaran' => $request->foto_pembayaran,
            'no_rekening' => $request->no_rekening
        ]);
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
