@extends('asset.home')
@section('judul', 'category')
@section('contein')

    <a href="{{ route('tambah-category') }}" class="btn btn-primary mb-3">Tambah Category</a>
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_category as $category => $hasil)
                <tr>
                    <td>{{ $category + $data_category->firstitem() }}</td>
                    <td>{{ $hasil->nama }}</td>
                    <td>
                        <form action="{{ route('del-category', $hasil->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('edit-category', $hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data_category->links() }}
@endsection
