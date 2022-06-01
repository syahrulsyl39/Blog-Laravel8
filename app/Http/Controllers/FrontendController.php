<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\penulis;
use App\Models\Posts;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data_post = Posts::OrderBy('created_at', 'desc')->get();
        $data_category = Category::all();
        $data_penulis = penulis::all();
        return view('frontend.frontend', compact('data_post', 'data_category', 'data_penulis'));
    }

    public function detail($id)
    {
        $data_view = Posts::where('id', $id )->first();
        $data_view = Posts::all();
        return view('frontend.detail', compact('data_view'));

    }

   
}
