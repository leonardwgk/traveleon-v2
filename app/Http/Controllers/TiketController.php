<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tiket;
use App\Models\Wisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TiketController extends Controller
{
    public function index()
    {
        $wisatas = Wisata::all();
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('user.pesan', compact('user_id', 'user', 'wisatas'));
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'nik' => 'required',
            'telpon' => 'required',
            'negara' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
            'umur' => 'required',
            'tanggalkeb' => 'required',
            'tempat' => 'required',
            'jumlah' => 'required',
            'user_id' => 'required'
        ];
        $data = $request->validate($rules);
        Tiket::create($data);
        return redirect('user/account');
    }

    public function daftar()
    {
        $id = auth()->user()->id;
        $tikets = Tiket::where('user_id', $id)->get();
        return view('user.daftar', compact('tikets'));
    }

    public function detail($id)
    {
        $tiket = Tiket::find($id);
        return view('user.detail', compact('tiket'));
    }
}
