<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/res/css/user/pembuka-style.css">
    <link rel="stylesheet" href="/res/css/user/quiz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container-materi" id="materi1">




        <div class="container-soal " id="soal01">
            <div class="isi-soal">
                <p>Yohanes memiliki <span>2 sepatu 3 baju dan 5 celana</span> , jika yohanes ingin memakai lengkap pasangan sepasang sepatu 1 celana dan 1 baju , pasangan berbeda yang yohanes punya adalah</p>
            </div>
            <div class="isi-jawaban">
                <div class="jwb" id="jwb1" onclick="Answer('soal01','jwb1','soal02',0)">
                    <p>1. 20</p>
                </div>
                <div class="jwb" id="jwb2" onclick="Answer('soal01','jwb2','soal02',1)">
                    <p>2. 30</p>
                </div>
                <div class="jwb" id="jwb3" onclick="Answer('soal01','jwb3','soal02',0)">
                    <p>3. 35</p>
                </div>
                <div class="jwb" id="jwb4" onclick="Answer('soal01','jwb4','soal02',0)">
                    <p>4. 10</p>
                </div>
            </div>
        </div>


        <div class="container-soal hidden" id="soal02">
            <div class="isi-soal">
                <p>Terdapat enam angka <span>1, 3, 4, 5, 7, 8 </span>yang akan disusun menjadi bilangan yang terdiri dari 3 angka. Banyak bilangan ganjil yang dapat disusun dari angka-angka tersebut adalah</p>
            </div>
            <div class="isi-jawaban">
                <div class="jwb" id="jwb5" onclick="Answer('soal02','jwb5','finishCol',1)">
                    <p>A. 144</p>
                </div>
                <div class="jwb" id="jwb6" onclick="Answer('soal02','jwb6','finishCol',0)">
                    <p>B. 3360</p>
                </div>
                <div class="jwb" id="jwb7" onclick="Answer('soal02','jwb7','finishCol',0)">
                    <p>C. 80</p>
                </div>
                <div class="jwb" id="jwb8" onclick="Answer('soal02','jwb8','finishCol',0)">
                    <p>D. 440</p>
                </div>
            </div>
        </div>

        <div class="container-score hidden" id="finishCol">
            <p>Quiz Selesai, Dan Score Mu</p>
            <div class="score">
                <p id='scoreNum'>0</p>
            </div>
            <form method="GET" action="/Score"  class="container">
                <input type="hidden" value="0" name="score" id="next">
                <button type="submit"class="btn-finish">Finish</a>
            </div>
        </div>

    </div>



    <div class="logout-col">
        <a href="/logout">
            <i class="fa-solid fa-right-from-bracket"></i>
        </a>
    </div>
    <script src="/javascript/main-quiz.js"></script>
</body>
</html>
