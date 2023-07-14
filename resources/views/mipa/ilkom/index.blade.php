<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ilmu Komputer | Bahwa</title>
    <link rel="stylesheet" href="{{asset('css/ilkom.css')}}">
    <link rel="shortcut icon" href="{{asset('img/black.svg')}}" type="image/x-icon">
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

    <div class="container one">
        <div class="boxVideo">
            <iframe width="100%" height="99%" src="https://www.youtube.com/embed/NFL1Ou28u4Y" title="Graph" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="boxContent">
            <div class="titleBox">
                <i class="ri-information-line"></i>
                <span>Information</span>
            </div>
            <div class="lineH"></div>
            <div class="descBox">
                <span>
                Ada beberapa video pembelajaran yang kita sediakan disini yang berkaitan dengan program studi Ilmu Komputer <br>Mohon di simak dan di praktekkan agar maksimal hasil yang di dapatnya. untuk sementara kami menyediakan <strong>10 Video Pembelajaran</strong> yang bisa teman-teman pelajari dan akan terus di Update sesuai kebutuhan kalian. untuk lebih detailnya bisa di lihat pada <a href="#"> Daftar Isi.</a><br><br>Konsultasi bisa langsung Chat Mentor nya via Icon Chat<br><br>Terima Kasih.
                </span>
            </div>
        </div>
    </div>
    <div class="container two">
        <div class="listBox">
            <div class="titleList">
                <i class="ri-list-unordered"></i>
                <span>Daftar Isi</span>
            </div>
            <div class="lineH lineList"></div>
            <div class="boxList">
                @foreach ( $ilkom->reverse() as $materi )
                <div class="listBoxIsi">
                    <div class="titleListBox">
                        <i class="ri-folder-line"></i>
                        <span>{{$materi->title}}</span>
                    </div>
                        <div class="contentListBox">
                            <i class="ri-live-line"></i>
                            <span>{{ $materi->content }}</span>
                        </div>
                </div>
                @endforeach
                <div class="listBoxIsi">
                    <div class="titleListBox">
                        <i class="ri-folder-line"></i>
                        <span>judul</span>
                    </div>
                        <div class="contentListBox">
                            <i class="ri-live-line"></i>
                            <span>tessssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss</span>
                        </div>
                </div>
            </div>
        </div>
        <div class="mentorBox">
            <div class="titleBoxMentor">
                <i class="ri-edit-line"></i>
                <span>Mentor</span>
            </div>
            <div class="lineH lineMentor"></div>
            <div class="descBoxMentor">
                <div class="imgBoxMentor">
                    <img src="{{asset('assets/object3.png')}}">
                </div>
                <div class="descMentor">
                    <h2>Ir. M. Raihan 4D</h2>
                    <p>Full-Stack Developer, Content Creator and CO-Founder Bahwa.com</p>
                    <ul>
                        <li><i class="ri-facebook-circle-fill"></i></li>
                        <li><i class="ri-instagram-fill"></i></li>
                        <li><img src="{{asset('img/MiChat.svg')}}" alt="miChat"></li>
                        <li><i class="ri-twitter-fill"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container three">
        <div class="ulasanBox">
            <div class="titleUlasan">
                <i class="ri-group-line"></i>
                <span>Ulasan Pengunjung</span>
            </div>
            <div class="contentUlasan">
                <div class="ulasan">
                    <div class="rating">
                        <ul>
                            <li><i class="fa-solid fa-star" style="color: orange;"></i></li>
                            <li><i class="fa-solid fa-star" style="color: orange;"></i></li>
                            <li><i class="fa-solid fa-star" style="color: orange;"></i></li>
                            <li><i class="fa-solid fa-star" style="color: orange;"></i></li>
                            <li><i class="fa-solid fa-star" style="color: orange;"></i></li>
                            <li><i class="fa-solid fa-star" style="color: orange;"></i></li>
                        </ul>
                    </div>
                    <div class="desc">
                        <p>Wah keren parah tutor nya mas, sekarang saya bisa kerja di Google, sangat berjasa sekali. nanti kalau ketemu saya Teraktir deh..wkwk</p>
                    </div>
                    <div class="lineH lineUlasan"></div>
                    <div class="user">
                        <div class="imgBox">
                            <img src="{{asset('assets/Unpak.png')}}">
                        </div>
                        <span>Rafly Irsa Siregar</span>
                    </div>
                </div>

                <div class="ulasan">
                    <div class="rating">
                        <ul>
                            <li><i class="fa-solid fa-star" style="color: orange;"></i></li>
                            <li><i class="fa-solid fa-star" style="color: orange;"></i></li>
                            <li><i class="fa-solid fa-star" style="color: orange;"></i></li>
                            <li><i class="fa-solid fa-star" style="color: orange;"></i></li>
                            <li><i class="fa-solid fa-star" style="color: #ccc;"></i></li>
                            <li><i class="fa-solid fa-star" style="color: #cccccc;"></i></li>
                        </ul>
                    </div>
                    <div class="desc">
                        <p>Naisee pisan!!, tapi agak gimana ya, penjelasannya keren tapi gimana ya agak gimana gitu ga tau aku nya yang  jadi gimana gitu. Tapi overload baguss si tutornya sangat membantu bagi saya yang udah pro, jadi nostalgia waktu belajar dulu.. ditemenin mantan:v</p>
                    </div>
                    <div class="lineH lineUlasan"></div>
                    <div class="user">
                        <div class="imgBox">
                            <img src="{{asset('assets/user.jpg')}}">
                        </div>
                        <span>Agustian Sanubari</span>
                    </div>
                </div>

                <div class="ulasan">
                    <div class="rating">
                        <ul>
                            <li><i class="fa-solid fa-star" style="color: orange;"></i></li>
                            <li><i class="fa-solid fa-star" style="color: orange;"></i></li>
                            <li><i class="fa-solid fa-star" style="color: orange;"></i></li>
                            <li><i class="fa-solid fa-star" style="color: orange;"></i></li>
                            <li><i class="fa-solid fa-star" style="color: orange;"></i></li>
                            <li><i class="fa-solid fa-star" style="color: #ccc;"></i></li>
                        </ul>
                    </div>
                    <div class="desc">
                        <p>Awalnya saya coba-coba lama kelamaan ketagihan dan keterusan terus kecanduan 🤤... AHHH MAACIIIIIIIIII</p>
                    </div>
                    <div class="lineH lineUlasan"></div>
                    <div class="user">
                        <div class="imgBox">
                            <img src="{{asset('assets/keren.png')}}">
                        </div>
                        <span>Adam Soleh</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="wave">
        <svg
                x="0px"
                y="0px"
                viewBox="0 0 3841 108.5"
                style="overflow:scroll;enable-background:new 0 0 3841 108.5;"
                xml:space="preserve">
            <defs>
            </defs>
            <path style="fill: #0B2239; stroke-miterlimit:10;" d="M3360.5,97.739c-242,0-480-48.375-480-48.375
                S2647.5,0.5,2400.5,0.5s-480,48.375-480,48.375s-238,48.864-480,48.864s-480-48.375-480-48.375S727.5,0.5,480.5,0.5
                S0.5,48.875,0.5,48.875V108h1920h1920V48.875C3840.5,48.875,3602.5,97.739,3360.5,97.739z"/>
            </svg>
    </div>
    <!-- Footer -->
<footer>
    <div class="logo">
        <img src="{{asset('img/white.svg')}}">
        <p>Bah<span>wa</span></p>
    </div>
    <div class="container">
        <div class="sec aboutus">
            <h2>About Us</h2>
            <p>Harapannya Webiste ini dapat mengatasi keluhan mahasiswa yang belum sempat membagi waktu nya dengan kerjaan di perkuliahan </p>
        </div>
        <div class="sci">
            <ul class="soc">
                <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="sec product">
            <h2>Products</h2>
        </div>
        <div class="sci">
                <li><a href="#">Cooming Soon</a></li>
                <li><a href="#">Joki Tugas</a></li>
                <li><a href="#">Joki Skripsi</a></li>
                <li><a href="#">Joki Praktikum</a></li>
        </div>
    </div>
    <div class="container">
        <div class="sec services">
            <h2>Services</h2>
        </div>
        <div class="sci">
                <li><a href="#">How to purchase</a></li>
                <li><a href="#">Payment method</a></li>
                <li><a href="#">Refund</a></li>
                <li><a href="#">How it works</a></li>
        </div>
    </div>
</footer>
<div class="bottomFooter">Bahwa | Copyright 2023</div>

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

    </script>
    <!-- chatBot -->
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="c0161241-cad5-4c49-8b63-fb6945677eac";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</body>
</html>
