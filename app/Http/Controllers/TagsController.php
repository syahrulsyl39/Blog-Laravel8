<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\support\Str;

use function Ramsey\Uuid\v1;

class TagsController extends Controller
{
    public function index()
    {
        $data_tags = Tags::paginate(6);
        return view('admin.tags.index', compact('data_tags'));
    }

    public function tambahtags()
    {
        return view('admin.tags.tambah');
    }

    public function simpantags(Request $request)
    {

        $this->validate($request,[
            'name'=>'required|string',
        ]);

        Tags::create([
            'name' => $request->input('name'),
            'slug' =>Str::slug($request->input('name')),
        ]);
        return redirect()->route('index-tags');
    }

    public function edittags($id)
    {
        $tags = Tags::where('id', $id)->first();
        return view('admin.tags.edit', compact('tags'));
    }

    public function updatetags(Request $request, $id)
    {
        $tags = Tags::where('id', $id)->first();
        $this->validate($request, [

            'name'=> 'required|string',
        ]);

        // if ($request->file('gambar')) {
        //     $file = $request->file('gambar')->store('img');
        //     if ($tags->gambar && file_exists(storage_path('app/public', $tags->gambar))) {
        //         Storage::delete('public/', $tags->gambar);
        //         $file = $request->file('gambar')->store('img');
        //     }
        // }

        // if ($request->file('gambar')=== null) {
        //     $file = $tags->gambar;
        // }


      
        $tags->update([
            'name'=> $request->input('name'),
            'slug'=> Str::slug($request->input('name')),
        ]);
        return redirect()->route('index-tags');
    }

    public function deletetags($id)
    {
        $tags = Tags::where('id', $id)->first();

        // if ($tags->gambar && file_exists(storage_path('app/public', $tags->gambar))) {
        //     Storage::delete('public/', $tags->gambar)
        // }

        $tags->delete();
        return redirect()->route('index-tags');
    }
}
