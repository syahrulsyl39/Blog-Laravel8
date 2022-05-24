@extends('asset.home')
@section('judul', 'Tambah Tags')
@section('contein')


    <form action="{{ route('simpan-tags') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Tags</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror " name="name">

            @error('name')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Simpan Tags</button>
        </div>
    </form>
@endsection
