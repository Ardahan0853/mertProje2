@extends('main')

@section('content')
    <section class="py-5 text-center">
        <div class="container">
            <h1 class="fw-bold">Maya Cafe</h1>
            <p class="mb-5">Profesyonel ekibimizle hazırlanan muazzam lezzetler sizleri bekliyor. Denemelisiniz!</p>

            <div class="row g-4 text-start justify-content-center">
                <div class="col-md-5">
                    <h5 class="d-flex justify-content-between">
                        <span>Lezzetli Yemekler</span> <span>500₺</span>
                    </h5>
                    <p>Her damak tadına uygun seçenekler.</p>
                </div>
                <div class="col-md-5">
                    <h5 class="d-flex justify-content-between">
                        <span>Taze Salatalar</span> <span>250₺</span>
                    </h5>
                    <p>Taze malzemelerle hazırlanan sağlıklı ve lezzetli salatalar sunuyoruz.</p>
                </div>

                <div class="col-md-5">
                    <h5 class="d-flex justify-content-between">
                        <span>Tatlı ve Tuzlu</span> <span>700₺</span>
                    </h5>
                    <p>Her biri özenle hazırlanmış tatlı ve tuzlu seçenekler sunuyoruz.</p>
                </div>
                <div class="col-md-5">
                    <h5 class="d-flex justify-content-between">
                        <span>Geleneksel Yemekler</span> <span>350₺</span>
                    </h5>
                    <p>Geleneksel tariflerle hazırlanan yemeklerimiz, damak tadınıza hitap edecek.</p>
                </div>

                <div class="col-md-5">
                    <h5 class="d-flex justify-content-between">
                        <span>Özel Menü</span> <span>1000₺</span>
                    </h5>
                    <p>Özel günleriniz için hazırlanmış lezzetli menülerimiz mevcut.</p>
                </div>
                <div class="col-md-5">
                    <h5 class="d-flex justify-content-between">
                        <span>Çeşitli İçecekler</span> <span>200₺</span>
                    </h5>
                    <p>Yemeklerinizi tamamlayacak çeşitli içecek seçeneklerimizle hizmetinizdeyiz.</p>
                </div>
            </div>

            <!-- Görsel en altta ortalanmış şekilde -->
            <div class="mt-5 w-100 d-flex justify-center">
                <img src="{{asset('images/menu.webp')}}" class="img-fluid rounded-4" alt="Yemek Görseli">
            </div>
        </div>
    </section>
@endsection
