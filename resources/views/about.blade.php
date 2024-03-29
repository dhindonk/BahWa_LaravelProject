<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Bahwa</title>
    <link rel="shortcut icon" href="img/black.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

</head>

<body>
    <!-- Mobile -->
    <div class="warningMobile">
        <h3>VERSI MOBILE BELUM TERSEDIA <span>😇</span></h3>
        <p>Mohon untuk membukanya menggunakan desktop</p>
        <canvas id="warning" width="500" height="500"></canvas>
    </div>
    <section class="wrappers">
    <div id="scrolStyle"></div>
    <div id="bgScroll"></div>

    <div class="container">
        <a href="{{route('home')}}">
            <div class="backBox"><i class="ri-arrow-left-s-line"></i></div>
        </a>
        <div class="imgBox">
            <img src="{{asset('assets/team.png')}}">
        </div>
        <div class="boxContent">
            <div class="textBox">
                <h2>Bahwa Corporation</h2>
                <p>Website ini dibuat untuk memenuhi Tugas Akhir Teknologi Web <br><span>2023</span></p>
                <p><br><strong>Thanks to</strong></p>
                <div class="details">
                <ul>
                    <li>Allah SWT</li>
                    <li>Creator </li>
                    <li>Asprak Tekweb </li>
                    <li>.</li>
                    <li>Anggota Kelompok </li>
                </ul>
                <ul>
                    <li>_</li>
                    <li>Bahwa Corporation</li>
                    <li>Reyhan Nazera [099]</li>
                    <li>Abimanyu [115]</li>
                    <li>Adam Zakaria [169]</li>
                    <li>Moch. Fahdin [154]</li>
                    <li>Raka Chandra Irawan [161]</li>
                    <li>Muhammad Raihan [157]</li>
                    <li>Rafly Irsa Sanubari [162]</li>
                    <li>Agustian Dwi Putra [152]</li>
                    <li>Raihan Sajidan [160]</li>
                </ul>
                </div>
                <p></p>
            </div>

        </div>
    </div>

    </section>
    <script>
    // Scroll Style
    let progress = document.querySelector('#scrolStyle');
    let totalH = document.body.scrollHeight - window.innerHeight;
    window.onscroll = function(){
        let progresH = (window.pageYOffset / totalH) * 100;
        progress.style.height = progresH + "%";
    }
    </script>
</body>
</html>
