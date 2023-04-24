<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::where('id', $id)->first();
        if (auth()->user()->roles_id == 1) {
            return view('admin.profile.read', compact('user'));
        } else if (auth()->user()->roles_id == 2) {
            return view('admin.profile.read', compact('user'));
        } else if (auth()->user()->roles_id == 3) {
            return view('client.profile.read', compact('user'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::where('id', $id)->first();
        if (auth()->user()->roles_id == 1) {
            return view('admin.profile.update', compact('user'));
        } else if (auth()->user()->roles_id == 2) {
            return view('admin.profile.update', compact('user'));
        } else if (auth()->user()->roles_id == 3) {
            return view('client.profile.update', compact('user'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::where('id', $id)->first();
        $user->update(
            [
                'nama' => $request->nama,
                'email' => $request->email,
                'gambar_user' => $request->gambar_user,
                'no_telepon' => $request->no_telepon,
                'password' => Hash::make($request->password)
            ]
        );
        if (auth()->user()->roles_id == 1) {
            return redirect('super/profile')->with('sukses', 'Berhasil Edit Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/profile')->with('sukses', 'Berhasil Edit Data!');
        } else if (auth()->user()->roles_id == 3) {
            return redirect('member/user')->with('sukses', 'Berhasil Edit Data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
