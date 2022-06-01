<?php

namespace App\Http\Controllers;

use App\Models\penulis;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PenulisController extends Controller
{
    public function penulis()
    {
        $data_penulis = penulis::paginate(4);
        return view('admin.penulis.index', compact('data_penulis'));
    }

    public function tambah_penulis()
    {
        return view('admin.penulis.tambahpenulis');
    }

    public function tdatapenulis(Request $request)
    {
        if ($request->file('gambar')) {
            $img = $request->file('gambar')->store('penulis');
        }
        penulis::create([
            'penulis'=>$request->input('penulis'),
            'biografi'=>$request->input('biografi'),
            'jabatan'=>$request->input('jabatan'),
            'slug'=> Str::slug($request->input('penulis')),
            'gambar'=> $img,
        ]);

        return redirect()->route('index-penulis');
    }
}
