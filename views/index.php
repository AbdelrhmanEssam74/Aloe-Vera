<?php include view_path() . 'partials/ofCanvas.php' ?>
<?php
$langCode = getLanguage();
$dir = ($langCode === 'ar') ? 'rtl' : 'ltr';
?>
<!--StartHero Section-->
<div class="container-fluid  main-section " style="background-image: url('/assets/images/background.jpg');">
  <div class="p-5 mb-4 lc-block col-xxl-7 col-lg-8 col-12 container">
    <div class="lc-block ">
      <div>
        <h2 class="fw-bolder display-3 col-lg-6 col-md-6 col-sm-6"><?= $translation['Hero Title'] ?> </h2>
      </div>
    </div>
    <div class="lc-block col-md-8">
      <div>
        <p class="lead col-lg-6 col-md-6 col-sm-6">
          <?= $translation['Hero Paragraph'] ?>
        </p>
      </div>
    </div>
    <div class="button-container">
      <a href="categories/buy-aloe-vera-leaves" class="shop-button" dir="<?= $dir ?>">
        <?= $translation['Hero Main Button'] ?>
        <span class="arrow">
          <i class="fa-solid <?= $langCode === 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' ?>"></i>
        </span>
      </a>
    </div>
  </div>
</div>
<!--End Hero Section-->

<!--Start CTA Section-->
<section class="cta-section">
  <div class="container py-lg-8">
    <!--row-->
    <div class="row align-items-center">
      <div class="offset-xl-1 col-xl-4 col-lg-6 d-none d-lg-block">
        <!--img-->
        <div class="position-relative">
          <img src="/assets/images/item2.jpg" alt="mentor img" class="img-fluid w-100 rounded-4">
        </div>
      </div>
      <div class="col-xl-6 col-lg-5 offset-lg-1 offset-xl-1">
        <div class="d-flex flex-column gap-6">
          <div class="d-flex flex-column gap-2">
            <!--heading-->
            <h2 class="mb-4 h1"><?= $translation['CTA Section Title'] ?></h2>
          </div>
          <div class="d-flex flex-column gap-8">
            <div class="d-flex flex-column gap-5">
              <div class="row gap-xxl-3 gap-0">
                <div class="col-md-1 col-lg-2 col-xxl-1 col-2">
                  <!--svg-->
                  <div class="icon-shape text-center icon-lg bg-danger-subtle rounded-4">
                    <img src="/assets/images/skin-care.png" width="40px" alt="">
                  </div>
                </div>
                <!--text-->
                <div class="col-md-6 col-lg-10 col-xxl-6 col-10">
                  <h4 class="mb-0"><?= $translation['CTA Section item1 text'] ?></h4>
                </div>
              </div>
              <div class="row gap-xxl-3">
                <div class="col-md-1 col-lg-2 col-xxl-1 col-2">
                  <!--svg-->
                  <div class="icon-shape text-center icon-lg bg-warning-subtle rounded-4">
                    <img src="/assets/images/hair.png" width="40px" alt="">
                  </div>
                </div>
                <!--text-->
                <div class="col-md-6 col-lg-10 col-xxl-6 col-10">
                  <h4 class="mb-0"><?= $translation['CTA Section item2 text'] ?></h4>
                </div>
              </div>
              <div class="row gap-xxl-3">
                <div class="col-md-1 col-lg-2 col-xxl-1 col-2">
                  <!--svg-->
                  <div class="icon-shape  text-center icon-lg bg-success-subtle rounded-4">
                    <img src="/assets/images/booster.png" width="40px" alt="">
                  </div>
                </div>
                <!--text-->
                <div class="col-md-6 col-lg-10 col-xxl-6 col-10">
                  <h4 class="mb-0"> <?= $translation['CTA Section item3 text'] ?></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End CTA Section-->

<!--Start Categories Section-->
<section id="categories" class="py-6 category-section mb-4">
  <img src="/assets/images/item1.png" class="category-section-img">
  <img src="/assets/images/item1.png" class="category-section-img img2">
  <div class="container">
    <div class="section-header">
      <h1 class="display-5  fw-medium"><?= $translation['Categories Section Title'] ?></h1>
    </div>
    <div class="cards-container">
      <div class="card category-item">
        <a href="categories/aloe-vera-farmers">
          <img src="/assets/images/category1.jpg" class="card-img-top rounded img-4by3-md">
        </a>
        <div class="card-body">
          <h5 class="card-title"><?= $translation['Categories Section category1 text'] ?></h5>
        </div>
        <div class="card-footer">
          <a href="categories/aloe-vera-farmers" class="btn btn-primary"><?= $translation['Explore button'] ?>
            <i class="fa-solid <?= $langCode === 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' ?>"></i>
          </a>
        </div>
      </div>
      <div class="card category-item">
        <a href="categories/buy-aloe-vera-leaves">
          <img src="/assets/images/category2.jpg" class="card-img-top rounded img-4by3-md">
        </a>
        <div class="card-body">
          <h5 class="card-title"><?= $translation['Categories Section category2 text'] ?></h5>
        </div>
        <div class="card-footer">
          <a href="categories/buy-aloe-vera-leaves" class="btn btn-primary"><?= $translation['Explore button'] ?>
            <i class="fa-solid <?= $langCode === 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' ?>"></i>
          </a>
        </div>
      </div>
      <div class="card category-item">
        <a href="categories/buy-aloe-vera-extract">
          <img src="/assets/images/category3.jpg" class="card-img-top rounded img-4by3-md">
        </a>
        <div class="card-body">
          <h5 class="card-title"><?= $translation['Categories Section category3 text'] ?></h5>
        </div>
        <div class="card-footer">
          <a href="categories/buy-aloe-vera-extract" class="btn btn-primary"><?= $translation['Explore button'] ?>
            <i class="fa-solid <?= $langCode === 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' ?>"></i>
          </a>
        </div>
      </div>
      <div class="card category-item">
        <a href="categories/aloe-vera-benefits">
          <img src="/assets/images/category4.jpg" class="card-img-top rounded img-4by3-md">
        </a>
        <div class="card-body">
          <h5 class="card-title"><?= $translation['Categories Section category4 text'] ?></h5>
        </div>
        <div class="card-footer">
          <a href="categories/aloe-vera-benefits" class="btn btn-primary"><?= $translation['Explore button'] ?>
            <i class="fa-solid <?= $langCode === 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' ?>"></i>
          </a>
        </div>
      </div>
      <!-- <div class="card category-item">
        <a href="categories/aloe-vera-benefits">
          <img src="/assets/images/gallery1.jpeg" class="card-img-top rounded img-4by3-md">
        </a>
        <div class="card-body">
          <h5 class="card-title"><?= $translation['Categories Section category5 text'] ?></h5>
        </div>
        <div class="card-footer">
          <a href="categories/aloe-vera-benefits" class="btn btn-primary"><?= $translation['Explore button'] ?>
            <i class="fa-solid <?= $langCode === 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' ?>"></i>
          </a>
        </div>
      </div> -->
    </div>
  </div>
</section>
<!--End Categories Section-->