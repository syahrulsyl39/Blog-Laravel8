@extends('asset.home')
@section('judul', 'Tambah Penulis')
@section('contein')


    <form action="{{ route('data-penulis') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>penulis</label>
            <input type="text" class="form-control" name="penulis">
        </div>

        <div class="form-group">
            <label>biografi</label>
            <textarea class="form-control" name="biografi" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label>jabatan</label>
            <input type="text" class="form-control" name="jabatan">
        </div>


        <div class="form-group">
            <label>Gambar</label>
            <input type="file" class="form-control" name="gambar" id="gambar">
        </div>


        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Simpan penulis</button>
        </div>
    </form>
@endsection
