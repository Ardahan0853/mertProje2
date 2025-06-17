@extends('main')

@section('content')
    <section class="hero-section position-relative py-5">
        <div class="hero-overlay"></div>
        <div class="container position-relative z-1 py-5">
            <div class="row align-items-center">

                <!-- Left Content -->
                <div class="col-lg-6 mb-4 text-white">
                    <p class="mb-1">★★★★★</p>
                    <p class="mb-3">Mükemmel, Lezzetli, Hızlı, Temiz, Güzel</p>
                    <h1 class="display-5 fw-bold">Maya Cafe'de Eşsiz Lezzetler</h1>
                    <p class="mt-3">Profesyonel ekibimizle muazzam lezzetler sunuyoruz. Sizi bekliyoruz!</p>
                    <a href="#" class="btn btn-warning mt-4 px-4">Ziyaret</a>
                </div>

                <!-- Right Contact Form -->
                <div class="col-lg-5 offset-lg-1">
                    <div class="form-container">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Adınızı giriniz lütfen.</label>
                                <input type="text" class="form-control" placeholder="Adınızı buraya yazın.">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">E-posta adresinizi giriniz.*</label>
                                <input type="email" class="form-control" placeholder="E-posta adresinizi yazın.">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone number*</label>
                                <input type="tel" class="form-control" placeholder="Your phone number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mesajınızı buraya yazın.*</label>
                                <textarea class="form-control" rows="4"
                                          placeholder="Mesajınızı yazınız lütfen."></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-light w-100">Gönder butonuna tıklayın.</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5" style="background-color: #FFEDD5">
        <div class="container text-center" >
            <h2 class="fw-bold mb-3">Lezzetli Deneyimler</h2>
            <p class="text-muted mb-5">Profesyonel ekibimizle hazırlanan muazzam lezzetler, damak tadınıza hitap
                ediyor.</p>

            <div class="row g-4 justify-content-center">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-5">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                        <img src="{{asset('images/anasayfa2.webp')}}" class="card-img-top" alt="Hızlı Servis" style="height: 300px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Hızlı Servis</h5>
                            <p class="card-text text-muted">
                                Müşteri memnuniyetini öncelik olarak belirleyerek, hızlı ve kaliteli servis sunmaktayız.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 col-lg-5">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                        <img src="{{asset('images/anasayfa1.webp')}}" class="card-img-top" alt="Özel Menü" style="height: 300px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Özel Menü</h5>
                            <p class="card-text text-muted">
                                Seçkin malzemelerle hazırlanan özel menülerimiz,<br>her damak zevkine hitap etmektedir.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



