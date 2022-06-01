@extends('asset.home')
@section('judul', 'post')
@section('contein')

    <a href="{{ route('tambah-posts') }}" class="btn btn-primary mb-3">Tambah post</a>
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Post</th>
                <th>Category </th>
                <th>Content</th>
                <th>tags</th>
                <th>Creator</th>
                <th>gambar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_posts as $posts => $post)
                <tr>
                    <td>{{ $posts + $data_posts->firstitem() }}</td>
                    <td>{{ $post->judul }}</td>
                    <td>{{ $post->category->nama ?? 'none' }}</td>
                    <td>{{ $post->content }}</td>
                    <td>

                        @foreach ($post->tags as $tag)
                            <ul>
                                <h6><span class="badge badge-info">{{ $tag->name }}</span></h6>
                            </ul>
                        @endforeach

                    </td>
                    <td>{{ $post->users->name }}</td>
                    <td>
                        <img width="80px" src="{{ asset('storage/' . $post->gambar) }}" alt="">
                    </td>
                    <td>
                        <form action="{{ route('delete-posts', $post->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('edit-posts', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data_posts->links() }}
@endsection
