<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $data_user = User::paginate(3);
        return view('admin.user.index', compact('data_user'));
    }

    public function create()
    {
        return view('admin.user.tambah');
    }

    public function store(Request $request)
    {
        
        if ($request->input('passowrd')) {
            $password = bcrypt($request->input('password'));
        }
        else {
            $password = bcrypt('12345678');
        }

        User::create([
            'name'=> $request->input('name'),
            'email' => $request->input('email'),
            'password' => $password,
            'role' => $request->input('role'),
            
        ]);

        return redirect()->route('index-user');
    }

    public function edit($id)
    {
        $data_user = User::where('id', $id)->first();
        return view('admin.user.edit', compact('data_user'));
    }

    public function update(Request $request, $id)
    {
        $data_user = User::where('id', $id)->first();
        if ($request->input('password')) {
            $password = [
                'nama'=> $request->input('nama'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'role' => $request->input('role')
            ];
        }else {
            $password = [
                'nama'=> $request->input('nama'),
                'email' => $request->input('email'),
                'role' => $request->input('role')
            ];
        }

        $data_user->update($password);
        return redirect()->route('index-user');
    }

    public function delete($id)
    {
        $data_user = User::where('id', $id)->first();
        $data_user->delete();
        return redirect()->route('index-user');
    }

  
}
