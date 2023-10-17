<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/res/css/login/style.css">
    <link rel="stylesheet" href="/res/css/login/sign-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="container-login">
            <div class="login-label">
                <p>Sign</p>
            </div>
            <div class="container-form-login">
                <form action="#" method="GET">
                    @csrf
                    <input type="text" name="usrEmail" placeholder="email" required>
                    <label for="usrName"><i class="fa-solid fa-envelope"></i></label>
                    <input type="password" name="usrPW" placeholder="password" required>
                    <label for="usrName"><i class="fa-solid fa-lock"></i></label>
                    <input type="password" name="usrPW2" placeholder="confirm password" required>
                    <label for="usrName"><i class="fa-solid fa-lock"></i></label>
                    <div class="container2">
                    <a href="/login">sudah punya? Login</a>
                    </div>
                    <div class="container2">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
