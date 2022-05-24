@extends('asset.home')
@section('judul', 'Tambah Category')
@section('contein')


    <form action="{{ route('simpan-category') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Category</label>
            <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama">

            @error('nama')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Simpan Category</button>
        </div>
    </form>
@endsection
