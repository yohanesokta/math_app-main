<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/res/css/user/pembuka-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container-materi" id="materi1">
        <div class="materi-col">
            <div class="icon-materi">
                <div class="icon"></div>
            </div>
            <h1>Hey</h1>
            <div class="container">
                <div class="sec2">
                    <P>apa kamu pernah mendengar peluang kejadian ?</P>
                </div>
            </div>
            <div class="container">
                <div class="sec3">
                    <P>Percobaan adalah suatu kegiatan yang menghasilkan nilai suatu peluang</P>
                </div>
            </div>
            <div class="container">
                <div class="next-icon">
                    <a href="#!"><i class="fa-solid fa-circle-chevron-left none-icon"></i></a>
                    <a href="#!" onclick="goto('materi1','materi2')"><i class="fa-solid fa-circle-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>


    <div class="container-materi hidden" id="materi2">
        <div class="materi-col">
            <div class="icon-materi">
                <div class="icon"></div>
            </div>
            <h1>-</h1>
            <div class="container">
                <div class="sec2">
                    <P>Dan Apa itu Peluang?</P>
                </div>
            </div>
            <div class="container">
                <div class="sec3">
                    <P>Peluang adalah nilai (kuantitas) untuk menyatakan seberapa besar terjadinya suatu peristiwa</P>
                </div>
            </div>
            <div class="container">
                <div class="next-icon">
                    <a href="#!" onclick="goto('materi2','materi1')"><i class="fa-solid fa-circle-chevron-left"></i></a>
                    <a href="/home/video"><i class="fa-solid fa-circle-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="logout-col">
        <a href="/logout">
            <i class="fa-solid fa-right-from-bracket"></i>
        </a>
    </div>
    <script src="/javascript/main-pembelajaran.js"></script>
</body>
</html>
