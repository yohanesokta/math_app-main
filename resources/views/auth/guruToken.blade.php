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
<style>
    .tokens-p{
        margin-top: 30px;
        padding: 10px 20px;
        background-color: rgba(255, 255, 255, .2);
        color:white;
        border-radius: 0 10px 10px 10px;
        text-align:center;
        font-size: 14px;
        position: relative;
}
.icon-token-p{
    content: "<i class="fa-solid fa-circle-exclamation"></i>";
    width: 20px;
    height: 20px;
    position: absolute;
    font-size: 20px;
    top:-5px;
    left: -5px;
    border-radius: 50%;
    }
form input{
    font-weight: 500;
    color: white;
}
</style>
<body>
    <div class="container">
        <div class="container-login">
            <div class="login-label">
                <p>Token Guru</p>
            </div>
            <div class="container-form-login">
                <form action="/auth/token/validation" method="POST">
                    @csrf
                    <p class="tokens-p"><i class="fa-solid fa-circle-exclamation icon-token-p"></i>Pakai token yang diberikan guru kalian atau pakai secara public</p>
                    <input type="text" name="token" placeholder="masukkan token" required oninput="this.value = this.value.toUpperCase()">
                    <label for="name"><i class="fa-solid fa-lock"></i></label>
                    <div class="container2">
                        <button type="submit">Gunakan Token</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if ($info ?? false)
    <div class="info @if($infoType == 'message') infomessage @endif">
        <p>{{ $infoMessage ?? 'error validation' }}</p>
     </div>
    @endif

     @error('email')
        <div class="info">
            <p>Email tidak valid</p>
        </div>
     @enderror

     @error('name')
        <div class="info">
            <p>username digunakan</p>
        </div>
     @enderror
     @if (session()->has('err'))
        <div class="info">
            <p>{{session('err')}}</p>
        </div>
    @endif

        <script>
            const btnPublic = document.getElementById('buttonPublic');
            btnPublic.addEventListener("click", public_func);

            function public_func(event){
                event.preventDefault();
                window.location.href='/auth/publictoken';
            }
        </script>
</body>
</html>
