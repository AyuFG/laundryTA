<?php

namespace App\Http\Controllers\Client;

use App\Models\SubLayanan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientSubLayananController extends Controller
{
    public function index()
    {
        $sublayanans = SubLayanan::all();
        return view('client.sublayanan.index', compact('sublayanans'));
    }
}
