@extends('asset.home')
@section('judul', 'Penulis')
@section('contein')

    <a href="{{ route('tambah-penulis') }}" class="btn btn-primary mb-3">Tambah Penulis</a>
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Penulis</th>
                <th>Biografi</th>
                <th>Jabatan </th>
                <th>Slug</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_penulis as $penulis)
                <tr>
                    <td>{{ $penulis->penulis }}</td>
                    <td>{{ $penulis->biografi }}</td>
                    <td>{{ $penulis->jabatan ?? 'none' }}</td>
                    <td>{{ $penulis->slug }}</td>
                    <td>
                        <img width="80px" src="{{ asset('storage/' . $penulis->gambar) }}" alt="">
                    </td>

                    <td class="row">
                        <form action="" method="post">
                            @csrf
                            @method('delete')
                            <a href="" class="btn btn-primary btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data_penulis->links() }}
@endsection
