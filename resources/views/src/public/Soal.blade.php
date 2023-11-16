@extends('src.components.navbar')

@section('import')
    <link rel="stylesheet" href="/res/css/public/soal.css">
@endsection

@section('field')
    <img class="bg-image" src="/res/image/soal-bg.png" alt="">
    <div class="container">
        <div class="field-soal ">
            <p>{{ $data->isi }}</p>
        </div>
    </div>
    <div class="container">
        <div class="field-jawaban">
            <div class="jawaban">
                <div class="jawab">{{ $data->ans1 }}</div>
                <div class="jawab">{{ $data->ans2 }}</div>
                <div class="jawab">{{ $data->ans3 }}</div>
                <div class="jawab">{{ $data->ans4 }}</div>
            </div>
        </div>
    </div>
@endsection
