@extends('src.components.navbar')

@section('import')
    <link rel="stylesheet" href="/res/css/public/home-soal.css">
@endsection

@section('field')
    <div class="col-vid">
        <iframe src="https://www.youtube.com/embed/GUV4D1hJKrA?autoplay=1" frameborder="0" width="100%"
            height="250px"></iframe>
    </div>
    <div class="col-desc">
        <h1>Judul Soal</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, beatae.</p>
    </div>
    <div class="col-isi">
        <div class="field-isi">
            <a href="#" class="isi">
                <p>Nama Item</p>
                <i class="fa-solid fa-circle-play"></i>
            </a>
            <a href="#" class="isi soal">
                <p>Nama Soal</p>
                <i class="fa-solid fa-circle-play"></i>
            </a>
        </div>
    </div>
@endsection
