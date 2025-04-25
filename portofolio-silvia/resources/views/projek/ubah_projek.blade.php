@extends('templating.master')

@section('judul_halaman', 'Ubah Data Projek | My Portfolio')

@section('konten')
    <div class="container text-capitalize">
        <h1 class="mt-4">ubah data pembeli</h1>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/beranda_admin">dasboard</a></li>
                <li class="breadcrumb-item"><a href="/data_projek">data projek</a></li>
                <li class="breadcrumb-item active" aria-current="page">ubah data projek</li>
            </ol>
        </nav>

        <div class="card mb-4">
            <div class="card-header bg-primary text-light">
                <i class="fas fa-table me-1"></i>
                ubah daftar data projek
            </div>
            <div class="card-body text-capitalize">
            <form action="{{ route('name_edit_projek', $projek->id_projek) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if($projek->gambar)
                    <div class="mb-3">
                        <img src="{{ asset('image_projek/' . $projek->gambar) }}" alt="Gambar Projek" width="150">
                    </div>
                @endif
                <div class="mb-4 row">
                    <label for="gambar" class="col-sm-2 col-form-label">gambar projek</label>
                    <div class="col-sm-10">
                        <input name="gambar" class="form-control" type="file" id="gambar" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="judul" class="col-sm-2 col-form-label">judul Projek</label>
                    <div class="col-sm-10">
                        <input name="judul" value="{{$projek->judul}}" class="form-control" type="text" placeholder="Masukkan judul" id="judul" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi projek</label>
                    <div class="col-sm-10">
                        <input name="deskripsi" value="{{$projek->deskripsi}}" class="form-control" type="text" placeholder="Masukkan deskripsi projek" id="deskripsi" aria-label=".form-control-lg example">
                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="url" class="col-sm-2 col-form-label">URL Demo </label>
                    <div class="col-sm-10">
                        <input name="demo_url" value="{{$projek->demo_url}}" class="form-control" type="url" placeholder="Masukkan URL demo (jika ada)" id="url" aria-label=".form-control-lg example">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>

            </div>
        </div>
    </div>
    
@endsection
