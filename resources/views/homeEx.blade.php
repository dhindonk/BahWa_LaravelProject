<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bahwa | Food</title>
    <link rel="shortcut icon" href="/assets/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style2.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-white">
    <nav class="navbar navbar-expand-lg sticky-top" style="background: #0B2239">
        <div class="container-fluid" style=" box-shadow: 0 7px 15px 0 rgba(0, 0, 0, 0.5);">
            <a class="navbar-brand" href="#">
                <div class="first">bantu</div>
                <div class="seconde">mahasiswa</div>
                <div class="blink">|</div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" style="margin: 15px;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 14px;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"style="color:#fff">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item"style="color:#fff">
                        <a class="nav-link active" href="/instant_food/">Instant Food</a>
                    </li>
                    <li class="nav-item dropdown"style="color:#fff">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Joki-Jokian
                        </a>
                        <ul id="submenuu">
                            <li><a href="/joki_tugas/">Tugas Kuliah</a></li>
                            <li><a href="#"> Skripsi</a></li>
                            <li><a href="/joki_ml/"> Mobile Legends</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"style="color:#fff">
                        <a class="nav-link" href="/about/">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" style="transform: scale(0.9); font-size: 100px; margin: 15px;">
                    <input class="form-control me-2" type="search" placeholder="Type.." aria-label=Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>

                <form action="{{ route('logout') }}" method="POST" class="d-flex" >
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">{{ Auth::user()->name }} Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid text-center" style="padding: 20px;">
        <div class="row" style="height: 80vh;">
            <img src="/assets/header.jpg" alt="" height="100%" width="100%" style="border-radius: 50px;">
        </div>
        <br><br>
        <!-- row 1 -->

        <div class="flex"  style="display: flex; flex-wrap:wrap">
            @forelse($foods as $post)
        <div class="row mt-3" >
            <div class="col g-2"
            data-aos="zoom-out"
            {{-- data-aos-delay="5" --}}
            data-aos-duration="500"
            data-aos-offset="5"
            {{-- data-aos-easing="ease-in-out" --}}

            {{-- data-aos-once="false" --}}

            style="margin: 15px; ">
                <div class="card" style="border:1px solid rgba(0, 0, 0, 0.5); height:280px; width:250px">
                    <a href="#footer" class="detailProducts">
                    <img src="{{ asset('/storage/posts/'.$post->image) }}" style=" height: 150px; width: 100%; object-fit: cover" class="card-img-top" alt="Gambar">
                    <div class="card-body " style="height: 50px">
                        <h6 class="card-title">{{ $post->title }}<br>
                            <p class="harga">Rp 4.000</p>
                        </h6>
                        <ul class="rating-body">
                            <li class="rating"><i class="fa-solid fa-star"></i></li>
                            <li class="text-rating">5.0 | terjual 10 rb+</li>
                        </ul>
                        {{-- <a href="details" class="btn btn-outline-dark d-block">Details</a> --}}
                    </div>
                    </a>
                </div>
            </div>
        </div>

        @empty
        <div class="alert alert-danger">
        Data Post belum Tersedia.
        </div>
        @endforelse

        </div>

        <!-- footer start-->
        <div class="row align-items-end" id="footer">
            <div class="col g-12">
                <footer>
                    <div class="footer-content">
                        <h3>bantu mahasiswa</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex suscipit officia odit laudantium
                            non?
                            Architecto accusamus illo deserunt, nostrum ut odio iste aliquam necessitatibus similique
                            sed
                            dignissimos
                            nesciunt aut minus!</p>
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
            </div>


            <!-- fotter end -->


            <script src="https://kit.fontawesome.com/6538fc8aae.js" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
            AOS.init();
            </script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
            </script>
</body>
</html>
