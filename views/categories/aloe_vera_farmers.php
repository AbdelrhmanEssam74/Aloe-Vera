<section class="category-hero py-lg-16 pt-8 pb-8 bg-light" style="margin-top: 7rem;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12 col-12">
        <h2 class="h1 fw-bold mt-3 mb-4 text-success"><?= $translation['aloe_vera_farmers']['heading'] ?></h2>
        <p class="display-6 fs-2 mb-4 text-secondary">
          <?= $translation['aloe_vera_farmers']['paragraph'] ?>
        </p>
      </div>
      <div class="col-lg-5 col-md-12 col-12 text-center">
        <img src="/assets/images/farmer-aloe-vera.webp" alt="Farmer Aloe Vera" class="img-fluid rounded shadow-lg">
      </div>
    </div>
  </div>
</section>

<div class="container my-5">
  <?php if (!app()->session->get('login')): ?>
    <div class="position-relative p-5 text-center bg-white border border-dashed rounded-5 shadow-sm">
      <i class="fa-solid fa-ban text-danger mb-3" style="font-size: 30px;"></i>
      <h1 class="text-primary"><?= $translation['aloe_vera_farmers']['not_allowed']['title'] ?></h1>
      <p class="col-lg-6 mx-auto mb-4 text-secondary">
        <?= $translation['aloe_vera_farmers']['not_allowed']['text'] ?>
      </p>
      <div>
        <a href="/login" class="btn btn-primary btn-lg px-4 me-3 mb-2"><?= $translation['login'] ?></a>
        <a href="/signup" class="btn btn-outline-primary btn-lg px-4 mb-2"><?= $translation['register'] ?></a>
      </div>
    </div>
  <?php else: ?>
    <div id="farmer-form" class="container p-3">
      <?php if (!empty(app()->session->getFlash('success'))): ?>
        <div class="alert alert-success text-center mb-4">
          <?= app()->session->getFlash('success') ?>
        </div>
      <?php endif; ?>

      <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
          <h3 class="mb-0"><?= $translation['farmer_form']['heading'] ?></h3>
        </div>
        <div class="card-body">
          <form action="/categories/farmers-upload" method="POST" enctype="multipart/form-data" class="row">
            <div class="col-md-12 mb-4">
              <label for="product_title" class="form-label"><?= $translation['farmer_form']['product_title'] ?></label>
              <input type="text" id="product_title" name="product_title" class="form-control <?= app()->session->getFlash('errors')['product_title'][0] ? 'is-invalid' : ''; ?>" placeholder="<?= $translation['farmer_form']['product_title_placeholder'] ?>">
              <small class="text-danger"><?= app()->session->getFlash('errors')['product_title'][0] ?? '' ?></small>
            </div>

            <div class="col-md-4 mb-4">
              <label for="cactus_type" class="form-label"><?= $translation['farmer_form']['cactus_type'] ?></label>
              <select id="cactus_type" name="cactus_type" class="form-select <?= app()->session->getFlash('errors')['cactus_type'][0] ? 'is-invalid' : ''; ?>">
                <option value=""><?= $translation['farmer_form']['select_type'] ?></option>
                <option value="medicinal"><?= $translation['farmer_form']['type1'] ?></option>
                <option value="industrial"><?= $translation['farmer_form']['type2'] ?></option>
                <option value="ornamental"><?= $translation['farmer_form']['type3'] ?></option>
              </select>
              <small class="text-danger"><?= app()->session->getFlash('errors')['cactus_type'][0] ?? '' ?></small>
            </div>

            <div class="col-md-4 mb-4">
              <label for="AvailableQuantity" class="form-label"><?= $translation['farmer_form']['available_quantity'] ?> (<small class="small-text"><?= $translation['farmer_form']['weight'] ?></small>)</label>
              <input type="number" id="AvailableQuantity" name="available_quantity" class="form-control <?= app()->session->getFlash('errors')['available_quantity'][0] ? 'is-invalid' : ''; ?>" placeholder="<?= $translation['farmer_form']['available_quantity_placeholder'] ?>">
              <small class="text-danger"><?= app()->session->getFlash('errors')['available_quantity'][0] ?? '' ?></small>
            </div>

            <div class="col-md-4 mb-4">
              <label for="price" class="form-label"><?= $translation['farmer_form']['price'] ?>
                (<small class="small-text"><?= $translation['farmer_form']['price_per'] ?></small>)
              </label>
              <input type="number" id="price" name="price" class="form-control <?= app()->session->getFlash('errors')['price'][0] ? 'is-invalid' : ''; ?>" placeholder="<?= $translation['farmer_form']['price_placeholder'] ?>">
              <small class="text-danger"><?= app()->session->getFlash('errors')['price'][0] ?? '' ?></small>
            </div>

            <div class="col-md-12 mb-4">
              <label for="textarea-input" class="form-label"><?= $translation['farmer_form']['additional_details'] ?></label>
              <textarea class="form-control" name="additional-details" id="textarea-input" placeholder="<?= $translation['farmer_form']['additional_details_placeholder'] ?>"></textarea>
            </div>

            <div class="col-md-12 mb-4">
              <label for="imageUpload" class="form-label"><?= $translation['farmer_form']['upload_image'] ?></label>
              <input type="file" class="form-control" multiple accept="image/*" name="images[]" id="imageUpload">
              <small class="text-danger"><?= app()->session->getFlash('errors')['images'][0] ?? '' ?></small>
            </div>

            <div class="col-md-12 text-center">
              <button type="submit" class="btn btn-success btn-lg px-5"><?= $translation['farmer_form']['submit'] ?></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>