<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/res/css/dashboard-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Home</title>
</head>
<body>
    <div class="container top-nav">
        <div class="col-icon">
            <div class="icon" onclick="menuON()">
                <img src="/res/image/icon-x.png" alt="">
            </div>
            <div class="btn-profile" id="profile-menu">
                <a href="#"><i class="fa-solid fa-user-pen"></i> Edit Token</a>
                <div class="spacer"></div>
                <a href="/logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
            </div>
        </div>
        <div class="col-name">
            <div class="name">
                <h1>{{ $self->name }}</h1>
                <p>mata pelajaran : Matematika</p>
            </div>
        </div>
    </div>

    <div class="col-token">
        <p id='label'>Copy token anda <input value="{{ $self->guruTokens }}"onclick="OnCopy('token')" id="token" readonly></input></p>
    </div>

    <div class="col-field-menu">
         <div class="field-menu ">
            <div class="menu-col" onclick="OnOpen('menu-siswa')">
                <div class="menu-isi">
                    <div class="container">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <p>Lihat Siswa</p>
                </div>
            </div>
            <div class="menu-col" onclick="OnOpen('menu-public')">
                <div class="menu-isi">
                    <div class="container">
                        <i class="fa-solid fa-earth-americas"></i>
                    </div>
                    <p>User public</p>
                </div>
            </div>
         </div>
    </div>

    <div class="menu-siswa hidden" id="menu-siswa">
        <div class="menu-siswa-col">
            <div class="container-field">
                <!-- Lopping Field -->
                @foreach ($siswa as $Siswa)

                <div class="siswa">
                    <p class="nama">
                        {{ $Siswa->name }}
                    </p>
                    <p class="scor  @if ($Siswa->score <= 60)red-score @endif">
                        {{ $Siswa->score }}
                    </p>
                    <p class="kelulusan">
                        @if ($Siswa->score <= 60)
                            Gagal
                        @else
                            Lulus
                        @endif
                    </p>
                </div>

                @endforeach
            </div>
           <div class="container-close">
            <a href="#!" onclick="OnClose('menu-siswa')" class="btn-close">Close</a>
           </div>
        </div>
    </div>


    <div class="menu-siswa hidden" id="menu-public">
        <div class="menu-siswa-col">
            <div class="container-field">
                <!-- Lopping Field -->
                @foreach ($public as $Public)

                <div class="siswa">
                    <p class="nama">
                        {{ $Public->name }}
                    </p>
                    <p class="scor  @if ($Public->score <= 60)red-score @endif">
                        {{ $Public->score }}
                    </p>
                    <p class="kelulusan">
                        @if ($Public->score <= 60)
                            Gagal
                        @else
                            Lulus
                        @endif
                    </p>
                </div>

                @endforeach
                <!-- End -->
            </div>
           <div class="container-close">
            <a href="#!" onclick="OnClose('menu-public')" class="btn-close">Close</a>
           </div>
        </div>
    </div>


    <script>
        profile = "Off"

        function OnOpen(distID){
            document.getElementById(distID).classList.remove('hidden');
        }
        
        function OnClose(distID){
            document.getElementById(distID).classList.add('hidden');
        }

        function OnCopy(distID){
            value = document.getElementById(distID).value;
            document.getElementById('label').innerHTML = "Token Telah di Copy" + "<input value='{{ $self->guruTokens }}' readonly></input>"
            
            navigator.clipboard.writeText(value);
        }
        function menuOff(){
            
            profile = "Off"
            document.getElementById('profile-menu').classList.remove('profile-on')
        }

        function menuON(){
            if (profile == "Off"){
                document.getElementById('profile-menu').classList.add('profile-on');
            profile = "On"
            }else{
                menuOff()
            }
        }
    </script>
</body>
</html>
