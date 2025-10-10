@extends('layouts.app')

@section('content')
    <!-- Contenu principal -->
    <div class="container-fluid py-5">
        <div class="mb-4">
            <h2 class="fw-bold">Toutes les promos</h2>
            <p class="text-muted">6 promos trouvées</p>
        </div>

        <!-- Barre de filtres complète -->
        <div class="filter-container bg-white p-4 rounded-4 shadow-sm mb-5">

    <div class="filter-wrapper d-flex flex-wrap align-items-center justify-content-between gap-3">

      <!-- Barre de recherche -->
      <div class="search-bar flex-grow-1">
        <form class="w-100">
          <div class="input-group w-100">
            <span class="input-group-text bg-white border-end-0">
              <i class="fas fa-search text-muted"></i>
            </span>
            <input type="search" class="form-control border-start-0" placeholder="Rechercher des promos...">
          </div>
        </form>
      </div>

      <!-- Catégories -->
      <div class="categories d-flex flex-wrap  flex-grow-1 text-center">
        <button class="filter-btn active">Tous</button>
        <button class="filter-btn">Électronique</button>
        <button class="filter-btn">Mode</button>
        <button class="filter-btn">Maison</button>
        <button class="filter-btn">Informatique</button>
        <button class="filter-btn">Beauté</button>
        <button class="filter-btn">Audio</button>
        <button class="filter-btn">Cuisine</button>
        <button class="filter-btn">Auto</button>
        <button class="filter-btn">Sport</button>
      </div>

      <!-- Tri avec icône -->
      <div class="sort-filter d-flex align-items-center gap-2">
        <i class="fas fa-filter text-muted"></i>
        <div class="dropdown w-100">
          <button class="btn btn-light border dropdown-toggle w-100" data-bs-toggle="dropdown">
            Plus récent
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Plus récent</a></li>
            <li><a class="dropdown-item" href="#">Moins cher</a></li>
            <li><a class="dropdown-item" href="#">Plus populaire</a></li>
          </ul>
        </div>
      </div>

    </div>
        </div>
    </div>


    <!-- Liste des cartes -->
    <section class="container">
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
        </div>
    </section>
@endsection
