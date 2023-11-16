@extends('src.components.navbar')

@section('import')
    <link rel="stylesheet" href="/res/css/public/materi.css">
@endsection
@section('field')
    <div class="col-all-item">
        <div class="image-source">
            <img src="{{ $data->images }}" alt="source image">
        </div>
    </div>
    <div class="col-all-item">
        <div class="text-field">
            <p>{{ $data->isi }}</p>
        </div>
    </div>
@endsection
