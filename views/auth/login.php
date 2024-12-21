<?php
// check if the user logged in and if so redirect to profile page
if (!empty(app()->session->get('login')) && app()->session->get('login') === true) {
  RedirectToView('user/profile/' . app()->session->get('user_id'));
}
?>
<section class="p-3 p-md-4 p-xl-5 login-section">
  <img src="/assets/images/item3.png" class="login-section-img" alt="">
  <div class="container position-relative">
    <img src="/assets/images/leaves1.png" class="card-login-img rounded" alt="">
    <div class="card border-light-subtle shadow-sm " style="padding: 10px">
      <div class="row g-0">
        <div class="col-12   col-md-6">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h3 class="login-header text-center display-5 fw-medium"><?= $translation['login']['title'] ?></h3>
                  <?php
                  if (!empty(app()->session->getFlash('success'))) {
                    echo '<div class="alert alert-success text-center+">' . app()->session->getFlash('success') . '</div>';
                  }
                  ?>
                </div>
              </div>
            </div>
            <form action="/login" method="post" novalidate>
              <!-- CSRF Token -->
              <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
              <!-- Email Field -->
              <div class="form-group mb-3">
                <label for="email" class="form-label"><?= $translation['login']['email'] ?></label>
                <input
                  type="email"
                  class="form-control <?= app()->session->hasFlash('email') ? 'is-invalid' : ''; ?>"
                  id="email"
                  name="email"
                  placeholder="<?= $translation['login']['email_placeholder'] ?>"
                  value="<?= app()->session->hasFlash('oldEmail') ? app()->session->getFlash('oldEmail') : ''; ?>">
                <?php if (app()->session->hasFlash('email')): ?>
                  <div class="invalid-feedback">
                    <?= app()->session->getFlash('email')[0]; ?>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Password Field -->
              <div class="form-group mb-4">
                <label for="password" class="form-label"><?= $translation['login']['password'] ?></label>
                <input
                  type="password"
                  class="form-control <?= app()->session->hasFlash('password') ? 'is-invalid' : ''; ?>"
                  id="password"
                  name="password"
                  placeholder="<?= $translation['login']['password_placeholder'] ?>">
                <?php if (app()->session->hasFlash('password')): ?>
                  <div class="invalid-feedback">
                    <?= app()->session->getFlash('password')[0]; ?>
                  </div>
                <?php endif; ?>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" name="remember_me" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1"><?= $translation['login']['remember'] ?></label>
              </div>
            <!-- Submit Button -->
              <button type="submit" class="btn btn-primary w-100"><?= $translation['login']['login'] ?></button>
            </form>
            <div class="row">
              <div class="col-12">
                <hr class="mt-5 mb-4 border-secondary-subtle">
                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                  <a href="/signup" class="link-secondary text-decoration-none"><?= $translation['login']['create_new_user'] ?></a>
                  <!--                                    <a href="/rest-password" class="link-secondary text-decoration-none">Forgot-->
                  <!--                                        password</a>-->
                </div>
              </div>
            </div>
            <!--                        <div class="row">-->
            <!--                            <div class="col-12">-->
            <!--                                <p class="mt-5 mb-4">Or sign in with</p>-->
            <!--                                <div class="d-flex gap-3 flex-column flex-xl-row">-->
            <!--                                    <a href="#!" class="btn bsb-btn-xl btn-outline-primary">-->
            <!--                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"-->
            <!--                                             fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">-->
            <!--                                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>-->
            <!--                                        </svg>-->
            <!--                                        <span class="ms-2 fs-6">Google</span>-->
            <!--                                    </a>-->
            <!--                                    <a href="#!" class="btn bsb-btn-xl btn-outline-primary">-->
            <!--                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"-->
            <!--                                             fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">-->
            <!--                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>-->
            <!--                                        </svg>-->
            <!--                                        <span class="ms-2 fs-6">Facebook</span>-->
            <!--                                    </a>-->
            <!--                                    <a href="#!" class="btn bsb-btn-xl btn-outline-primary">-->
            <!--                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"-->
            <!--                                             fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">-->
            <!--                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>-->
            <!--                                        </svg>-->
            <!--                                        <span class="ms-2 fs-6">Twitter</span>-->
            <!--                                    </a>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
          </div>
        </div>
        <div class="col-12 col-md-6 login-img">
          <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy"
            src="/assets/images/bg.jpg" alt="BootstrapBrain Logo">
        </div>
      </div>
    </div>
  </div>
</section>