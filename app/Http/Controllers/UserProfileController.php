<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    public function edit(string $id)
    {
        $user = User::where('id', auth()->user()->id )->firstOrFail();
        if (auth()->user()->roles_id == 1) {
            return view('admin.profile.update', compact('user'));
        } else if (auth()->user()->roles_id == 2) {
            return view('admin.profile.update', compact('user'));
        } else if (auth()->user()->roles_id == 3) {
            return view('client.profile.update', compact('user'));
        }
    }

    public function update(Request $request, string $id)
    {
        $user = User::where('id', auth()->user()->id )->firstOrFail();
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
            return redirect('super/profile/'.$id.'/edit')->with('sukses', 'Berhasil Edit Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/profile/'.$id.'/edit')->with('sukses', 'Berhasil Edit Data!');
        } else if (auth()->user()->roles_id == 3) {
            return redirect('member/profile/'.$id.'/edit')->with('sukses', 'Berhasil Edit Data!');
        }
    }

}
