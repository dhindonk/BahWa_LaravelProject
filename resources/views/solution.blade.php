<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solusi Tugas | Bahwa</title>
    <link rel="shortcut icon" href="{{asset('img/black.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/solution.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <!-- AOS     -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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
            <li><a href="#fc">Fakultas</a></li>
            <li><a href="#mtr">Mentor Terbaik</a></li>
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

<!--  -->
<div class="co content1">
    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="{{asset('assets/bnr2.png')}}">
            </div>
            <div class="item">
                <img src="{{asset('assets/bnr3.png')}}">
            </div>
            <div class="item">
                <img src="{{asset('assets/bnr1.png')}}">
            </div>
            <div class="item">
                <img src="{{asset('assets/bnr4.png')}}">
            </div>
            <div class="item">
                <img src="{{asset('assets/bnr5.png')}}">
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <hr id="garisH">

    <div class="titleFaculty">
        <h2>Pilih Sesuai Fakultasmu &#10024</h2>
    </div>
    <div class="tabs" id="fc">
        <div class="tabs-header">
            <div class="active"><h3>FH</h3></div>
            <div><h3>FEB</h3></div>
            <div><h3>FKIP</h3></div>
            <div><h3>FISIB</h3></div>
            <div><h3>FT</h3></div>
            <div><h3>FMIPA</h3></div>
            <div><h3>Pascasarjana</h3></div>
            <div><h3>Vokasi</h3></div>
        </div>
        <div class="tabs-body">
            <div class="active">
                <section class="bodyProdi">
                    <a href="#">
                        <section class="cardProdi hukum">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi <br> Hukum</h2></section>
                        </section>
                    </a>
                </section>
            </div>
            <div>
                <section class="bodyProdi">
                    <a href="#">
                        <section class="cardProdi feb">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi <br> Akuntansi</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi feb">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi <br> Manajemen</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi feb">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi <br> Bisnis Digital</h2></section>
                        </section>
                    </a>
                </section>
            </div>
            <div>
                <section class="bodyProdi">
                    <a href="#">
                        <section class="cardProdi fkip">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Pendidikan Bahasa <br> & Sastra Indonesia</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi fkip">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Pendidikan Bahasa Inggris</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi fkip">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi <br> Biologi</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi fkip">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi <br> IPA</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi fkip">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi <br> PGSD</h2></section>
                        </section>
                    </a>
                </section>
            </div>
            <div>
                <section class="bodyProdi">
                    <a href="#">
                        <section class="cardProdi fisib">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi <br> Sastra Inggris</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi fisib">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi <br> Sastra Indonesia</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi fisib">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi <br> Ilmu Komunikasi</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi fisib">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi <br> Sastra Jepang</h2></section>
                        </section>
                    </a>
                </section>
            </div>
            <div>
                <section class="bodyProdi">
                    <a href="#">
                        <section class="cardProdi teknik">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Teknik<br>Geodesi</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi teknik">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Teknik<br>Sipil</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi teknik">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Teknik<br>Elektro</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi teknik">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Teknik<br>Geologi</h2></section>
                        </section>
                    </a>
                </section>
            </div>
            <div>
                <section class="bodyProdi">
                    <a href="#">
                        <section class="cardProdi mipa">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi<br> Biologi</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi mipa">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi<br> Kimia</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi mipa">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi<br> Matematika</h2></section>
                        </section>
                    </a>
                    <a href="{{route('ilkom')}}">
                        <section class="cardProdi mipa">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi<br> Ilmu Komputer</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi mipa">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi<br> Farmasi</h2></section>
                        </section>
                    </a>
                </section>
            </div>
            <div>
                <section class="bodyProdi">
                    <a href="#">
                        <section class="cardProdi pascasarjana">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi <br> Ilmu Hukum ( S-2 )</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi pascasarjana">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi <br> Manajemen ( S-2 )</h2></section>
                        </section>
                    </a>
                </section>
            </div>
            <div>
                <section class="bodyProdi">
                    <a href="#">
                        <section class="cardProdi vokasi">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi <br> Akuntansi</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi vokasi">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi <br> Teknologi Komputer</h2></section>
                        </section>
                    </a>
                    <a href="#">
                        <section class="cardProdi vokasi">
                            <section class="logoBxUniv">
                                <img src="{{asset('assets/Unpak.png')}}">
                            </section>
                            <section class="judulProdi"><h2>Program Studi <br> Sistem Informasi</h2></section>
                        </section>
                    </a>
                </section>
            </div>
        </div>
    </div>
</div>

<!--  -->
<div class="boxCenter">
    <h1>di temani para mentor kece <span>&#128526;</span></h1>
</div>

<!--  -->
<div class="co content2" id="mtr">

    <div class="bodyAllMentor">
        <div class="bodyMentor" data-aos="fade-up-right" data-aos-duration="500">
            <div class="imgMentor">
                <img src="{{asset('assets/object1.png')}}">
            </div>
            <div class="cardMentor">
                <div class="boxName">
                    <h3>Prof. M. Fahdin, M.Kom<br><span>Master Teacher Tech.</span></h3>
                </div>
                <div class="boxExperience">
                    <p>Pengalaman dan Prestasi</p>
                    <ul>
                        <li>&#9989; Juara 1 Lomba Makan Kerupuk</li>
                        <li>&#9989; Juara 4 Lomba Tarik Tambang</li>
                        <li>&#9989; Master Sains di Unpak</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bodyMentor" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
            <div class="imgMentor adam">
                <img src="{{asset('assets/object2.png')}}">
            </div>
            <div class="cardMentor">
                <div class="boxName">
                    <h3>Dr. Adam Zakaria, S.Pd<br><span>Master Teacher Language</span></h3>
                </div>
                <div class="boxExperience">
                    <p>Pengalaman dan Prestasi</p>
                    <ul>
                        <li>&#9989; Menguasai 100 Bahasa di Dunia</li>
                        <li>&#9989; Mampu Berbicara dengan Kera</li>
                        <li>&#9989; Juara 3 Lari di atas Sungai</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bodyMentor" data-aos="fade-up-left" data-aos-duration="500" data-aos-delay="600">
            <div class="imgMentor bul">
                <img src="{{asset('assets/object3.png')}}">
            </div>
            <div class="cardMentor">
                <div class="boxName">
                    <h3>Ir. M. Raihan 4D<br><span>Master Teacher Sejarah</span></h3>
                </div>
                <div class="boxExperience">
                    <p>Pengalaman dan Prestasi</p>
                    <ul>
                        <li>&#9989; Sejarawan pada abad ke-18</li>
                        <li>&#9989; Juara 1 membuat mesin waktu</li>
                        <li>&#9989; Ikut serta pada Perang Salib</li>
                    </ul>
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
            style="overflow:hidden;enable-background:new 0 0 3841 108.5;"
            xml:space="preserve">
        <defs>
        </defs>
        <path style="fill: #0B2239 ; stroke-miterlimit:10;" d="M3360.5,97.739c-242,0-480-48.375-480-48.375
            S2647.5,0.5,2400.5,0.5s-480,48.375-480,48.375s-238,48.864-480,48.864s-480-48.375-480-48.375S727.5,0.5,480.5,0.5
            S0.5,48.875,0.5,48.875V108h1920h1920V48.875C3840.5,48.875,3602.5,97.739,3360.5,97.739z"/>
    </svg>
</div>
<div class="wave2">
    <svg
            x="0px"
            y="0px"
            viewBox="0 0 3841 108.5"
            style="overflow:hidden;enable-background:new 0 0 3841 108.5;"
            xml:space="preserve">
        <defs>
        </defs>
        <path style="fill: #0b2239b5 ; stroke-miterlimit:10;" d="M3360.5,97.739c-242,0-480-48.375-480-48.375
            S2647.5,0.5,2400.5,0.5s-480,48.375-480,48.375s-238,48.864-480,48.864s-480-48.375-480-48.375S727.5,0.5,480.5,0.5
            S0.5,48.875,0.5,48.875V108h1920h1920V48.875C3840.5,48.875,3602.5,97.739,3360.5,97.739z"/>
    </svg>
</div>
<div class="wave3">
    <svg
            x="0px"
            y="0px"
            viewBox="0 0 3841 108.5"
            style="overflow:hidden;enable-background:new 0 0 3841 108.5;"
            xml:space="preserve">
        <defs>
        </defs>
        <path style="fill: #0b223949 ; stroke-miterlimit:10;" d="M3360.5,97.739c-242,0-480-48.375-480-48.375
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
    <!-- Rive -->
    <script src="https://unpkg.com/@rive-app/canvas@1.0.102"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init();

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

    // Carrosel
    let slider = document.querySelector('.slider .list');
    let items = document.querySelectorAll('.slider .list .item');
    let next = document.getElementById('next');
    let prev = document.getElementById('prev');
    let dots = document.querySelectorAll('.slider .dots li');

    let lengthItems = items.length - 1;
    let active = 0;
    next.onclick = function(){
        active = active + 1 <= lengthItems ? active + 1 : 0;
        reloadSlider();
    }
    prev.onclick = function(){
        active = active - 1 >= 0 ? active - 1 : lengthItems;
        reloadSlider();
    }
    let refreshInterval = setInterval(()=> {next.click()}, 8000);
    function reloadSlider(){
        slider.style.left = -items[active].offsetLeft + 'px';
        //
        let last_active_dot = document.querySelector('.slider .dots li.active');
        last_active_dot.classList.remove('active');
        dots[active].classList.add('active');

        clearInterval(refreshInterval);
        refreshInterval = setInterval(()=> {next.click()}, 8000);
    }
    dots.forEach((li, key) => {
        li.addEventListener('click', ()=>{
            active = key;
            reloadSlider();
        })
    })
    window.onresize = function(event) {
        reloadSlider();
    };

    // category-faculty
    let tabHeader = document.getElementsByClassName("tabs-header")[0];
        let tabIndicator = document.getElementsByClassName("tabs-indicator")[0];
        let tabBody = document.getElementsByClassName("tabs-body")[0];

        let tabsPane = tabHeader.getElementsByTagName("div");

        for (let i=0; i<tabsPane.length; i++){

            tabsPane[i].addEventListener("click",function(){
                tabHeader.getElementsByClassName("active")[0].classList.remove("active");
                tabsPane[i].classList.add("active");
                tabBody.getElementsByClassName("active")[0].classList.remove("active");
                tabBody.getElementsByTagName("div")[i].classList.add("active");

            });
        };

        // Rive
        const r = new rive.Rive({
            src: "warning.riv",
            // src: 'v.riv',
            canvas: document.querySelector("#warning"),

            autoplay: true,
        });
    </script>
</body>
</html>
