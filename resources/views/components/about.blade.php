@extends('layouts.app')
@section('title', 'À propos de PromoHub')
@section('content')
  
 
  <!-- Section À propos -->
  <section class="hero-apropos">
    <h1 class="fw-bold display-5">À propos de PromoHub</h1>
    <p class="lead mt-3">La plateforme qui révolutionne la façon dont vous trouvez et profitez des<br>meilleures promotions sur le web.</p>
  </section>

  <!-- Section Notre Histoire -->
  <section class="container py-5">
    <h2 class="section-title">Notre Histoire</h2>
    <p class="text-center text-muted px-3">
      PromoHub est né en 2024 d'une simple constatation : trouver de vraies bonnes promos
      en ligne était devenu un véritable parcours du combattant. Entre les fausses réductions,
      les offres expirées et les arnaques, il était temps de créer une solution fiable,
      transparente et communautaire.
    </p>
  </section>

  <!-- Section Nos Valeurs -->
  <section class="container pb-5">
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="valeur-card">
          <div class="valeur-icon"><i class="fas fa-bullseye"></i></div>
          <h5 class="valeur-title">Notre Mission</h5>
          <p class="valeur-text">Rendre les meilleures promos accessibles à tous, en un seul endroit.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="valeur-card">
          <div class="valeur-icon"><i class="fas fa-users"></i></div>
          <h5 class="valeur-title">Notre Communauté</h5>
          <p class="valeur-text">Plus de 10 000 membres qui partagent et votent pour les meilleurs deals.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="valeur-card">
          <div class="valeur-icon"><i class="fas fa-bolt"></i></div>
          <h5 class="valeur-title">Rapidité</h5>
          <p class="valeur-text">Des promos mises à jour en temps réel pour ne jamais rater une occasion.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="valeur-card">
          <div class="valeur-icon"><i class="fas fa-shield-alt"></i></div>
          <h5 class="valeur-title">Fiabilité</h5>
          <p class="valeur-text">Tous les deals sont vérifiés par notre équipe avant publication.</p>
        </div>
      </div>
    </div>
  </section>



@endsection