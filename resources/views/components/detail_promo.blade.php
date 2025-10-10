@extends('layouts.app')
@section('content')

    <div class="container py-4">
    <a href="#" class="text-dark text-decoration-none mb-4 d-inline-block">
        <i class="fas fa-arrow-left me-2"></i> Retour aux promos
    </a>

    <div class="row">
        
        <div class="col-md-8">
            
            <div class="card mb-4 border-0 shadow-sm">
                <div class="position-relative">
                    
                    <img src="{{ asset('assets/images/pro1.jpg') }}" class="card-img-top rounded-3" alt="Casque Audio" style="height: 450px; object-fit: cover;">
                    
                    <span class="badge bg-dark position-absolute top-50 start-50 translate-middle py-2 px-3 fw-normal" style="opacity: 0.8;">
                        Promo expirée
                    </span>

                    <div class="position-absolute top-0 start-0 p-3">
                        <span class="badge rounded-pill bg-danger me-2">-30%</span>
                        <span class="badge rounded-pill bg-dark">Audio</span>
                    </div>
                </div>
            </div>

            <h1 class="h3 fw-bold">Casque Audio Sony WH-1000XM5</h1>
            <p class="text-muted mb-4">Casque sans fil avec réduction de bruit active, autonomie 30h</p>

            <div class="d-flex align-items-center text-muted small mb-4">
                <span class="me-3"><i class="fas fa-eye me-1"></i> 756 vues</span>
                <span class="me-3"><i class="fas fa-heart text-danger me-1"></i> 89 favoris</span>
                <span><i class="far fa-clock me-1"></i> Publié il y a 2 jours</span>
            </div>

            <div class="card p-3 border-0 shadow-sm">
                <h5 class="fw-bold mb-3">Informations du magasin</h5>
                
                <p class="mb-2 text-dark">
                    <i class="fas fa-store me-2 text-muted"></i> AudioPlus
                </p>
                <p class="mb-0 text-dark">
                    <i class="fas fa-calendar me-2 text-muted"></i> Expire le 20 Janvier 2024
                </p>
            </div>
            
        </div>

        <div class="col-md-4">
            
            <div class="card p-4 mb-3 shadow-sm border-0">
                <div class="text-center">
                    <span class="fs-1 fw-bolder text-danger">279.99€</span>
                    
                    <div class="d-flex justify-content-center align-items-center mt-1 ">
                        <span class="text-decoration-line-through text-muted me-2 small">399.99€</span>
                        <span class="badge bg-success small fw-normal">-30%</span>
                    </div>
                </div>
            </div>
            
            <div class="card p-3 mb-3 border-0" style="background-color: #e6ffe6;">
                <p class="text-center text-success mb-0 fw-bold">Vous économisez 120.00€</p>
                <p class="text-center text-success mb-0 small" style="opacity: 0.8;">Soit 30% de réduction</p>
            </div>

            <div class="card p-3 mb-4 border-0">
                <button class="btn btn-primary btn-lg w-100 mb-3" disabled style="background-color: #8bb7f3; border-color: #8bb7f3;">
                    Promo expirée
                </button>
                
                <div class="d-flex justify-content-center">
                    <a href="#" class="text-decoration-none text-dark me-4">
                        <i class="far fa-heart me-1"></i> Retirer
                    </a>
                    <a href="#" class="text-decoration-none text-dark">
                        <i class="fas fa-share-alt me-1"></i> Partager
                    </a>
                </div>
            </div>

            <div class="card p-3 shadow-sm border-0">
                <h5 class="fw-bold mb-0">Promos similaires</h5>
                </div>
            
        </div>
    </div>
</div>

@endsection