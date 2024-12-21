<div class="container">
  <div class="inner-container">
    <div class="tile2">
      <div class="tile2-image">
        <img src="assets/images/contactus.png">
      </div>
      <div>
        <div class="form-row d-flex  gap-2 align-items-center">
          <i class="fa-solid fa-phone text-primary"></i>
          <a class="link" href="tel:+201016672169">+20 1016672169</a>
        </div>
        <div class="form-row d-flex gap-2 align-items-center">
          <i class="fa-solid fa-envelope text-primary"></i>
          <a class="link" href="mailto:example@gmail.com">example@gmail.com</a>
        </div>
        <div class="form-row d-flex gap-2 fs-3 align-items-center">
          <a class="link" target="_blank" href="https://www.facebook.com/profile.php?id=61563496685707&mibextid=ZbWKwL">
            <i class="fa-brands fa-facebook"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="tile1">
      <div class="tile1-heading"><?= $translation['contactUs']['heading'] ?></div>
      <div class="form-row"><?= $translation['contactUs']['heading'] ?></div>
      <form>
        <div class="form-row">
          <input type="text" class="form-field" placeholder="<?= $translation['contactUs']['name_placeholder'] ?>">
        </div>
        <div class="form-row">
          <input type="text" class="form-field" placeholder="<?= $translation['contactUs']['email_placeholder'] ?>">
        </div>
        <div class="form-row">
          <textarea class="form-field" placeholder="<?= $translation['contactUs']['message_placeholder'] ?>"></textarea>
        </div>
        <div class="form-row w-100">
          <input type="button" class="btn btn-primary w-100" value="<?= $translation['contactUs']['send_value'] ?>">
        </div>
      </form>
    </div>
  </div>
</div>