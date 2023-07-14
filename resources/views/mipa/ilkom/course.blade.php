<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Course | Bahwa</title>
    <link rel="shortcut icon" href="{{asset('img/black.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/course.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <div class="warningMobile">
        <h3>VERSI MOBILE BELUM TERSEDIA <span>😇</span></h3>
        <p>Mohon untuk membukanya menggunakan desktop</p>
        {{-- <canvas id="warning" width="500" height="500"></canvas> --}}
        <img src="{{asset('assets/mario.gif')}}" >

    </div>
    <section class="wrappers">
        <div class="logoBx"></div>
    <div id="scrolStyle"></div>
    <div id="bgScroll"></div>
    <header>
        <nav class="navbar">
        <a href="#" class="brand">
            <!-- Brand White -->
            <img src="{{asset('img/white.svg')}}" alt="" id="whit">
            <!-- Brand Text -->
            <span>Bantu<span>Mahasiswa</span><span id="blink">|</span></span>
        </a>
        <ul>
            <li><a href="{{ route ('home')}}">Home</a></li>
            <li><a href="{{route('solution')}}">Fakultas</a></li>
            <li><a href="{{route('about')}}">About Us</a></li>
        </ul>
        <div class="box">
            <input type="text" placeholder="Search...">
            <a href="#"><i class="ri-search-2-line"></i></a>
        </div>
        <div class="user">
            <li><div class="userA"><i class="ri-user-line"></i></div></li>
        </div>
        <div class="menuUser">
            <div class="menuU">
                <li><a href="#"><ion-icon name="person-outline"></ion-icon><span>{{ Auth::user()->name }}</span></a></li>
                <li><a href="#co1"><ion-icon name="chatbubble-outline"></ion-icon><span>Chat</span></a></li>
                <li><a href="#co2"><ion-icon name="notifications-outline"></ion-icon><span>Notification</span></a></li>
                <li><a href="#co3"><ion-icon name="settings-outline"></ion-icon><span>Setting</span></a></li>
                <li>
                <form action="{{ route('logout') }}" method="POST" >
                    @csrf
                    @method('DELETE')
                    {{-- <a href="#"></a> --}}
                    <button class="logut" type="submit"><ion-icon name="log-out-outline"></ion-icon><span>Logout</span></button>
                </form>
                </li>
            </div>
        </div>
        </nav>
    </header>

    <div class="container">
        <div class="toggleBar">
            <i class="ri-bar-chart-horizontal-line"></i>
        </div>
        <div class="sidebar">
            @foreach ($ilkom->reverse() as $materi)
            <div class="listBoxIsi">
                <div class="titleListBox">
                    <i class="ri-folder-line"></i>
                    <span>{{$materi->title}}</span>
                </div>
                    <div class="contentListBox m0 m0-active">
                        <i class="ri-live-line"></i>
                        <span>{!! $materi->content !!}</span>
                        <video src="{{ asset('/storage/posts/'.$materi->video) }}" onclick="change(this.src)"></video>
                        {{-- <video src="{{$materi->}}" onclick="change(this.src)"></video> --}}
                    </div>
            </div>
            @endforeach
        </div>
        <div class="videoBox">
            <div class="videoPlay">
                <video src="{{ asset('/storage/posts/'.$materi->video) }}" controls id="videoProducts"></video>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/6538fc8aae.js" crossorigin="anonymous"></script>

    <script>
    // Scroll Style
    let progress = document.querySelector('#scrolStyle');
        let totalH = document.body.scrollHeight - window.innerHeight;
        window.onscroll = function(){
            let progresH = (window.pageYOffset / totalH) * 100;
            progress.style.height = progresH + "%";
        }

    // Navbar ShowHide
    var lastScrollTop = 0;
        navbar = document.querySelector(".navbar");
    window.addEventListener("scroll", function(){
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if(scrollTop > lastScrollTop){
            navbar.style.top="-80px";
        }else{
            navbar.style.top="0";
        }
        lastScrollTop = scrollTop;
    })

    // profile nav
    let profileUser = document.querySelector('.userA');
        let menuUser = document.querySelector('.menuUser');
        profileUser.onclick = function () {
            menuUser.classList.toggle('active');
            profileUser.classList.toggle('active');
        };

    // VideoBoxProduct
    const change = src => {
    document.getElementById('videoProducts').src = src
    };
    let m0 = document.querySelector('.m0');
    let m1 = document.querySelector('.m1');
    let m2 = document.querySelector('.m2');
    let m3 = document.querySelector('.m3');
    let m4 = document.querySelector('.m4');
    let m5 = document.querySelector('.m5');
    let m6 = document.querySelector('.m6');
    let m7 = document.querySelector('.m7');
    let m8 = document.querySelector('.m8');
    let m9 = document.querySelector('.m9');
    let m10 = document.querySelector('.m10');


    m0.onclick = function () {
        m0.classList.toggle('m0-active');
    }
    m1.onclick = function () {
        m1.classList.toggle('m1-active');
    }
    m2.onclick = function () {
        m2.classList.toggle('m2-active');
    }
    m3.onclick = function () {
        m3.classList.toggle('m3-active');
    }
    m4.onclick = function () {
        m4.classList.toggle('m4-active');
    }
    m5.onclick = function () {
        m5.classList.toggle('m5-active');
    }
    m6.onclick = function () {
        m6.classList.toggle('m6-active');
    }
    m7.onclick = function () {
        m7.classList.toggle('m7-active');
    }
    m8.onclick = function () {
        m8.classList.toggle('m8-active');
    }
    m9.onclick = function () {
        m9.classList.toggle('m9-active');
    }
    m10.onclick = function () {
        m10.classList.toggle('m10-active');
    }

    // sidebar
    let slider = document.querySelector('.sidebar');
    let toogleBar = document.querySelector('.toggleBar');
    let videoBox = document.querySelector('.videoBox');
    toogleBar.onclick = function() {
        slider.classList.toggle('side-active');
        toogleBar.classList.toggle('toggle-active');
        videoBox.classList.toggle('video-active');
    };


    </script>
</body>
</html>
