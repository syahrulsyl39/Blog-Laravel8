@extends('asset.home')

@section('judul', 'User')
@section('contein')

    <a href="{{ route('create-user') }}" class="btn btn-primary mb-3">Tambah User</a>
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama User</th>
                <th>Email</th>
                <th>Creator</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_user as $users => $user)
                <tr>
                    <td>{{ $users + $data_user->firstitem() }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <form action="{{ route('delete-user', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('edit-user', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $data_user->links() }}
@endsection
