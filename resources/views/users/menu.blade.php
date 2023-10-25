<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/res/css/user/pembuka-style.css">
    <link rel="stylesheet" href="/res/css/user/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container-materi" id="materi1">
        <h1 class="header-menu">
            Pilihan
        </h1>
        <div class="container-menu">
            <div class="menu" onclick="goTo('/home')">
                <div class="isi-menu">
                    <i class="fa-solid fa-graduation-cap yellow"></i>
                    <p>Materi</p>
                </div>
            </div>
            <div class="menu" onclick="goTo('/home/goQuiz')">
                <div class="isi-menu" style="width: 140px">
                    <i class="fa-solid fa-clipboard-question green"></i>
                    <p>Quiz</p>
                </div>
            </div>
        </div>

    <div class="logout-col">
        <a href="/logout">
            <i class="fa-solid fa-right-from-bracket"></i>
        </a>
    </div>
    <script>
        function goTo(url){
            window.location.href = url
        }
    </script>
</body>
</html>
