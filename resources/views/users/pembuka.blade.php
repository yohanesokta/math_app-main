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
                    <P>Peluang atau Probabilatas itu ngka yang menunjukkan seberapa besar kemungkinan akan terjadi</P>
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
            <h1>Gimana tuh?</h1>
            <div class="container">
                <div class="sec2">
                    <P>Contohnya sesimpel melempar dadu!</P>
                </div>
            </div>
            <div class="container">
                <div class="sec3">
                    <P>apakah kamu bisa memastikan nilai mata dadu yang muncul setelah dilemparkan? Tentu tidak, ya</P>
                </div>
            </div>
            <div class="container">
                <div class="next-icon">
                    <a href="#!" onclick="goto('materi2','materi1')"><i class="fa-solid fa-circle-chevron-left"></i></a>
                    <a href="#!" onclick="goto('materi2','materi3')"><i class="fa-solid fa-circle-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-materi hidden" id="materi3">
        <div class="materi-col">
            <div class="icon-materi">
                <div class="icon"></div>
            </div>
            <h1>Jadi</h1>
            <div class="container">
                <div class="sec2">
                    <P>apa kesimpulanya ?</P>
                </div>
            </div>
            <div class="container">
                <div class="sec3">
                    <P>Tiga hal yang harus kamu ketahui untuk menentukan peluang, yaitu percobaan, ruang sampel, dan kejadian.</P>
                </div>
            </div>
            <div class="container">
                <div class="next-icon">
                    <a href="#!" onclick="goto('materi3','materi2')"><i class="fa-solid fa-circle-chevron-left"></i></a>
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
