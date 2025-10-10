@extends('layouts.app')
@section('content')

    

  <!-- Navbar -->


  <!-- Page content -->
  <div class="container py-5">
    <h2 class="fw-bold mb-1">Créer une nouvelle promo</h2>
    <p class="text-muted mb-4">Partagez vos meilleures trouvailles avec la communauté</p>

    <div class="row g-4">
      <!-- Formulaire -->
      <div class="col-lg-8">
        <form>
          <!-- Informations de base -->
          <div class="card p-4 mb-4">
            <h5 class="fw-semibold mb-3">Informations de base</h5>
            <div class="mb-3">
              <label class="form-label">Titre de la promo *</label>
              <input type="text" class="form-control" placeholder="Ex: Smartphone Samsung Galaxy S24">
            </div>
            <div class="mb-3">
              <label class="form-label">Description *</label>
              <textarea class="form-control" rows="3" placeholder="Décrivez le produit en détail..."></textarea>
            </div>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Catégorie</label>
                <select class="form-select">
                  <option>Sélectionner une catégorie</option>
                  <option>Électronique</option>
                  <option>Mode</option>
                  <option>Maison</option>
                  <option>Sport</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Magasin / Site</label>
                <input type="text" class="form-control" placeholder="Ex: Amazon, Fnac, etc.">
              </div>
            </div>
            <div class="mt-3">
              <label class="form-label">Localisation (optionnelle)</label>
              <input type="text" class="form-control" placeholder="Ex: Paris, France">
            </div>
          </div>

          <!-- Prix et réduction -->
          <div class="card p-4 mb-4">
            <h5 class="fw-semibold mb-3">Prix et réduction</h5>
            <div class="row g-3">
              <div class="col-md-4">
                <label class="form-label">Prix original (€)</label>
                <input type="number" step="0.01" class="form-control" placeholder="Ex: 499.99">
              </div>
              <div class="col-md-4">
                <label class="form-label">Prix réduit (€)</label>
                <input type="number" step="0.01" class="form-control" placeholder="Ex: 349.99">
              </div>
              <div class="col-md-4">
                <label class="form-label">Date d’expiration</label>
                <input type="date" class="form-control">
              </div>
            </div>
          </div>

          <!-- Image du produit -->
          <div class="card p-4 mb-4">
            <h5 class="fw-semibold mb-3">Image du produit</h5>
            <div class="upload-box">
              <i class="bi bi-upload fs-1"></i>
              <p class="mt-2">Glissez une image ici ou cliquez pour importer</p>
              <input type="file" class="form-control mt-3">
            </div>
          </div>
        </form>
      </div>

      <!-- Aperçu -->
      <div class="col-lg-4">
        <div class="card p-4">
          <h5 class="fw-semibold mb-3"><i class="bi bi-eye me-2"></i>Aperçu</h5>
          <div class="upload-box py-5 mb-3">
            <i class="bi bi-upload fs-2"></i>
            <p class="mt-2 mb-0 small">Aucune image pour le moment</p>
          </div>
          <h6 class="fw-bold mb-1">Titre de votre promo</h6>
          <p class="text-muted small">Description du produit...</p>
          <div class="d-grid gap-2 mt-4">
            <button class="btn btn-primary">Publier la promo</button>
            <button class="btn btn-outline-secondary">Enregistrer comme brouillon</button>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
