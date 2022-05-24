@extends('asset.home')
@section('judul', 'Tags')
@section('contein')

    <a href="{{ route('tambah-tags') }}" class="btn btn-primary mb-3">Tambah Tag</a>
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tags</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_tags as $tags => $tag)
                <tr>
                    <td>{{ $tags + $data_tags->firstitem() }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>
                        <form action="{{ route('delete-tags', $tag->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('edit-tags', $tag->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    {{ $data_tags->links() }}

@endsection
