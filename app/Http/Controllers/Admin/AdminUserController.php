<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_telepon' => 'required',
            'password' => 'required',
            'roles_id' => 'required'
        ]);
        
        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'password' => Hash::make($request->password),
            'roles_id' => $request->roles_id
        ]);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/user')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function show(string $id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.user.read', compact('user'));
    }

    public function edit(string $id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.user.update', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user = User::where('id', $id)->first();
        $user->update(
            [
                'nama' => $request->nama,
                'email' => $request->email,
                'no_telepon' => $request->no_telepon,
                'password' => Hash::make($request->password),
                'roles_id' => $request->roles_id
            ]
        );
        if (auth()->user()->roles_id == 1) {
            return redirect('super/user')->with('sukses', 'Berhasil Edit Data!');
        }
    }

    public function destroy(string $id)
    {
        $data = User::where('id', $id)->first();
        $data->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/user')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
