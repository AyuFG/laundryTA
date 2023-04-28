<?php

namespace App\Http\Controllers\Client;

use App\Models\Layanan;
use App\Models\SubLayanan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientLayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::all();
        return view('client.layanan.index', compact('layanans'));
    }

    public function show(string $id)
    {
        $sublayanans = SubLayanan::where('id', $id)->first();
        return view('client.sublayanan.index', compact('sublayanans'));
    }
}
