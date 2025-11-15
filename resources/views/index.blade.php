@extends('layouts.app')

@section('title', 'PromoHub - Les meilleures promos du web')

@section('content')


    <!-- Section Hero -->
    <section class="container-fluid mt-4">
        <div class="hero shadow-sm">
            <div class="hero-content text-center">
                <h1 class="display-5 fw-bold mb-3">Les meilleures <span>promos</span> du web</h1>
                <p class="lead mb-4">
                    Découvrez des milliers d'offres exceptionnelles et économisez jusqu'à 70% sur vos achats préférés.
                </p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route ('all_promo') }}" class="btn btn-white px-4 py-2 fw-semibold">Voir toutes les promos</a>
                    <a href="{{ route('createpromo') }}" class="btn btn-outline-white px-4 py-2 fw-semibold">Publier une promo</a>
                </div>
            </div>
        </div>
    </section>
  <section class="container py-5">
    <div class="row g-4 text-center">

        <!-- Promos actives -->
        <div class="col-md-4">
            <div class="bg-primary text-white p-4 rounded-4 d-flex flex-column align-items-center justify-content-center">
                <i class="fas fa-tags fa-3x mb-3"></i> <!-- Icône Font Awesome -->
                <h1 class="mb-2">2.545</h1>
                <span class="text-small">Promos actives</span>
            </div>
        </div>

        <!-- Utilisateurs satisfaits -->
        <div class="col-md-4">
            <div class="bg-success text-white p-4 rounded-4 d-flex flex-column align-items-center justify-content-center">
                <i class="fas fa-smile fa-3x mb-3"></i>
                <h1 class="mb-2">2.545</h1>
                <span class="text-small">Utilisateurs satisfaits</span>
            </div>
        </div>

        <!-- Promos publiées -->
        <div class="col-md-4">
            <div class="bg-danger text-white p-4 rounded-4 d-flex flex-column align-items-center justify-content-center">
                <i class="fas fa-bullhorn fa-3x mb-3"></i>
                <h1 class="mb-2">2.545</h1>
                <span class="text-small">Promos publiées</span>
            </div>
        </div>

    </div>
</section>


    <section class="py-5 bg-light">
        <div class="container">
            <!-- Titre principal -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold"><span class="me-2">🔥</span>Meilleures réductions</h2>
                <a href="#" class="btn btn-outline-info">
                    Voir plus <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Liste de promos -->
            <div class="row g-4">

                <!-- Carte 1 -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 rounded-4 h-100 overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('assets/images/pro6.jpg') }}" class="card-img-top" alt="Set de casseroles"
                                style="height:200px; object-fit:cover;">
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2">-40%</span>
                            <span class="badge bg-secondary position-absolute top-0 end-0 m-2">Casquette</span>
                            <span
                                class="badge bg-light text-dark position-absolute top-50 start-50 translate-middle">Expiré</span>
                        </div>
                        <div class="card-body">
                            <h6 class="fw-bold mb-1">Set de casseroles Inox 5 pièces</h6>
                            <p class="text-muted small mb-2">Set complet de casseroles en inox compatible tous feux</p>
                            <div class="mb-2">
                                <span class="text-danger fw-bold fs-5">149.99€</span>
                                <span class="text-muted text-decoration-line-through small">249.99€</span>
                            </div>
                            <p class="text-success fw-semibold small mb-2">Économie : 100.00€</p>
                            <div class="d-flex align-items-center text-muted small mb-3">
                                <i class="far fa-clock me-1"></i>Expire le 18/01/2024
                            <span class="ms-3">4.5<i class="fas fa-star me-1 text-warning"></i>34 Avis</span>
                            </div>
                            {{-- <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('detail_promo') }}" class="btn btn-primary w-75">Voir la promo</a>

                                <div class="d-flex align-items-center">
                                    <button class="btn btn-outline-light border me-2"><i
                                            class="far fa-heart text-dark"></i></button>
                                    <button class="btn btn-outline-light border"><i
                                            class="fas fa-share-alt text-dark"></i></button>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <!-- Carte 2 -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 rounded-4 h-100 overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('assets/images/pro4.jpg') }}" class="card-img-top" alt="Nike Air Max"
                                style="height:200px; object-fit:cover;">
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2">-37%</span>
                            <span class="badge bg-secondary position-absolute top-0 end-0 m-2">Basket</span>
                            <span
                                class="badge bg-light text-dark position-absolute top-50 start-50 translate-middle">Expiré</span>
                        </div>
                        <div class="card-body">
                            <h6 class="fw-bold mb-1">Nike Air Max 270</h6>
                            <p class="text-muted small mb-2">Chaussures de sport avec technologie Air Max, disponibles en
                                plusieurs coloris</p>
                            <div class="mb-2">
                                <span class="text-danger fw-bold fs-5">99.99€</span>
                                <span class="text-muted text-decoration-line-through small">159.99€</span>
                            </div>
                            <p class="text-success fw-semibold small mb-2">Économie : 60.00€</p>
                            <div class="d-flex align-items-center text-muted small mb-3">
                                <i class="far fa-clock me-1"></i>Expire le 12/01/2024

                                <span class="ms-3"><i class="fas fa-eye me-1"></i>18</span>
                                <span class="ms-3"><i class="fas fa-heart me-1 text-danger"></i>4</span>

                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="btn btn-primary w-75">Voir la promo</a>

                                <div class="d-flex align-items-center">
                                    <button class="btn btn-outline-light border me-2"><i
                                            class="far fa-heart text-dark"></i></button>
                                    <button class="btn btn-outline-light border"><i
                                            class="fas fa-share-alt text-dark"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carte 3 -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 rounded-4 h-100 overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('assets/images/pro1.jpg') }}" class="card-img-top" alt="Canapé 3 places"
                                style="height:200px; object-fit:cover;">
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2">-31%</span>
                            <span class="badge bg-secondary position-absolute top-0 end-0 m-2">Phone</span>
                            <span
                                class="badge bg-light text-dark position-absolute top-50 start-50 translate-middle">Expiré</span>
                        </div>
                        <div class="card-body">
                            <h6 class="fw-bold mb-1">Canapé 3 places en cuir</h6>
                            <p class="text-muted small mb-2">Canapé moderne en cuir véritable, très confortable pour le
                                salon</p>
                            <div class="mb-2">
                                <span class="text-danger fw-bold fs-5">899.99€</span>
                                <span class="text-muted text-decoration-line-through small">1299.99€</span>
                            </div>
                            <p class="text-success fw-semibold small mb-2">Économie : 400.00€</p>
                            <div class="d-flex align-items-center text-muted small mb-3">
                                <i class="far fa-clock me-1"></i>Expire le 30/01/2024
                                <span class="ms-3"><i class="fas fa-eye me-1"></i>287</span>
                                <span class="ms-3"><i class="fas fa-heart me-1 text-danger"></i>24</span>

                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="btn btn-primary w-75">Voir la promo</a>

                                <div class="d-flex align-items-center">
                                    <button class="btn btn-outline-light border me-2"><i
                                            class="far fa-heart text-dark"></i></button>
                                    <button class="btn btn-outline-light border"><i
                                            class="fas fa-share-alt text-dark"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="container py-5">
        <!-- Titre principal -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold"><span class="me-2">🔥</span>Promos en vedettes</h2>
            <a href="#" class="text-decoration-none fw-semibold text-primary">
                Voir plus <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <div class="row g-2">

            <!-- Carte 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-4 h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/pro6.jpg') }}" class="card-img-top" alt="Set de casseroles"
                            style="height:200px; object-fit:cover;">
                        <span class="badge bg-danger position-absolute top-0 start-0 m-2">-40%</span>
                        <span class="badge bg-secondary position-absolute top-0 end-0 m-2">Casquette</span>
                        <span
                            class="badge bg-light text-dark position-absolute top-50 start-50 translate-middle">Expiré</span>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold mb-1">Set de casseroles Inox 5 pièces</h6>
                        <p class="text-muted small mb-2">Set complet de casseroles en inox compatible tous feux</p>
                        <div class="mb-2">
                            <span class="text-danger fw-bold fs-5">149.99€</span>
                            <span class="text-muted text-decoration-line-through small">249.99€</span>
                        </div>
                        <p class="text-success fw-semibold small mb-2">Économie : 100.00€</p>
                        <div class="d-flex align-items-center text-muted small mb-3">
                            <i class="far fa-clock me-1"></i>Expire le 18/01/2024
                            <span class="ms-3"><i class="fas fa-eye me-1"></i>187</span>
                            <span class="ms-3"><i class="fas fa-heart me-1 text-danger"></i>34</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary w-75">Voir la promo</a>

                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-light border me-2"><i
                                        class="far fa-heart text-dark"></i></button>
                                <button class="btn btn-outline-light border"><i
                                        class="fas fa-share-alt text-dark"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-4 h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/pro4.jpg') }}" class="card-img-top" alt="Nike Air Max"
                            style="height:200px; object-fit:cover;">
                        <span class="badge bg-danger position-absolute top-0 start-0 m-2">-37%</span>
                        <span class="badge bg-secondary position-absolute top-0 end-0 m-2">Basket</span>
                        <span
                            class="badge bg-light text-dark position-absolute top-50 start-50 translate-middle">Expiré</span>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold mb-1">Nike Air Max 270</h6>
                        <p class="text-muted small mb-2">Chaussures de sport avec technologie Air Max, disponibles en
                            plusieurs coloris</p>
                        <div class="mb-2">
                            <span class="text-danger fw-bold fs-5">99.99€</span>
                            <span class="text-muted text-decoration-line-through small">159.99€</span>
                        </div>
                        <p class="text-success fw-semibold small mb-2">Économie : 60.00€</p>
                        <div class="d-flex align-items-center text-muted small mb-3">
                            <i class="far fa-clock me-1"></i>Expire le 12/01/2024

                            <span class="ms-3"><i class="fas fa-eye me-1"></i>18</span>
                            <span class="ms-3"><i class="fas fa-heart me-1 text-danger"></i>4</span>

                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary w-75">Voir la promo</a>

                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-light border me-2"><i
                                        class="far fa-heart text-dark"></i></button>
                                <button class="btn btn-outline-light border"><i
                                        class="fas fa-share-alt text-dark"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Carte3  -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-4 h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/pro9.jpg') }}" class="card-img-top" alt="Set de casseroles"
                            style="height:200px; object-fit:cover;">
                        <span class="badge bg-danger position-absolute top-0 start-0 m-2">-40%</span>
                        <span class="badge bg-secondary position-absolute top-0 end-0 m-2">Casquette</span>
                        <span
                            class="badge bg-light text-dark position-absolute top-50 start-50 translate-middle">Expiré</span>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold mb-1">MacBook Air M2 13 pouces</h6>
                        <p class="text-muted small mb-2">MacBook Air avec processeur M2, 8GB RAM, 256GB SSD</p>
                        <div class="mb-2">
                            <span class="text-danger fw-bold fs-5">1099.99€</span>
                            <span class="text-muted text-decoration-line-through small">1299.99€</span>
                        </div>
                        <p class="text-success fw-semibold small mb-2">Économie: 200.00€</p>
                        <div class="d-flex align-items-center text-muted small mb-3">
                            <i class="far fa-clock me-1"></i>Expire le 18/01/2024
                            <span class="ms-3"><i class="fas fa-eye me-1"></i>187</span>
                            <span class="ms-3"><i class="fas fa-heart me-1 text-danger"></i>34</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary w-75">Voir la promo</a>

                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-light border me-2"><i
                                        class="far fa-heart text-dark"></i></button>
                                <button class="btn btn-outline-light border"><i
                                        class="fas fa-share-alt text-dark"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Carte3  -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-4 h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/pro8.jpg') }}" class="card-img-top" alt="Set de casseroles"
                            style="height:200px; object-fit:cover;">
                        <span class="badge bg-danger position-absolute top-0 start-0 m-2">-40%</span>
                        <span class="badge bg-secondary position-absolute top-0 end-0 m-2">Audio</span>
                        <span
                            class="badge bg-light text-dark position-absolute top-50 start-50 translate-middle">Expiré</span>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold mb-1">Casque Audio Sony WH-1000XM5</h6>
                        <p class="text-muted small mb-2">Casque sans fil avec réduction de bruit active, autonomie 30h</p>
                        <div class="mb-2">
                            <span class="text-danger fw-bold fs-5">279.99€</span>
                            <span class="text-muted text-decoration-line-through small">1299.99€</span>
                        </div>
                        <p class="text-success fw-semibold small mb-2">Économie: 200.00€</p>
                        <div class="d-flex align-items-center text-muted small mb-3">
                            <i class="far fa-clock me-1"></i>Expire le 18/01/2024
                            <span class="ms-3"><i class="fas fa-eye me-1"></i>187</span>
                            <span class="ms-3"><i class="fas fa-heart me-1 text-danger"></i>34</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary w-75">Voir la promo</a>

                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-light border me-2"><i
                                        class="far fa-heart text-dark"></i></button>
                                <button class="btn btn-outline-light border"><i
                                        class="fas fa-share-alt text-dark"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-4 h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/pro10.jpg') }}" class="card-img-top" alt="Set de casseroles"
                            style="height:200px; object-fit:cover;">
                        <span class="badge bg-danger position-absolute top-0 start-0 m-2">-40%</span>
                        <span class="badge bg-secondary position-absolute top-0 end-0 m-2">Phone</span>
                        <span
                            class="badge bg-light text-dark position-absolute top-50 start-50 translate-middle">Expiré</span>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold mb-1">Smartphone Samsung Galaxy S24</h6>
                        <p class="text-muted small mb-2">Le dernier smartphone Samsung avec écran AMOLED 6.8 pouces et
                            triple caméra 50MP</p>
                        <div class="mb-2">
                            <span class="text-danger fw-bold fs-5">649.99€</span>
                            <span class="text-muted text-decoration-line-through small">899.99€</span>
                        </div>
                        <p class="text-success fw-semibold small mb-2">Économie: 200.00€</p>
                        <div class="d-flex align-items-center text-muted small mb-3">
                            <i class="far fa-clock me-1"></i>Expire le 18/01/2024
                            <span class="ms-3"><i class="fas fa-eye me-1"></i>187</span>
                            <span class="ms-3"><i class="fas fa-heart me-1 text-danger"></i>34</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary w-75">Voir la promo</a>

                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-light border me-2"><i
                                        class="far fa-heart text-dark"></i></button>
                                <button class="btn btn-outline-light border"><i
                                        class="fas fa-share-alt text-dark"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Carte 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-4 h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/pro1.jpg') }}" class="card-img-top" alt="Canapé 3 places"
                            style="height:200px; object-fit:cover;">
                        <span class="badge bg-danger position-absolute top-0 start-0 m-2">-31%</span>
                        <span class="badge bg-secondary position-absolute top-0 end-0 m-2">Phone</span>
                        <span
                            class="badge bg-light text-dark position-absolute top-50 start-50 translate-middle">Expiré</span>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold mb-1">Iphone</h6>
                        <p class="text-muted small mb-2">Ad nisi sit magna ut eu nostrud occaecat exercitation adipisicing
                            ullamco.</p>
                        <div class="mb-2">
                            <span class="text-danger fw-bold fs-5">899.99€</span>
                            <span class="text-muted text-decoration-line-through small">1299.99€</span>
                        </div>
                        <p class="text-success fw-semibold small mb-2">Économie : 400.00€</p>
                        <div class="d-flex align-items-center text-muted small mb-3">
                            <i class="far fa-clock me-1"></i>Expire le 30/01/2024
                            <span class="ms-3"><i class="fas fa-eye me-1"></i>287</span>
                            <span class="ms-3"><i class="fas fa-heart me-1 text-danger"></i>24</span>

                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary w-75">Voir la promo</a>

                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-light border me-2"><i
                                        class="far fa-heart text-dark"></i></button>
                                <button class="btn btn-outline-light border"><i
                                        class="fas fa-share-alt text-dark"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-primary text-center py-5 text-white ">
        <h1 class="title">Rejoignez la communauté PromoHub</h1>
        <p class="">Partagez vos meilleures trouvailles et découvrez les offres que d'autres utilisateurs ont
            dénichées pour vous.
        </p>
        <div class="d-flex justify-content-center gap-3">
            <a href="{{ route('createpromo') }}" class="btn btn-white  text-primary">Publier ma premiere promo</a>
            <a href="#" class="btn btn-white  text-primary">En savoir plus</a>

        </div>
    </section>
@endsection
