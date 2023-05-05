<?php

namespace App\Http\Controllers\Client;

use App\Models\ListOrder;
use App\Http\Controllers\Controller;
use App\Models\DetailOrder;
use App\Models\SubLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientOrderController extends Controller
{
    public function index()
    {
        $orders = ListOrder::where('user_id', Auth::user()->id)
        ->orderBy('id', 'desc')
        ->get();
        return view('client.order.index', compact('orders'));
    }

    public function create()
    {
        $order = SubLayanan::first();
        return view('client.order.create', compact('order'));
    }

    public function order(string $id)
    {
        $order = SubLayanan::where('id', $id)->first();
        $now = date('Y-m-d H:i:s');
        return view('client.order.create', compact('order', 'now'));
    }

    public function store(Request $request)
    {

        $token = "1324" . Time();
        
        $listorder = ListOrder::create(
            [
                'token' => $token,
                'user_id' => auth()->user()->id,
                'user_order' => $request->user_order,
                'jenis_pelayanan' => $request->jenis_pelayanan,
                'no_telepon' => $request->no_telepon,
                'jenis_transaksi' => 'pemasukan',
                'waktu_order' => $request->waktu_order,
                'alamat_order' => $request->alamat_order,
                'harga_order' => $request->harga_order,
                'status_order' => 'Menunggu Konfirmasi',
                'keluhan' => $request->keluhan
                ]
            );

        $detailorder = DetailOrder::create([
            'list_id' => $listorder->id,
            'opsi_pengiriman' => $request->opsi_pengiriman,
            'pembayaran' => $request->pembayaran,
            'no_rekening' => $request->no_rekening
        ]);
        
        $validasi = $request->validate([
            'foto_keluhan' => 'mimes:jpg,bmp,png,svg,jpeg|max:2560 ',
            'foto_pembayaran' => 'mimes:jpg,bmp,png,svg,jpeg|max:2560 ',
        ]);
        if($request->hasFile('foto_keluhan')){
            $foto_keluhan = $validasi[('foto_keluhan')];
            $detailorder->foto_keluhan = time().'_'.$foto_keluhan->getClientOriginalName();
            $detailorder->update();
            $foto_keluhan->move('../public/assets/img/keluhan/',time().'_'.$foto_keluhan->getClientOriginalName());
        }
        if($request->hasFile('foto_pembayaran')){
            $foto_pembayaran = $validasi[('foto_pembayaran')];
            $detailorder->foto_pembayaran = time().'_'.$foto_pembayaran->getClientOriginalName();
            $detailorder->update();
            $foto_pembayaran->move('../public/assets/img/pembayaran/',time().'_'.$foto_pembayaran->getClientOriginalName());
        }

        if (auth()->user()->roles_id == 3) {
            return redirect('member/m-order')->with('sukses', 'Berhasil Order!');
        }
    }

    public function show(string $id)
    {
        $order = ListOrder::where('id', $id)->first();
        $detail = DetailOrder::where('list_id', $id)->first();
        return view('client.order.read', compact('order', 'detail'));
    }
}
