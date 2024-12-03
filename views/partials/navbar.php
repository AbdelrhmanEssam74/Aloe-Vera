<!--Start Header-->
<header class="border-bottom lh-1 py-3">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <span class="avatar avatar-md">
                    <img src="/assets/images/logo.jpg" alt="" width="50" class="rounded-circle">
                </span>
                <span class="fw-bold">Aloe Vera Inc.</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutUs">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contactUs">Contact Us</a>
                    </li>
                </ul>

                <span class="navbar-text">
                    <?php if (!empty(app()->session->get('login')) && app()->session->get('login') === true): ?>
                        <!-- User Dropdown -->
                        <div class="dropdown">
                            <a class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="avatar avatar-sm cursor-pointer">
                                    <img src="<?php echo app()->session->get('user_avatar') ?: '/assets/images/default-avatar.png'; ?>" alt="User Avatar" width="40" class="rounded-circle">
                                </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="/user/profile/<?= app()->session->get('user_id') ?>">Profile</a></li>
                                <li><a class="dropdown-item" href="/user/settings">Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="/logout">Logout</a></li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <a href="/login" class="btn btn-success text-light text-decoration-none">Login</a>
                        <a href="/signup" id="register-btn" class="btn btn-outline-success">Register</a>
                    <?php endif; ?>
                </span>
            </div>
            <span class="cart-icon badge text-success" data-count="5"
                  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                  aria-controls="offcanvasRight">
                <i class="fa-solid fa-cart-arrow-down"></i>
            </span>
        </div>
    </nav>
</header>
<!--End Header-->
