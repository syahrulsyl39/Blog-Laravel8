@extends('asset.home')
@section('judul', 'Edit User')
@section('contein')
    <form action="{{ route('update-user', $data_user->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="name" value="{{ $data_user->name }}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ $data_user->email }}">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label>creator</label>
            <select class="form-control" name="role">
                <option> Pilih Creator </option>
                <option @if ($data_user->role == 'admin') selected @endif value="admin">Admin</option>
                <option @if ($data_user->role == 'user') selected @endif value="user">User</option>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Simpan User</button>
        </div>
    </form>
@endsection
