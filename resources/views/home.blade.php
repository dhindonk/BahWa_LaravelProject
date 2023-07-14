<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Bahwa</title>
    <link rel="stylesheet" href="/css/landing.css">
    <link rel="shortcut icon" href="img/black.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- AOS     -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body>
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
            <!-- Brand Black -->
            <img src="{{asset('img/black.svg')}}" id="blek">
            <!-- Brand White -->
            <img src="{{asset('img/white.svg')}}" id="whit">
            <!-- Brand Text -->
            <span>Bantu<span>Mahasiswa</span><span id="blink">|</span></span>
        </a>
        <ul >
            <li><a href="#">Home</a></li>
            <li><a href="#co1">Services</a></li>
            <li><a href="#co2">Testimoni</a></li>
            <li><a href="#co3">Contact Us</a></li>
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


    <section class="imge">
        <div class="scrolldown">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </section>

    <div class="bgContent">
        <div class="content1" id="co1">
            <div class="title">
                <h4>Category</h4>
                <p>we offer best services</p>
            </div>
        <div class="container" data-aos="zoom-in" data-aos-duration="600" >
            {{-- <div class="card" style="--clr: #03a9f4;">
                <div class="imgBx">
                    <img src="/assets/card1.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Cooming Soon</h2>
                    <p>Kami menyediakan banyak product disini, terutama yang menjadi menu andalan kami adalah Bakpau, Penasaran kan?? Cek langsung yukk</p>
                    <a href="#">Read More</a>
                </div>
            </div> --}}
            <div class="card" style="--clr: #009688;" >
                <div class="imgBx">
                    <img src="/assets/card2.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Solusi Tugas</h2>
                    <p>Lagi bingung nyari jawaban buat tugas2 kalian?? wahh ga salah si nyarinya disini, gass.. cek langsung yuk</p>
                    <a href="{{ route ('solution')}}">Read More</a>
                </div>
            </div>
            <div class="card" style="--clr: #ff3e7f;">
                <div class="imgBx">
                    <img src="/assets/team.png" alt="">
                </div>
                <div class="content">
                    <h2>About Us</h2>
                    <p>Pasti penasaran kan!, dibalik layar ini ada siapa aja.. yang pasti GWANTENG2 mas nya.. hha ga nyesel klau mau liat juga</p>
                    <a href="{{route('about')}}">Read More</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="percobaan" id="co2">
    <!-- Swiper -->
     <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">

                <div class="testimonialBox">
                    <img src="/assets/quote.png" class="quote">
                    <div class="content">
                        <p>Produk yang dijual di situs ini sangat berkualitas dan harganya juga sangat terjangkau. Saya pasti akan merekomendasikan situs ini kepada teman-teman saya.</p>
                        <span class="garis"></span>
                        <div class="details">
                            <div class="imgBx">
                                <img src="/assets/user.jpg">
                            </div>
                            <h4>Rehan Sajidan<br><span>HRD Dewapoker.com </span></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="testimonialBox">
                    <img src="/assets/quote.png" class="quote">
                    <div class="content">
                        <p>Desain website ini menarik dan memanjakan mata. User experience yang disajikan sangat baik dan intuitif. Sangat jelas bahwa pemilik website memperhatikan setiap detail. Saya yakin website ini akan disukai pengguna dan meningkatkan citra bisnis Anda.</p>
                        <span class="garis"></span>
                        <div class="details">
                            <div class="imgBx">
                                <img src="/assets/user.jpg">
                            </div>
                            <h4>Rendy N.S.<br><span>Senior Ui/Ux Desain</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testimonialBox">
                    <img src="/assets/quote.png" class="quote">
                    <div class="content">
                        <p>Saya sangat puas dengan layanan yang diberikan oleh situs ini. Pelayanan pelanggan yang ramah dan cepat merespon membuat saya merasa nyaman berbelanja di sini. Produk yang dijual juga berkualitas tinggi dan harga yang terjangkau.</p>
                        <span class="garis"></span>
                        <div class="details">
                            <div class="imgBx">
                                <img src="/assets/user.jpg">
                            </div>
                            <h4>Rehan Bul Bul<br><span>CEO Dominorich.com</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testimonialBox">
                    <img src="/assets/quote.png" class="quote">
                    <div class="content">
                        <p>Sangat menakjubkan! Saya sangat terkesan dengan bagaimana semua fitur dan fungsinya diimplementasikan dengan sangat baik. Codebase-nya sangat bersih dan terorganisir dengan baik, dan saya sangat mengapresiasi arsitektur yang digunakan.</p>
                        <span class="garis"></span>
                        <div class="details">
                            <div class="imgBx">
                                <img src="/assets/user.jpg">
                            </div>
                            <h4>Niko Sukma D.<br><span>Full Stack Developer</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testimonialBox">
                    <img src="/assets/quote.png" class="quote">
                    <div class="content">
                        <p>Situs ini memiliki banyak pilihan produk yang menarik dan unik. Saya suka berbelanja di sini karena bisa menemukan produk yang tidak ada di tempat lain, Contohnya seperti Bakpau Fahdin rasanya sangat enak!!</p>
                        <span class="garis"></span>
                        <div class="details">
                            <div class="imgBx">
                                <img src="/assets/user.jpg">
                            </div>
                            <h4>Larry Page<br><span>CEO Google LLC.</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testimonialBox">
                    <img src="/assets/quote.png" class="quote">
                    <div class="content">
                        <p>Situs ini memiliki pelayanan yang sangat baik dan ramah pelanggan. Selain itu, pengiriman produk juga sangat cepat. Saya sangat puas dengan pengalaman belanja di situs ini.</p>
                        <span class="garis"></span>
                        <div class="details">
                            <div class="imgBx">
                                <img src="/assets/user.jpg">
                            </div>
                            <h4>Charles Darwin<br><span>Revolutionary</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="content3" id="co3">
        <div class="container">
            <!-- <div class="gelap"></div> -->
            <div class="contactUs">
                <div class="title">
                    <h2>Contact Us</h2>
                </div>
            <div class="box">
            <div class="contact form">
                <h3>Send a Massage</h3>
                <form action="#">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First Name</span>
                                <input type="text" placeholder="Udin">
                            </div>
                            <div class="inputBox">
                                <span>Last Name</span>
                                <input type="text" placeholder="Sarwendah">
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="text" placeholder="Udin2341@gmail.com">
                            </div>
                            <div class="inputBox">
                                <span>Number</span>
                                <input type="text" placeholder="0895*****423">
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <span>Massage</span>
                                <textarea name="" placeholder="type your message here....." cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                            <input type="submit" value="Send">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span><ion-icon name="location"></ion-icon></span>
                        <p>Universitas Pakuan, Bogor<br>INDONESIA</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail"></ion-icon></span>
                        <a href="mailto:fahdin.065121154@unpak.ac.id">Fahdin@gmail.com</a>
                    </div>
                    <div>
                        <span><ion-icon name="logo-whatsapp"></ion-icon></span>
                        <a href="https://wa.me/6285894110928">+62895123402</a>
                    </div>
                </div>
            </div>

            <div class="contact map">
                <h3>Maps</h3>
                <div class="boxFrame"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.381673983951!2d106.8097918740653!3d-6.599398393394413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d97d3764c3%3A0xd56ba6305181755c!2sUniversitas%20Pakuan!5e0!3m2!1sid!2sid!4v1683611046910!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
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
    <footer>
        <div class="logo">
            <img src="/img/white.svg">
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
    </section>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script type="text/javascript">
    window.addEventListener("scroll", function() {
        var header = document.querySelector(".navbar");
        header.classList.toggle("sticky", window.scrollY > 5);

    });

    AOS.init();


    // Scroll Style
    let progress = document.querySelector('#scrolStyle');
        let totalH = document.body.scrollHeight - window.innerHeight;
        window.onscroll = function(){
            let progresH = (window.pageYOffset / totalH) * 100;
            progress.style.height = progresH + "%";
        }

    // Swiper
    let swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            // loop:true,
            loopedSlides: 50,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 0,
                modifier: 3,
                slideShadows: true,
            },
            autoplay: {
            delay: 6000,
            },

        });

        // profile nav
        let profileUser = document.querySelector('.userA');
        let menuUser = document.querySelector('.menuUser');
        profileUser.onclick = function () {
            menuUser.classList.toggle('active');
            profileUser.classList.toggle('active');
        };

        // Rive
        const r = new rive.Rive({
            src: "/img/warning.riv",
            // src: 'v.riv',
            canvas: document.querySelector("#warning"),

            autoplay: true,
        });

    // function pageScroll() {
    // window.scrollBy(0,document.body.scrollHeight); // horizontal and vertical scroll increments
    // // scrolldelay = setTimeout('pageScroll()',100); // scrolls every 100 milliseconds
    // }
    // function pageUp(){
    // window.scrollBy(15,-500);
    // scrolldelay = setTimeout('pageUp()',100); // scrolls every 100 milliseconds
    // }
    // function stop(){
    //     window.scroll(0,0);
    // }
</script>
</body>
</html>
