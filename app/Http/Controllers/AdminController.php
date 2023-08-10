<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class AdminController extends Controller
{
    public function index()
    {
        $data = Tiket::all();
        return view('admin.dashboard', compact('data'));
    }

    public function manage()
    {
        $users = User::all();
        return view('admin.user', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'nama' => $request->nama,
            'nik' => $request->nik,
            'umur' => $request->umur,
            'telpon' => $request->telpon,
            'email' => $request->email,
            'negara' => $request->negara,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'alamat' => $request->alamat
        ];
        User::where('id', $id)->update($data);
        return redirect('/admin');
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect('/admin');
    }


    public function approve($id)
    {
        $data = Tiket::find($id);
        $data['status'] = 'Dikonfirmasi';
        $data->save();
        return redirect('/admin');
    }

    public function destroy($id)
    {
        Tiket::destroy($id);
        return redirect('/admin');
    }
}
