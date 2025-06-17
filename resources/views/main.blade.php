<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Maya Cafe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        .hero-section {
            background-image: url('https://source.unsplash.com/1600x900/?cafe');
            background-size: cover;
            background-position: center;
            position: relative;
            color: white;
        }

        .hero-overlay {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            border-radius: 15px;
            padding: 30px;
            color: white;
        }

        .form-control::placeholder {
            color: #ccc;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Maya Cafe</a>
        <div class="navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('anasayfa') }}">Anasayfa</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('menu') }}">Menü</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('hakkimizda') }}">Hakkımızda</a></li>

                @if(auth()->check())
                    <li class="nav-item nav-text"><a class="nav-link" disabled>Hoşgeldin, {{ auth()->user()->name }}</a></li>
                    <li class="nav-item d-flex align-items-center">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link" style="display:inline; padding:0; border:none;">
                                Çıkış Yap
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Giriş</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Kayıt</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>


@yield('content')

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<footer class="text-white py-5" style="background-color: #3b2e2a; font-family: 'Poppins', sans-serif;">
    <div class="container">
        <div class="row gy-4">
            <!-- Sol kısım -->
            <div class="col-md-4">
                <h5 class="fw-bold">Lezzet</h5>
                <p class="text-light">Muazzam lezzetlerimizle sizi bekliyoruz.</p>
                <div class="d-flex gap-3 fs-5">
                    <a href="#" class="text-white"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-x-twitter"></i></a>
                </div>
            </div>

            <!-- Orta kısım -->
            <div class="col-md-4">
                <h6 class="fw-semibold text-uppercase">Ekip</h6>
                <p class="mb-1">+90 282 444 5459</p>
                <p>info@mayacafe.com</p>
            </div>

            <!-- Sağ kısım -->
            <div class="col-md-4">
                <h6 class="fw-semibold text-uppercase">Hizmet</h6>
                <label for="emailInput" class="form-label">E-posta adresinizi girin</label>
                <input type="email" id="emailInput" class="form-control mb-3 rounded-3"
                       placeholder="E-posta adresinizi buraya yazın">
                <button class="btn rounded-pill px-4 py-2" style="background-color: #e47909; color: white;">Gönder
                    butonuna tıklayın
                </button>
            </div>
        </div>

        <hr class="border-light mt-5"/>

        <div class="text-center small mt-3 text-light">
            © 2025. All rights reserved.
        </div>
    </div>
</footer>
</body>
</html>
