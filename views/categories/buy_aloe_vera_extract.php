<section class="category-hero py-lg-16 pt-8 pb-8 bg-light" style="margin-top: 7rem;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12 col-12">
        <h2 class="h1 fw-bold mt-3 mb-4 text-success"><?= $translation['buy_extract']['heading'] ?></h2>
        <p class="display-6 fs-2 mb-4 text-secondary">
          <?= $translation['buy_extract']['paragraphs'] ?>
        </p>
        <a href="#products" class="btn btn-outline-success btn-lg shadow-sm"><?= $translation['buy_extract']['explore'] ?> </a>
      </div>
      <div class="col-lg-5 col-md-12 col-12 text-center">
        <img src="/assets/images/category1.jpg" alt="Farmer Aloe Vera" class="img-fluid rounded shadow-lg">
      </div>
    </div>
  </div>
</section>


<div class="container py-5" style="margin-top: 100px">
  <!-- Product Section Headline -->
  <h2 class="text-center mb-5" id="products"><?= $translation['buy_extract']['products_section']['title'] ?></h2>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <div class="product-card">
          <div id="productImages" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/assets/images/product1.jpg" class="d-block" alt="Product Image 1">
              </div>
              <div class="carousel-item">
                <img src="/assets/images/product2.jpg" class="d-block" alt="Product Image 2">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#productImages" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productImages" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="product-info">
            <h5>Product Title</h5>
            <p class="text-muted">EGP 200 per 250ml</p>
            <div class="mb-2">
              <label for="quantity"><?= $translation['buy_extract']['products_section']['quantity'] ?>:</label>
              <input type="number" id="quantity" name="quantity" min="1" value="1" class="form-control w-50 d-inline">
            </div>
            <button class="btn btn-primary w-100"><?= $translation['buy_extract']['products_section']['add_to_cart'] ?></button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <nav class="mt-5">
    <ul class="pagination justify-content-center">
    </ul>
  </nav>
</div>
<?php
