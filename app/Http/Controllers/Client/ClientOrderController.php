<?php

namespace App\Http\Controllers\Client;

use App\Models\ListOrder;
use App\Http\Controllers\Controller;
use App\Models\SubLayanan;
use Illuminate\Http\Request;

class ClientOrderController extends Controller
{
    public function index()
    {
        $orders = ListOrder::all();
        return view('client.order.index', compact('orders'));
    }

    public function create()
    {
        $order = SubLayanan::get();
        return view('client.order.create', compact('order'));
    }

    public function store(Request $request)
    {
        $token = "1324" . Time();
        ListOrder::create(
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
        if (auth()->user()->roles_id == 3) {
            return redirect('member/m-order')->with('sukses', 'Berhasil Order!');
        }
    }

    public function show(string $id)
    {
        $order = ListOrder::where('id', $id)->first();
        return view('client.order.read', compact('order'));
    }
}
