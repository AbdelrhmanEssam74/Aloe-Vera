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
    <div class="position-relative p-5 text-center text-muted bg-white border border-dashed rounded-5 shadow-sm">
      <i class="fa-solid fa-ban text-danger mb-3" style="font-size:30px"></i>
      <h1 class="text-primary"><?= $translation['aloe_vera_farmers']['not_allowed']['title'] ?></h1>
      <p class="col-lg-6 mx-auto mb-4 text-secondary">
        <?= $translation['aloe_vera_farmers']['not_allowed']['text'] ?>
      </p>
      <a href="/login" class="btn btn-primary px-5 me-2 mb-2"><?= $translation['login'] ?></a>
      <a href="/signup" class="btn btn-outline-primary px-5 mb-2"><?= $translation['register'] ?></a>
    </div>
  <?php else: ?>
    <div id="farmer-form" class="container p-3">
      <?php if (!empty(app()->session->getFlash('success'))): ?>
        <div class="alert alert-success text-center mb-4">
          <?= app()->session->getFlash('success') ?>
        </div>
      <?php endif; ?>

      <div class="card mb-4 shadow-sm">
        <div class="card-header bg-primary text-white">
          <h3 class="mb-0">Fill the Platform</h3>
        </div>
        <div class="card-body">
          <form action="/categories/farmers-upload" method="POST" enctype="multipart/form-data" class="row">
            <div class="col-md-12 mb-4">
              <label for="product_title" class="form-label">Product Title</label>
              <input type="text" id="product_title" name="product_title" class="form-control" placeholder="Product Title">
              <div class="errorHelp text-danger">
                <?= app()->session->getFlash('errors')['product_title'][0] ?? '' ?>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <label for="cactus_type" class="form-label">Cactus Type</label>
              <select id="cactus_type" name="cactus_type" class="form-select">
                <option value="">Select Cactus</option>
                <option value="medicinal">Medicinal</option>
                <option value="industrial">Industrial</option>
                <option value="ornamental">Ornamental</option>
              </select>
              <div class="errorHelp text-danger">
                <?= app()->session->getFlash('errors')['cactus_type'][0] ?? '' ?>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <label for="AvailableQuantity" class="form-label">Available Quantity <span class="small">(Weight or number of cactus units)</span></label>
              <input type="number" id="AvailableQuantity" name="available_quantity" class="form-control" placeholder="Weight or number of cactus units">
              <div class="errorHelp text-danger">
                <?= app()->session->getFlash('errors')['available_quantity'][0] ?? '' ?>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <label for="price" class="form-label">Price <span class="small">(Price per kilogram or unit)</span></label>
              <input type="number" id="price" class="form-control" name="price" placeholder="Price per kilogram or unit">
              <div class="d-flex gap-3 mt-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="on" name="negligible" id="negligible_on" checked>
                  <label class="form-check-label" for="negligible_on">Negligible</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="off" name="negligible" id="negligible_off">
                  <label class="form-check-label" for="negligible_off">Non-Negligible</label>
                </div>
              </div>
              <div class="errorHelp text-danger">
                <?= app()->session->getFlash('errors')['price'][0] ?? '' ?>
              </div>
            </div>

            <div class="col-md-12 mb-4">
              <label for="textarea-input" class="form-label">Additional Details (Optional)</label>
              <textarea class="form-control" name="additional-details" id="textarea-input" placeholder="Additional Details"></textarea>
            </div>

            <div class="col-md-12 mb-4">
              <label for="imageUpload" class="form-label">Upload Images</label>
              <input type="file" class="form-control" multiple accept="image/*" name="images[]" id="imageUpload">
            </div>

            <div class="col-md-12 text-center">
              <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>