<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{



    public function index()
    {
        $data_contact = Contact::paginate(6);
        return view('admin.contact.index', compact('data_contact'));
    }

    public function tambah_pesan(Request $request)
    
    {
        Contact::create([
            "nama_depan" => $request->input('nama_depan'),
            "nama_belakang" => $request->input('nama_belakang'),
            "email" => $request->input('email'),
            "pesan" => $request->input('pesan')
        ]);

        return redirect()->route('index-frontend');
    }
}
