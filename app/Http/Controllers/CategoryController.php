<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $data_category = Category::paginate(5);
        return view('admin.catagory.index', compact('data_category'));
    }

    public function tcategory()
    {
        return view('admin.catagory.tambah');
    }

    public function scategory(Request $request)
    {

        $this->validate($request, [
            'nama' => 'required|string',
        ]);

        Category::create([
            'nama' => $request->input('nama'),
            'slug'=> Str::slug($request->input('nama')),
        ]);

        return redirect()->route('index')->with('succes', 'data anda berhasil di tambahkan');
    }

    public function editcategory($id)
    {
        $category = Category::where('id', $id)->first();
        return view('admin.catagory.edit', compact('category'));
    }

    public function updatecategory(Request $request, $id)
    {

        $this->validate($request, [
            "nama"=> 'required|string',
        ]);

        $category = Category::where('id', $id)->first();
        $category->update([
            'nama'=> $request->input('nama'),
            'slug' => Str::slug($request->input('nama')),
        ]);

        return redirect()->route('index');
    }

    public function deletecategory($id)
    {
        $category = Category::where('id', $id)->first();
        $category->delete();
        return redirect()->route('index')->with('succes', 'data anda berhasil di hapus');
    }

    public function sampah()
    {
        $data_category = Category::onlyTrashed()->paginate(10);
        return view('admin.catagory.sampah', compact('data_category'));
    }


}

