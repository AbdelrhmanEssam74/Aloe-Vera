<!-- Hero Section -->
<section class="benefits-hero-section text-center">
  <div class="container">
    <h1 class="display-4 fw-bold"><?= $translation['application_section']['title'] ?></h1>
    <p class="lead"><?= $translation['application_section']['lead'] ?></p>
  </div>
</section>

<!-- About Aloe Vera Section -->
<div class="container my-5">
  <div class="row align-items-center">
    <div class="col-lg-6">
      <h2 class="fw-bold mt-3 mb-4 text-success">
        <?= $translation['application_section']['aloe-vera']['title'] ?>
      </h2>
      <p> <?= $translation['application_section']['aloe-vera']['text'] ?></p>
    </div>
    <div class="col-lg-6 text-center">
      <img src="/assets/images/aloe-about.webp" alt="Aloe Vera Plant" class="img-fluid rounded-card">
    </div>
  </div>
</div>

<!-- Applications Section -->
<div class="applications-section py-5 bg-light mt-4">
  <div class="container">
    <h2 class="text-center fw-bold mb-4 text-success"><?= $translation['application_section']['applications']['title'] ?></h2>
    <div class="row g-4">
      <!-- Application 1: Skincare -->
      <div class="col-md-4">
        <div class="card rounded-card">
          <img src="/assets/images/benefit-skin.webp" class="card-img-top" alt="Skincare">
          <div class="card-body">
            <h5 class="card-title"><?= $translation['application_section']['applications']['application1']['title'] ?></h5>
            <p class="card-text"><?= $translation['application_section']['applications']['application1']['text'] ?></p>
          </div>
        </div>
      </div>
      <!-- Application 2: Digestion -->
      <div class="col-md-4">
        <div class="card rounded-card">
          <img src="/assets/images/benefit-digestion.jpg" class="card-img-top" alt="Digestion">
          <div class="card-body">
            <h5 class="card-title"><?= $translation['application_section']['applications']['application2']['title'] ?></h5>
            <p class="card-text"><?= $translation['application_section']['applications']['application2']['text'] ?></p>
          </div>
        </div>
      </div>
      <!-- Application 3: Healing -->
      <div class="col-md-4">
        <div class="card rounded-card">
          <img src="/assets/images/benefit-healing.jpeg" class="card-img-top" alt="Healing">
          <div class="card-body">
            <h5 class="card-title"><?= $translation['application_section']['applications']['application3']['title'] ?></h5>
            <p class="card-text"><?= $translation['application_section']['applications']['application3']['text'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Gallery Section -->
<div class="container my-5">
  <h2 class="text-center fw-bold mb-4 text-success"><?= $translation['application_section']['gallery']['title'] ?></h2>
  <div class="row g-3">
    <div class="col-md-4">
      <img src="/assets/images/gallery1.jpeg" alt="Aloe Vera Product" class="img-fluid rounded">
    </div>
    <div class="col-md-4">
      <img src="/assets/images/benefit-skin.webp" alt="Aloe Vera Juice" class="img-fluid rounded">
    </div>
    <div class="col-md-4">
      <img src="/assets/images/aloe-hero.webp" alt="Aloe Vera Plant" class="img-fluid rounded">
    </div>
  </div>
</div>
