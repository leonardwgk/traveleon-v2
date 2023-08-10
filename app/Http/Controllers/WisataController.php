<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WisataController extends Controller
{
    public function index()
    {
        $wisatas = Wisata::all();
        return view('admin.wisata', compact('wisatas'));
    }
    public function indexuser()
    {
        $wisatas = Wisata::all();
        return view('user.wisata', compact('wisatas'));
    }

    public function store(Request $request)
    {
        $rules = [
            'pulau' => 'required',
            'wisata' => 'required'
        ];
        $data = $request->validate($rules);
        Wisata::create($data);
        return redirect('/admin/wisata');
    }

    public function edit($id)
    {
        $wisata = Wisata::find($id);
        return view('admin.editwisata', compact('wisata'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'pulau' => $request->pulau,
            'wisata' => $request->wisata
        ];
        Wisata::where('id', $id)->update($data);
        return redirect('/admin/wisata');
    }

    public function delete($id)
    {
        Wisata::destroy($id);
        return redirect('/admin/wisata');
    }
}
