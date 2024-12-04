<?php
if (!app()->session->get('login')) {
    RedirectToView('login');
}
/** @var TYPE_NAME $full_name  */
/** @var TYPE_NAME $role */
?>

<div class="bg-light">
    <div class="container py-5">
        <div class="row">
            <!-- Profile Header -->
            <div class="col-12 mb-4">
                <div class="profile-header position-relative mb-4">
<!--                    <div class="position-absolute top-0 end-0 p-3">-->
<!--                        <button class="btn btn-light"><i class="fas fa-edit me-2"></i>Edit Cover</button>-->
<!--                    </div>-->
                </div>
                <div class="text-center">
                    <div class="position-relative d-inline-block">
                        <img src="/assets/images/default-avatar.png" class="rounded-circle profile-pic"
                             alt="Profile Picture">
                        <button class="btn btn-primary btn-sm position-absolute bottom-0 end-0 rounded-circle">
                            <i class="fas fa-camera"></i>
                        </button>
                    </div>
                    <h3 class="mt-3 mb-1"><?= $full_name ?></h3>
                    <p class="text-muted mb-3"><?= ucfirst($role) ?></p>
<!--                    <div class="d-flex justify-content-center gap-2 mb-4">-->
<!--                        <button class="btn btn-outline-primary"><i class="fas fa-envelope me-2"></i>Message</button>-->
<!--                        <button class="btn btn-primary"><i class="fas fa-user-plus me-2"></i>Connect</button>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>