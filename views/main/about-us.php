<?php include view_path() . 'partials/navbar.php'; ?>
<div class="container about-section py-5">
  <!-- About Us Heading -->
  <div class="row">
    <div class="col-md-12 text-center">
      <div class="lc-block">
        <h2 class="display-2 mb-3 text-success fw-bold">
          <b><?= $translation['aboutUs']['title'] ?></b>
        </h2>
        <p class="lead text-muted">
          <?= $translation['aboutUs']['text'] ?>
        </p>
      </div>
    </div>
  </div>

  <!-- About Us Content -->
  <div class="container py-5 position-relative">
    <img src="assets/images/leaves-item.png" class="about-section-img position-absolute start-0 top-50 translate-middle-y" style="opacity: 0.2; width: 200px;">
    <div class="row align-items-center">
      <div class="col-lg-5 align-self-center">
        <div class="about-img-shape position-relative">
          <img class="img-fluid rounded shadow-lg" src="assets/images/team.png" alt="Team Photo">
        </div>
      </div>
      <div class="col-lg-6 offset-lg-1 my-2">
        <div class="lc-block">
          <h2 class="fs-1 mb-4 fw-bold text-success"><?= $translation['aboutUs']['heading1'] ?></h2>
          <p class="text-muted lead">
            <?= $translation['aboutUs']['text1'] ?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Our Advantage Section -->
  <div class="container my-5">
    <h2 class="text-center fw-bold mb-4 text-success"><?= $translation['aboutUs']['advantage_section']['title'] ?></h2>
    <p class="text-center">
      <?= $translation['aboutUs']['advantage_section']['description'] ?>
    </p>
  </div>
  <!-- Team Section -->
  <div class="container team-member text-center py-5">
    <h2 class="display-4 mb-3 fw-bold text-success">
      <b><?= $translation['aboutUs']['heading2'] ?></b>
    </h2>
    <p class="lead text-muted mb-5"><?= $translation['aboutUs']['text2'] ?></p>

    <!-- Supervisors Section -->
    <div class="row justify-content-center g-4">
      <div class="col-md-5 col-lg-4">
        <div class="text-center">
          <img alt="Dr. Wael Ahmed Fathy" class="rounded-circle shadow-lg mb-3" src="https://t4.ftcdn.net/jpg/00/64/67/27/240_F_64672736_U5kpdGs9keUll8CRQ3p3YaEv2M6qkVY5.jpg" style="width: 120px; height: 120px;">
          <h5><strong><?= $translation['aboutUs']['academic_supervisor_title'] ?></strong><br><?= $translation['aboutUs']['academic_supervisor'] ?></h5>
        </div>
      </div>
      <div class="col-md-5 col-lg-4">
        <div class="text-center">
          <img alt="Dr. Aya Saeed" class="rounded-circle shadow-lg mb-3" src="https://t4.ftcdn.net/jpg/00/64/67/27/240_F_64672736_U5kpdGs9keUll8CRQ3p3YaEv2M6qkVY5.jpg" style="width: 120px; height: 120px;">
          <h5><strong><?= $translation['aboutUs']['industrial_supervisor_title'] ?></strong><br><?= $translation['aboutUs']['industrial_supervisor'] ?></h5>
        </div>
      </div>
    </div>

    <!-- Team Members Section -->
    <div class="row justify-content-center g-4 pt-5">
      <div class="col-md-3">
        <div class="text-center">
          <img alt="Nourhan Diaa Saad" class="rounded-circle shadow-lg mb-3" src="https://t4.ftcdn.net/jpg/00/64/67/27/240_F_64672736_U5kpdGs9keUll8CRQ3p3YaEv2M6qkVY5.jpg" style="width: 100px; height: 100px;">
          <h6><strong><?= $translation['aboutUs']['member1'] ?></strong></h6>
        </div>
      </div>
      <div class="col-md-3">
        <div class="text-center">
          <img alt="Naheyl Salem Abozaid" class="rounded-circle shadow-lg mb-3" src="https://t4.ftcdn.net/jpg/00/64/67/27/240_F_64672736_U5kpdGs9keUll8CRQ3p3YaEv2M6qkVY5.jpg" style="width: 100px; height: 100px;">
          <h6><strong><?= $translation['aboutUs']['member2'] ?></strong></h6>
        </div>
      </div>
      <div class="col-md-3">
        <div class="text-center">
          <img alt="Manar Abo-elmaged Yassin" class="rounded-circle shadow-lg mb-3" src="https://t4.ftcdn.net/jpg/00/64/67/27/240_F_64672736_U5kpdGs9keUll8CRQ3p3YaEv2M6qkVY5.jpg" style="width: 100px; height: 100px;">
          <h6><strong><?= $translation['aboutUs']['member3'] ?></strong></h6>
        </div>
      </div>
      <div class="col-md-3">
        <div class="text-center">
          <img alt="Eman Ashraf Mohamed" class="rounded-circle shadow-lg mb-3" src="https://t4.ftcdn.net/jpg/00/64/67/27/240_F_64672736_U5kpdGs9keUll8CRQ3p3YaEv2M6qkVY5.jpg" style="width: 100px; height: 100px;">
          <h6><strong><?= $translation['aboutUs']['member4'] ?></strong></h6>
        </div>
      </div>
    </div>
  </div>
</div>