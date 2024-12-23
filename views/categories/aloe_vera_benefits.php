  <style>
    .same-size {
      width: 100%;
      /* Adjust to parent container */
      height: 350px;
      /* Fixed height */
      object-fit: cover;
      /* Ensures image aspect ratio is maintained */
    }
  </style>
  <?php include view_path() . 'partials/navbar.php'; ?>
  <!-- Hero Section -->
  <section class="benefits-hero-section text-center">
    <div class="container">
      <h1 class="display-4 fw-bold"><?= $translation['benefit_section']['title'] ?></h1>
      <p class="lead"><?= $translation['benefit_section']['lead'] ?></p>
    </div>
  </section>

  <!-- About Aloe Vera Section -->
  <div class="container my-5">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h2 class="fw-bold mt-3 mb-4 text-success">
          <?= $translation['benefit_section']['aloe-vera']['title'] ?>
          <h2>
            <p> <?= $translation['benefit_section']['aloe-vera']['text'] ?></p>
      </div>
      <div class="col-lg-6 text-center">
        <img src="/assets/images/aloe-about.webp" alt="Aloe Vera Plant" class="img-fluid rounded-card">
      </div>
    </div>
  </div>

  <!-- Benefits Section -->
  <div class="benefits-section py-5 bg-light mt-4">
    <div class="container">
      <h2 class="text-center fw-bold mb-4 text-success"> <?= $translation['benefit_section']['benefits']['title'] ?></h2>
      <div class="row g-4">
        <!-- Benefit 1 -->
        <div class="col-md-4">
          <div class="card rounded-card">
            <img src="/assets/images/benefit-skin.webp" class="card-img-top" alt="Skincare">
            <div class="card-body">
              <h5 class="card-title">
                <?= $translation['benefit_section']['benefits']['benefit1']['title'] ?>
              </h5>
              <p class="card-text"> <?= $translation['benefit_section']['benefits']['benefit1']['text'] ?></p>
            </div>
          </div>
        </div>
        <!-- Benefit 2 -->
        <div class="col-md-4">
          <div class="card rounded-card">
            <img src="/assets/images/benefit-digestion.jpg" class="card-img-top" alt="Digestion">
            <div class="card-body">
              <h5 class="card-title"> <?= $translation['benefit_section']['benefits']['benefit2']['title'] ?></h5>
              <p class="card-text"> <?= $translation['benefit_section']['benefits']['benefit2']['text'] ?></p>
            </div>
          </div>
        </div>
        <!-- Benefit 3 -->
        <div class="col-md-4">
          <div class="card rounded-card">
            <img src="/assets/images/benefit-healing.jpeg" class="card-img-top" alt="Healing">
            <div class="card-body">
              <h5 class="card-title"> <?= $translation['benefit_section']['benefits']['benefit3']['title'] ?></h5>
              <p class="card-text"> <?= $translation['benefit_section']['benefits']['benefit3']['text'] ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Gallery Section -->
  <div class="container my-5">
    <h2 class="text-center fw-bold mb-4 text-success"> <?= $translation['benefit_section']['gallery']['title'] ?></h2>
    <p class="text-center"><?= $translation['benefit_section']['gallery']['description'] ?></p>
    <div class="row g-3 mt-4">
      <div class="col-md-4">
        <div class="card rounded-card shadow">
          <img src="/assets/images/gallery1.jpg" class="card-img-top same-size" alt="Aloe Vera Product">
          <div class="card-body">
            <h5 class="card-title"><?= $translation['benefit_section']['gallery']['app1'] ?></h5>
            <p class="card-text"> <?= $translation['benefit_section']['gallery']['app1_desc'] ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card rounded-card shadow">
          <img src="/assets/images/gallery2.jpg" class="card-img-top same-size" alt="Aloe Vera Product">
          <div class="card-body">
            <h5 class="card-title"><?= $translation['benefit_section']['gallery']['app2'] ?></h5>
            <p class="card-text"> <?= $translation['benefit_section']['gallery']['app2_desc'] ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card rounded-card shadow">
          <img src="/assets/images/gallery3.jpg" class="card-img-top same-size" alt="Aloe Vera Product">
          <div class="card-body">
            <h5 class="card-title"><?= $translation['benefit_section']['gallery']['app3'] ?></h5>
            <p class="card-text"> <?= $translation['benefit_section']['gallery']['app3_desc'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>