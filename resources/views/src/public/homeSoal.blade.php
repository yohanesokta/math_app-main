@extends('src.components.navbar')

@section('import')
    <link rel="stylesheet" href="/res/css/public/home-soal.css">
@endsection

@section('field')
    <div class="col-vid" id='col-vid'>
    </div>
    <div class="col-desc">
        <h1>{{ $data->response->data[0]->nama }}</h1>
        <p>{{ $data->response->data[0]->token }} | Owner : {{ $data->response->data[0]->owner }}</p>
    </div>
    <div class="col-isi">
        <div class="field-isi">
            @foreach ($data->response->data[0]->Soal as $soal)
                <a @if ($soal->type !== 'soal') \
                    href="/public/materi?id={{ $soal->id }}"
                    @else
                    href="/public/soal?id={{ $soal->id }}" @endif
                    class="isi @if ($soal->type == 'soal') soal @endif">
                    <p>{{ $soal->name }}</p>
                    <i class="fa-solid fa-circle-play"></i>
                </a>
            @endforeach
        </div>
    </div>
    <script>
        function getId(url) {
            const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
            const match = url.match(regExp);

            return (match && match[2].length === 11) ?
                match[2] :
                null;
        }

        const videoId = getId('{{ $data->response->data[0]->link }}');
        const iframeMarkup = '<iframe width="100%" height="250px" src="//www.youtube.com/embed/' +
            videoId + '" frameborder="0" allowfullscreen></iframe>';
        console.log(iframeMarkup)
        document.getElementById('col-vid').innerHTML = iframeMarkup
    </script>
@endsection
