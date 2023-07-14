<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Bahwa</title>
    <link rel="shortcut icon" href="/img/black.svg" type="image/x-icon">
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    <link rel="stylesheet" href="/css/logreg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>
    <div class="warningMobile">
        <h3>VERSI MOBILE BELUM TERSEDIA <span>😇</span></h3>
        <p>Mohon untuk membukanya menggunakan desktop</p>
        {{-- <canvas id="warning" width="500" height="500"></canvas> --}}
        <img src="{{asset('assets/mario.gif')}}">
    </div>
    <section class="wrappers">
    <div class="bg"></div>
    <div class="container">
        <div class="content">
            <div class="imgBox">
                <img src="assets/mario2.gif">
            </div>
            {{-- <h2 class="logo">Bantu <span>Mahasiswa</span></h2> --}}
            {{-- <div class="text-sci">
                <h2>Welcome to <br><span>Bahwa Website</span></h2>
                <p>This website was built because there was a lot of pressure from students who complained that they did not have time to do their assignments, and asked us to make something that could help them in carrying out their lecture activities.</p>

                <div class="social">
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div> --}}
        </div>
        {{-- login register --}}

        <div class="logreg-box">

            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show " id="notifS">
                    Check Email for Verify &#127773;
            </div>
            @elseif(Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show" id="notifE">
                {{ Session::get('error') }}
                </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" id="notifE">
                    Email already registered &#x2639;
            </div>
            @endif
            <div class="form-box login">

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <h2>Sign In</h2>
                    <div class="inputBox">
                        <input id="mail" type="email" name="email" placeholder="contoh@gmail.com" required="required">
                        <span>Username</span>
                        <i></i>

                    </div>
                    <div class="inputBox">

                        <input id="fakePassword" name="password" type="password" placeholder="sandinya apa?" required="required">
                        <span>Password</span>
                        <i></i>
                    </div>
                    <span><i id="toggler" class="far fa-eye"></i></span>


                    <div class="links">
                        <a href="#">Forget Password<span>??</span></a>
                    </div>

                    <button class="btn1">Login</button>
                    <div class="links2">
                        <span>Don't have an account?</span>
                        <a href="#" class="register-link">Sign Up</a>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <h2>Sign Up</h2>

                    <div class="borderLine"></div>
                    <div class="inputBox">
                        <input id="name" type="text" name="name" placeholder="contoh udin albert" required="required">
                        <span>Name</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input id="mail" type="text"name="email" placeholder="contoh@gmail.com" required="required">
                        <span>Username / Email</span>
                        <i></i>
                    </div>
                    <div class="inputBox">

                        <input id="fPassword" name="password" type="password" placeholder="sandinya apa?" required="required">
                        <span>Password</span>
                        <i></i>
                    </div>
                    <span><i id="eyreg" class="far fa-eye"></i></span>


                    <div class="links">
                        <label>
                            <input type="checkbox"> I Agree to the Terms and Conditions
                        </label>
                    </div>
                    <button class="btn2 btn2">Register</button>
                    <div class="links2">
                        <span>Already have an account?</span>
                        <a href="#"class="login-link">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

    <script src="/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function () {
        $(".alert-dismissible").fadeIn().delay(4000).fadeOut();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
