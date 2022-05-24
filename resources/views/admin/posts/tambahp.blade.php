@extends('asset.home')
@section('judul', 'Tambah Posts')
@section('contein')


    <form action="" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul">

            @error('judul')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category_id" id="category_id">
                <option value=""> -- Pilih Category -- </option>
                @foreach ($category as $result)
                    <option value="{{ $result->id }}">{{ $result->nama }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label>tags</label>
            <select class="form-control h-100" multiple="multiple" name="tagss[]">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control  @error('content') is-invalid @enderror" name="content" id="content"></textarea>
            @error('content')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label>Gambar</label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar">
            @error('gambar')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Simpan posts</button>
        </div>
    </form>
@endsection
