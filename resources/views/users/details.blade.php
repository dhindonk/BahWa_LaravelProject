<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details {{ $post->title }}</title>
    <!-- bootstrep css -->
    <link rel="stylesheet" href="/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style2.css">
    <link rel="stylesheet" href="/style/style3.css">
    <link rel="stylesheet" href="/style/jquery.nice-number.css">
    <link rel="stylesheet" href="/style/style4.css">
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="first">bantu</div>
                <div class="seconde">mahasiswa</div>
                <div class="blink">|</div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 14px;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/instant_food/">Instant Food</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Joki-Jokian
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/joki_tugas/">Joki Tugas</a></li>
                            <li><a class="dropdown-item" href="/joki_ml/">Joki Mobile Legends</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Joki Skripsi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about/">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" style="font-size: 100px;">
                    <input class="form-control me-2" type="search" placeholder="Type.." aria-label=Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- content -->
    <div class="row align-items-start">
        <div class="col-sm-4 g-4" style=" height: 100vh;">
            <div class="kotak"><img src="/assets/bakpau.png" alt="" id="gambar"></div>
        </div>
        <div class="col-sm-4 g-4" style=" height: auto;" id="col2">
            <h3 id="judul">Bakpau kelas bintang atas dengan berbagai rasa yang bisa dipilih - Bakpau Unpak</h3>
            <ul class="subtitleproduct">
                <li>Terjual 10 Rb+</li>
                <li><i class="fa-solid fa-star" style="color: orange;"></i>4.9(438 rating)</li>
                <li>Diskusi(18)</li>
            </ul>
            <h1 id="subjudul">rp 4.000</h1>

            <ul id="sub2">
                <li><span>Kondisi: </span><span class="main">Anget</span></li>
                <li><span>Berat Satuan: </span><span class="main">200 g</span></li>
                <li><span>Kategori: </span><a href="#" id="kategori"><b>Makanan sehat</b></a></li>
                <li><span>Etalase: </span><a href="#" id="kategori"><b>Semua Etalase</b></a>
                </li>
            </ul>
            <!-- input checkbox -->
            <input type="checkbox" id="check-readmore">
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet beatae voluptatum
                hic reprehenderit, officia ea velit! Incidunt ipsa dolores exercitationem, eligendi iure aliquid
                iusto voluptas nobis, error voluptatibus dolore repudiandae. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Atque beatae veritatis ad quo a dolore ea aut, tempore, assumenda et deleniti quae
                maiores corrupti, quam commodi quibusdam mollitia obcaecati pariatur? Lorem ipsum dolor sit amet
                consectetur, adipisicing elit. Nesciunt ad cumque illum ea nam molestiae error similique tempora.
                Accusamus dignissimos at sit praesentium quaerat possimus, libero repellendus reprehenderit
                voluptatum reiciendis ullam amet veniam atque magnam a eveniet. Iusto quo magnam quisquam deleniti
                numquam harum. Veritatis similique, laudantium eligendi obcaecati ab facere soluta doloremque cumque
                quasi, consectetur, incidunt minus? Possimus quos voluptatibus odio autem culpa inventore voluptas
                ad, at vero iste ea exercitationem provident cum fugiat quis asperiores vel obcaecati sequi. Ratione
                a ipsum nostrum aliquid quidem expedita quos itaque fugiat assumenda ipsa perferendis excepturi
                corrupti quibusdam quod repudiandae exercitationem quisquam voluptate beatae dolores, at repellendus
                suscipit dignissimos fuga. Repudiandae odit dolorem sapiente quia at beatae doloribus laboriosam
                illum earum vitae sint porro mollitia, adipisci cumque ad praesentium error fugit. Voluptate
                mollitia nisi, molestiae cupiditate deserunt laudantium ipsa quod magnam unde.</p>
            <label for="check-readmore" class="button-readmore"></label>
            <hr>
            <!--          -->
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Komentar Baik
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <span class="komentar baik">
                                <ul id="profileuser">
                                    <li><i class="fa-solid fa-circle-user"></i></li>
                                    <li>Widya Ananda</li>
                                </ul>
                                <p>Enakkkk bangettt, apalagi rasa Coklat the best pokonya&#129321; soalnya Manis kayak
                                    <code>AKU</code></p>
                                <!--  -->
                                <ul id="profileuser">
                                    <li><i class="fa-solid fa-circle-user"></i></li>
                                    <li>Kirana Sakira</li>
                                </ul>
                                <p>Rekomended sii, harga terjangkau juga buat yang lagi Kanker (kantor kering)
                                    &#10024;&#10024;</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Komentar Kritik
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <span class="komentar baik">
                                <ul id="profileuser">
                                    <li><i class="fa-solid fa-circle-user"></i></li>
                                    <li>Fitri Amanah</li>
                                </ul>
                                <p>Ada sedikit kritik si, kalau bisa Coklatnya dikurangin ya</p>
                                <!--  -->
                                <ul id="profileuser">
                                    <li><i class="fa-regular fa-user"></i></li>
                                    <li>Rizki Febrian</li>
                                </ul>
                                <p>Ga bisa berkata-kata lagi</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Netizen Syirik
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <span class="komentar baik">
                                <ul id="profileuser">
                                    <li><i class="fa-regular fa-user"></i></li>
                                    <li>Rafly Gigi</li>
                                </ul>
                                <p>Pengen ngomong Kasar, "KASARRR"</p>
                                <!--  -->
                                <ul id="profileuser">
                                    <li><i class="fa-solid fa-circle-user"></i></li>
                                    <li>Siti Albert Rafaela</li>
                                </ul>
                                <p>Parah si ini, aneh banget selalu banyak yang beli. harusnya pada dipikir dulu sebelum
                                    beli, aneh orang-orang teh</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
        <div class="col-sm-4 g-4" style=" height: 100vh;">

            <div class="kotak2">
                <h2>Atur jumlah barang yang diinginkan</h2>
                <ul id="stok">
                    <li id="buttomplus"><input type="number" name="" id="num" min="1" value="1"></li>
                    <li>
                        <p>Stok Total: <b>2340</b></p>
                    </li>
                </ul>
                <span class="p">
                    <p>Beli > 4 lebih hemat!</p>
                </span>
                <h4>subtotal <span class="subtotal">rp 4.000.00</span></h4>
                <ul class="tombol">
                    <li><a href="#" id="satu">Tambahkan Keranjang</a></li>
                    <li><a href="#" id="dua">Beli Langsung</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--  -->

    <footer>
        <div class="footer-content pixel-bottom">
            <h3>bantu mahasiswa</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex suscipit officia odit laudantium non?
                Architecto accusamus illo deserunt, nostrum ut odio iste aliquam necessitatibus similique sed
                dignissimos nesciunt aut minus!</p>
            <ul class="socials">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>

            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2023 </p>
        </div>
    </footer>

    <!-- java bootstrep-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- js increment function -->
    <script>
        $(function () {
            $('input[type="number"]').niceNumber();
        });
    </script>
    <script src="/js/jquery.nice-number.js"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/6538fc8aae.js" crossorigin="anonymous"></script>
</body>

</html>
