@extends('asset.home')
@section('judul', 'Edit Tags')
@section('contein')
    <form action="{{ route('update-tags', $tags->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Category</label>
            <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name"
                value="{{ $tags->name }}">
            @error('name')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Simpan tags</button>
        </div>
    </form>
@endsection
