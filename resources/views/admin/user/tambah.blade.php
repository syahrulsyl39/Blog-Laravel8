@extends('asset.home')
@section('judul', 'Tambah User')
@section('contein')
    <form action="{{ route('store-user') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label>creator</label>
            <select class="form-control" name="role">
                <option> Pilih Creator </option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Simpan User</button>
        </div>
    </form>
@endsection
