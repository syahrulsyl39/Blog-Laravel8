<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\penulis;
use App\Models\Posts;
use App\Models\Tags;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tampil_posts = Posts::all()->count();
        $tampil_category = Category::all()->count();
        $tampil_tags = Tags::all()->count();
        $tampil_user = User::all()->count();
        $tampil_pesan = Contact::all()->count();
        $tampil_penulis = penulis::all()->count();

        return view('admin.dasboard.dasbiard', compact('tampil_posts', 'tampil_category', 'tampil_tags', 'tampil_user', 'tampil_pesan', 'tampil_penulis'));
    }
}
