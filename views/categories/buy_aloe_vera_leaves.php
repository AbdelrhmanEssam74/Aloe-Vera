<?php include view_path() . 'partials/navbar.php'; ?>
<section class="category-hero py-lg-16 pt-8 pb-8 bg-light" style="margin-top: 7rem;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12 col-12">
        <h2 class="h1 fw-bold mt-3 mb-4 text-success"><?= $translation['buy_leaves']['heading'] ?></h2>
        <p class="display-6 fs-2 mb-4 text-secondary">
          <?= $translation['buy_leaves']['paragraph'] ?>
        </p>
      </div>
      <div class="col-lg-5 col-md-12 col-12 text-center">
        <img src="/assets/images/category1.jpg" alt="Farmer Aloe Vera" class="img-fluid rounded shadow-lg">
      </div>
    </div>
  </div>
</section>
<div class="container py-5" style="margin-top: 100px">
  <!-- Filter and Search Section -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div class="filter-container">
      <a data-filter="null" class="btn btn-outline-primary me-2"> <?= $translation['buy_leaves']['filters']['filter1'] ?></a>
      <a data-filter="medicinal" class="btn btn-outline-primary me-2">
        <?= $translation['buy_leaves']['filters']['filter2'] ?>
      </a>
      <a data-filter="ornamental" class="btn btn-outline-primary me-2">
        <?= $translation['buy_leaves']['filters']['filter3'] ?></a>
      <a data-filter="industrial" class="btn btn-outline-primary me-2">
        <?= $translation['buy_leaves']['filters']['filter4'] ?></a>
    </div>
  </div>

  <!-- Product Section Headline -->
  <h2 class="text-center mb-5"> <?= $translation['buy_leaves']['farmers_products'] ?></h2>

  <!-- Product Grid -->
  <div id="product-parent-container" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 g-5">
  </div>

  <!-- Pagination -->
  <nav class="mt-5">
    <ul class="pagination justify-content-center">
    </ul>
  </nav>
</div>
<?php
