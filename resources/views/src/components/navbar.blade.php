<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        nav {
            z-index: 99;
            width: 100%;
            display: flex;
            height: 6vh;
            background-color: #EC8F5E;
            position: fixed;
            bottom: 0;
        }

        .col-nav {
            width: 60%;
            justify-content: space-between;
            margin: auto;
            display: flex;
        }

        .col-nav a {
            font-size: 18px;
            color: white;
            text-decoration: none;
        }

        .test {
            border: 1px solid red;
        }
    </style>
    @yield('import')
</head>

<body>
    @yield('field')

    <nav>
        <div class="col-nav">
            <a href="/auth/removetoken"><i class="fa-solid fa-house"></i></a>
            <a href="/public/home"><i class="fa-solid fa-bars"></i></a>
            <a href="/logout"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </nav>
</body>

</html>
