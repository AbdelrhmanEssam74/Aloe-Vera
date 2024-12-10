<?php
if (!app()->session->get('login')) {
    RedirectToView('login');
}
/** @var TYPE_NAME $full_name  */
/** @var TYPE_NAME $role */
/** @var TYPE_NAME $username */
?>

<div class="container" style="margin-top: 100px">

    <div class="row align-items-center">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <!-- Bg -->
            <div class="pt-20 rounded-top" style="background:
        url(https://bootdey.com/image/480x480/00FFFF/000000) no-repeat;
        background-size: cover;">
            </div>
            <div class="card rounded-bottom smooth-shadow-sm ">
                <div class="d-flex align-items-center justify-content-between
          pt-4 pb-6 px-4 mb-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar-xxl avatar-indicators avatar-online me-2
              position-relative d-flex justify-content-end
              align-items-end mt-n10">
                            <img src="/assets/images/default-avatar.png" class="avatar-xxl
              rounded-circle border border-2 " alt="Image">
                        </div>
                        <div class="lh-1">
                            <h2 class="mb-0">
                                <?= $full_name ?>
                            </h2>
                            <p class="mb-0 d-block">@<?= $username ?></p>
                        </div>
                    </div>
                    <div>
                        <a href="/user/settings" class="btn btn-outline-primary
              d-none d-md-block">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-6">
        <div class="row">
            <div class="col-lg-4 col-12">
                <!-- card -->
                <div class="card mb-5 rounded-3">
                    <div>
                        <img src="https://bootdey.com/image/480x180/191970/ffffff" alt="Image" class="img-fluid rounded-top">
                    </div>
                    <!-- card body -->
                    <div class="card-body">
                        <!-- Title -->
                        <h4 class="mb-1">Karina Clark</h4>
                        <p>UX Desginer</p>
                        <div>
                            <!-- Dropdown -->
                            <div class="d-flex justify-content-end">
                                <div class="dropdown dropstart">
                                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" id="dropdownMenuOne" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOne">
                                        <a class="dropdown-item d-flex align-items-center gap-2" href="#!">
                                            <i class="fa-solid fa-pen-to-square"></i>Edit</a>
                                        <a class="dropdown-item d-flex align-items-center gap-2" href="#!">
                                            <i class="bi bi-archive-fill"></i>  Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
