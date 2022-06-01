@extends('asset.home')
@section('judul', 'post')
@section('contein')


    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Post</th>
                <th>Category </th>
                <th>Content</th>
                <th>tags</th>
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
                                <li>{{ $tag->name }}</li>
                            </ul>
                        @endforeach

                    </td>
                    <td>
                        <img width="80px" height="60px" src="{{ asset('storage/' . $post->gambar) }}" alt="gambar error">
                    </td>
                    <td>
                        <form action="{{ route('permanen-posts', $post->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('restore-posts', $post->id) }}" class="btn btn-primary btn-sm">Restore</a>
                            <button type="submit" class="btn btn-danger btn-sm">permanen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div class="container"> {{ $data_category->links() }}</div> --}}
@endsection
