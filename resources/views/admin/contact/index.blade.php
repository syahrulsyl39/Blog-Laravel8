@extends('asset.home')
@section('judul', 'Pesan')
@section('contein')


    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama depan</th>
                <th>Nama belakang</th>
                <th>Email </th>
                <th>Pesan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_contact as $contact => $cont)
                <tr>
                    <td>{{ $contact + $data_contact->firstitem() }}</td>
                    <td>{{ $cont->nama_depan }}</td>
                    <td>{{ $cont->nama_belakang }}</td>
                    <td>{{ $cont->email ?? 'none' }}</td>
                    <td>{{ $cont->pesan }}</td>

                    <td class="row">
                        <form action="" method="post">
                            @csrf
                            @method('delete')
                            <a href="" class="btn btn-primary btn-sm">Balas Pesan</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data_contact->links() }}
@endsection
