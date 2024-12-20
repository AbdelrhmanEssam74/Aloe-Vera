<section class="p-3 p-md-4 p-xl-5 login-section">
  <img src="/assets/images/item3.png" class="login-section-img" alt="">
  <div class="container position-relative">
    <img src="/assets/images/leaves1.png" class="card-login-img" alt="">
    <div class="card border-light-subtle shadow-sm rounded">
      <div class="row g-0 p-2">
        <div class="col-12 col-md-6">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h3 class="login-header text-center display-6 fw-medium">Create an Account and Join Us</h3>
                </div>
              </div>
            </div>
            <form method="post" action="/store" novalidate>
              <!-- CSRF Token -->
              <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <!-- Full Name -->
                <div class="form-group">
                  <label for="full_name" class="form-label">Full Name</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                    <input
                      type="text"
                      class="form-control <?= app()->session->hasFlash('errors') && isset(app()->session->getFlash('errors')['full_name']) ? 'is-invalid' : ''; ?>"
                      id="full_name"
                      name="full_name"
                      placeholder="Enter your full name"
                      value="<?= old('full_name') ?? ''; ?>">
                    <?php if (app()->session->hasFlash('errors') && isset(app()->session->getFlash('errors')['full_name'])): ?>
                      <div class="invalid-feedback">
                        <?= app()->session->getFlash('errors')['full_name'][0]; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
                <!-- Username -->
                <div class="form-group">
                  <label for="username" class="form-label">Username</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                    <input
                      type="text"
                      class="form-control <?= app()->session->hasFlash('errors') && isset(app()->session->getFlash('errors')['username']) ? 'is-invalid' : ''; ?>"
                      id="username"
                      name="username"
                      placeholder="Enter a username"
                      value="<?= old('username') ?? ''; ?>">
                    <?php if (app()->session->hasFlash('errors') && isset(app()->session->getFlash('errors')['username'])): ?>
                      <div class="invalid-feedback">
                        <?= app()->session->getFlash('errors')['username'][0]; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
                <!-- Email -->
                <div class="form-group">
                  <label for="email" class="form-label">Email Address</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input
                      type="email"
                      class="form-control <?= app()->session->hasFlash('errors') && isset(app()->session->getFlash('errors')['email']) ? 'is-invalid' : ''; ?>"
                      id="email"
                      name="email"
                      placeholder="Enter your email address"
                      value="<?= old('email') ?? ''; ?>">
                    <?php if (app()->session->hasFlash('errors') && isset(app()->session->getFlash('errors')['email'])): ?>
                      <div class="invalid-feedback">
                        <?= app()->session->getFlash('errors')['email'][0]; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
                <!-- Phone Number -->
                <div class="form-group">
                  <label for="phone_number" class="form-label">Phone Number</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                    <input
                      type="tel"
                      class="form-control <?= app()->session->hasFlash('errors') && isset(app()->session->getFlash('errors')['phone_number']) ? 'is-invalid' : ''; ?>"
                      name="phone_number"
                      id="phone_number"
                      placeholder="+20"
                      value="<?= old('phone_number') ?>">
                    <?php if (app()->session->hasFlash('errors') && isset(app()->session->getFlash('errors')['phone_number'])): ?>
                      <div class="invalid-feedback">
                        <?= app()->session->getFlash('errors')['phone_number'][0]; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
                <!-- Address -->
                <div class="form-group">
                  <div id="map" class="mb-4"></div>
                  <input type="text" id="latitude" readonly hidden>
                  <input type="text" id="longitude" readonly hidden>
                  <label for="address" class="form-label">Address</label>
                  <input
                    type="text"
                    class="form-control <?= app()->session->hasFlash('errors') && isset(app()->session->getFlash('errors')['address']) ? 'is-invalid' : ''; ?>"
                    name="address"
                    id="address"
                    placeholder="Enter your address"
                    value="<?= old('address') ?>">
                  <?php if (app()->session->hasFlash('errors') && isset(app()->session->getFlash('errors')['address'])): ?>
                    <div class="invalid-feedback">
                      <?= app()->session->getFlash('errors')['address'][0]; ?>
                    </div>
                  <?php endif; ?>
                </div>
                <!-- Password -->
                <div class="form-group">
                  <label for="password" class="form-label">Password</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input
                      type="password"
                      class="form-control <?= app()->session->hasFlash('errors') && isset(app()->session->getFlash('errors')['password']) ? 'is-invalid' : ''; ?>"
                      id="password"
                      name="password"
                      placeholder="Enter a password">
                    <?php if (app()->session->hasFlash('errors') && isset(app()->session->getFlash('errors')['password'])): ?>
                      <div class="invalid-feedback">
                        <?= app()->session->getFlash('errors')['password'][0]; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
                <!-- Confirm Password -->
                <div class="form-group">
                  <label for="confirm-password" class="form-label">Confirm Password</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                    <input
                      type="password"
                      class="form-control <?= app()->session->hasFlash('errors') && isset(app()->session->getFlash('errors')['password_confirmation']) ? 'is-invalid' : ''; ?>"
                      id="confirm-password"
                      name="password_confirmation"
                      placeholder="Confirm your password">
                    <?php if (app()->session->hasFlash('errors') && isset(app()->session->getFlash('errors')['password_confirmation'])): ?>
                      <div class="invalid-feedback">
                        <?= app()->session->getFlash('errors')['password_confirmation'][0]; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
                <!-- Submit Button -->
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Sign Up</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-12">
                <hr class="mt-5 mb-4 border-secondary-subtle">
                <div class="d-flex gap-2 justify-content-end">
                  <a href="/login" class="link-secondary text-decoration-none">Already have an account?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 login-img rounded">
          <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy"
            src="/assets/images/bg.jpg" alt="Sign Up">
        </div>
      </div>
    </div>
  </div>
</section>