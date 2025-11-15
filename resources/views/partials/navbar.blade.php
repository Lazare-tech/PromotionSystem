<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3 sticky-top">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center fw-bold text-primary" href="{{ route('home') }}">
      <i class="fas fa-tags me-2"></i> PromoHub
    </a>

    <!-- Bouton burger mobile -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Contenu du menu -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

      <!-- Barre de recherche -->
      <form class="d-flex align-items-center mx-auto my-3 my-lg-0 w-100" style="max-width: 400px;">
        <div class="input-group">
          <span class="input-group-text bg-white border-end-0">
            <i class="fas fa-search text-muted"></i>
          </span>
          <input type="search" class="form-control border-start-0" placeholder="Rechercher des promos...">
        </div>
      </form>

      <!-- Liens -->
      <ul class="navbar-nav align-items-center ms-lg-3">
      <li class="nav-item me-2">
          <a class="nav-link fw-semibold" href="{{ route('home') }}">Accueil</a>
        </li>

        <li class="nav-item me-2">
          <a class="nav-link fw-semibold" href="{{ route('all_promo') }}">Toutes les promos</a>
        </li>

        <li class="nav-item me-2">
          <a class="btn btn-primary fw-semibold px-3" href="{{ route('createpromo') }}">
            + Créer une promo
          </a>
        </li>

        <li class="nav-item me-2">
          <a class="nav-link text-dark" href="#"><i class="far fa-heart fs-5"></i></a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="#"><i class="fas fa-user-circle fs-5"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
