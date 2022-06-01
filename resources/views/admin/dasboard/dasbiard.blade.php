@extends('asset.home')
@section('judul', 'Dasboard')
@section('contein')

    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">

                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah Post</h4>
                    </div>
                    <div class="card-body">
                        {{ $tampil_posts }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">

                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah category</h4>
                    </div>
                    <div class="card-body">
                        {{ $tampil_category }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">

                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah tags</h4>
                    </div>
                    <div class="card-body">
                        {{ $tampil_tags }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">

                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah user</h4>
                    </div>
                    <div class="card-body">
                        {{ $tampil_user }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">

                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah pesan</h4>
                    </div>
                    <div class="card-body">
                        {{ $tampil_pesan }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">

                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah penulis</h4>
                    </div>
                    <div class="card-body">
                        {{ $tampil_penulis }}
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
