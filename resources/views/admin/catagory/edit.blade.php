@extends('asset.home')
@section('judul', 'Edit Category')
@section('contein')
    <form action="{{ route('up-category', $category->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Category</label>
            <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama"
                value="{{ $category->nama }}">
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
