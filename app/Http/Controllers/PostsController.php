<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use App\Models\Tags;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use function PHPUnit\Framework\returnSelf;
use function Ramsey\Uuid\v1;

class PostsController extends Controller
{
    public function index_post()
    {
        $data_posts = Posts::paginate(3);
        $users = User::all();
        $category = Category::all();
        return view('admin.posts.indexp', compact('data_posts', 'users', 'category'));
    }

    public function tambah_post()
    {
        $tags = Tags::all();
        $category = Category::all();
        return view('admin.posts.tambahp', compact('category', 'tags'));
    }

    public function simpan_post(Request $request)
    {
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('imgp');
        }

        $post = Posts::create([
            'judul' => $request->input('judul'),
            'category_id' => $request->input('category_id'),
            'content' => $request->input('content'),
            'slug' => Str::slug($request->input('judul')),
            'users_id' => Auth::id(),
            'gambar' => $file,
        ]);

        $post->tags()->attach($request->tagss);

        return redirect()->route('index-posts');
    }

    public function edit_post($id)
    {
        $post= Posts::where('id', $id)->first();
        $category = Category::all();
        $tags = Tags::all();
        return view('admin.posts.editpost', compact('post','tags','category'));
    }

    public function update_post(Request $request, $id)
    {
        $post = Posts::where('id', $id)->first();
        
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('imgp');
            if ($post->gambar && file_exists(storage_path('app/public', $post->gambar))) {
                Storage::delete('public/', $post->gambar);
                $file = $request->file('gambar')->store('imgp');
            }
        }

        if ($request->file('gambar') == null) {
            $file = $post->gambar;
        }

        
        $post->tags()->sync($request->tagss);
        $post->update([
            "judul" => $request->input('judul'),
            "category_id" => $request->input('category_id'),
            "content" => $request->input('content'),
            'slug' => Str::slug($request->input('judul')),
            "gambar" =>$file,
        ]);
        return redirect()->route('index-posts');
    }

    public function delete_post($id)
    {
        $post = Posts::where('id', $id)->first();
        // if ($post->gambar && file_exists(storage_path('app/public', $post->gambar))) {
        //     Storage::delete('public/', $post->gambar);
        // }
        $post->delete();
        return redirect()->route('index-posts');
    }

    public function sampah()
    {
        $data_posts = Posts::onlyTrashed()->paginate(2);
        return view('admin.posts.sampah', compact('data_posts'));
    }

    public function restore($id)
    {
        $data_posts = Posts::withTrashed()->where('id', $id)->first();
        $data_posts->restore();
        return redirect()->route('sampah-posts');
    }

    public function permanen($id)
    {
        $data_posts = Posts::withTrashed()->where('id', $id)->first();
        if ($data_posts->gambar && file_exists(storage_path('app/public', $data_posts->gambar))) {
            Storage::delete('public/', $data_posts->gambar);
        }
        $data_posts->forceDelete();
        return redirect()->route('sampah-posts');
    }
}
