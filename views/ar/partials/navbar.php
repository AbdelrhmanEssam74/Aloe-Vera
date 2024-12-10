<header>
    <nav id="navbar" class="navbar-expand-lg position-fixed">
        <div class="d-flex gap-2 align-items-center  w-100  justify-content-between">
            <div class="right-section">
                <?php
                if (!app()->session->get('login')):
                    ?>
                    <a href="/signup" class="btn outline register">اشترك</a>
                    <a href="/login" class="btn">تسجيل الدخول</a>
                <?php
                endif;
                ?>
                <!-- Mobile view nav wrap -->
                <a href="#langaugeModal" class="text-inherit ms-2" data-bs-toggle="modal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                         class="bi bi-globe text-gray-500" viewBox="0 0 16 16" style="color: var(--main-color)">
                        <path
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
                    </svg>
                </a>
                <div class="cart-icon" data-count="5"
                     data-user_id="<?= (!empty(app()->session->get('login'))) ? app()->session->get('user_id') : '' ?>">
                    <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                       aria-controls="offcanvasExample">
                        <i class="fa-solid fa-cart-shopping "></i>
                    </a>
                </div>
                <?php
                if (app()->session->get('login') and app()->session->get('login') === true):
                    ?>
                    <div class="dropdown">
                        <img src="/assets/images/default-avatar.png" width="30" class="profile-pic-nav rounded-circle">
                        <div class="dropdown-menu">
<!--                            <a href="/user/settings"><i class="fa-solid fa-gear"></i> الإعدادات</a>-->
                            <hr>
                            <a href="/logout" class="text-danger"> <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                تسجيل الخروج</a>
                        </div>
                    </div>
                <?php
                endif;
                ?>
            </div>
            <div class="left-section">
                <div class="nav-links">
                    <a href="/contactUs">تواصل معنا</a>
                    <a href="/ar#categories">الفئات</a>
                    <a href="/aboutUs">عنا</a>
                    <a href="/ar">الرئيسية</a>
                </div>
                <div class="logo ">
                    <a href="/ar" class="avatar avatar-md">
                        <img src="/assets/images/logo.jpg" alt="logo" width="70" class="rounded-circle">
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">القائمة الرئيسية</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="nav-links-mobile">
            <a href="/ar">الرئيسية</a>
            <a href="/aboutUs">عنا</a>
            <a href="/ar/#categories">الفئات</a>
            <a href="/contactUs">تواصل معنا</a>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">سلتك</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>

        </div>
    </div>
</div>
<!-- Modal -->
<div id="langaugeModal" class="modal fade" tabindex="-1" aria-labelledby="langaugeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="modal-title" id="langaugeModalLabel">اختر لغة</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
                </div>
                <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
                    <a class="text-inherit fw-semibold active" href="/ar">العربية</a>
                    <a class="text-inherit fw-semibold" href="/">English</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">مطلوب تسجيل الدخول</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
            </div>
            <div class="modal-body">
                <p>يجب تسجيل الدخول لإضافة عناصر إلى السلة.</p>
            </div>
            <div class="modal-footer">
                <a href="/login" class="btn btn-primary">تسجيل الدخول</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
            </div>
        </div>
    </div>
</div>

