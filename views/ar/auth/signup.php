<?php
// check if the user logged in and if so redirect to profile page
if (!empty(app()->session->get('login')) && app()->session->get('login') === true) {
    RedirectToView('user/profile/' . app()->session->get('user_id'));
}
?>
<section class="p-3 p-md-4 p-xl-5 login-section">
    <img src="/assets/images/item3.png" class="login-section-img" alt="">
    <div class="container position-relative">
        <img src="/assets/images/leaves1.png" class="card-login-img" alt="">
        <div class="card border-light-subtle shadow-sm ">
            <div class="row g-0 p-2">
                <div class="col-12 col-md-6 login-img rounded">
                    <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy"
                         src="/assets/images/bg.jpg" alt="BootstrapBrain Logo">
                </div>
                <div class="col-12 col-md-6">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-5">
                                    <h3 class="login-header text-center display-6 fw-medium">أنشئ حسابًا الآن وانضم إلينا</h3>
                                </div>
                            </div>
                        </div>
                        <form action="/store" method="post">
                            <div class="row gy-3 gy-md-4 overflow-hidden">
                                <div class="col-12 position-relative text-end">
                                    <label for="full_name" class="form-label">الاسم الكامل <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="full_name" id="full_name"
                                           placeholder="أدخل اسمك الكامل"
                                           value="<?= (!empty(app()->session->getFlash('old')['full_name']) ? app()->session->getFlash('old')['full_name'] : '') ?>">
                                    <div class="errorHelp">
                                        <?php
                                        if (!empty(app()->session->getFlash('errors')['full_name'])):
                                            echo "<p class='text-danger form-text'>*" .
                                                ucwords(str_replace('_', " ", app()->session->getFlash('errors')['full_name'][0]))
                                                . "</p>";
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12 position-relative text-end">
                                    <label for="username" class="form-label">اسم المستخدم <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="username" id="username"
                                           placeholder="أدخل اسم المستخدم"
                                           value="<?= (!empty(app()->session->getFlash('old')['username']) ? app()->session->getFlash('old')['username'] : '') ?>">
                                    <div class="errorHelp">
                                        <?php
                                        if (!empty(app()->session->getFlash('errors')['username'])):
                                            echo "<p class='text-danger form-text'>*" .
                                                ucwords(str_replace('_', " ", app()->session->getFlash('errors')['username'][0]))
                                                . "</p>";
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12 position-relative text-end">
                                    <label for="email" class="form-label">البريد الإلكتروني <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="name@example.com"
                                           value="<?= (!empty(app()->session->getFlash('old')['email']) ? app()->session->getFlash('old')['email'] : '') ?>">
                                    <div class="errorHelp">
                                        <?php
                                        if (!empty(app()->session->getFlash('errors')['email'])):
                                            echo "<p class='text-danger form-text'>*" .
                                                ucwords(str_replace('_', " ", app()->session->getFlash('errors')['email'][0]))
                                                . "</p>";
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12 mb-3 position-relative text-end">
                                    <label for="phone_number" class="form-label">رقم الهاتف <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" name="phone_number" id="phone_number"
                                           placeholder="+20 "
                                           value="<?= (!empty(app()->session->getFlash('old')['phone_number']) ? app()->session->getFlash('old')['phone_number'] : '') ?>">
                                    <div class="errorHelp">
                                        <?php
                                        if (!empty(app()->session->getFlash('errors')['phone_number'])):
                                            echo "<p class='text-danger form-text'>*" .
                                                ucwords(str_replace('_', " ", app()->session->getFlash('errors')['phone_number'][0]))
                                                . "</p>";
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="mt-4 col-12 col-md-12 text-end">
                                    <div id="map" class="mb-4"></div>
                                    <input type="text" id="latitude" readonly hidden>
                                    <input type="text" id="longitude" readonly hidden>
                                    <div class="form-control">
                                        <label for="address">اختر موقعك أو أضف عنوانك:</label>
                                        <input type="text" class="form-control" name="address" id="address"
                                               placeholder="أدخل عنوانك">
                                        <div class="errorHelp mt-1">
                                            <?php
                                            if (!empty(app()->session->getFlash('errors')['address'])):
                                                echo "<p class='text-danger form-text'>*" .
                                                    ucwords(str_replace('_', " ", app()->session->getFlash('errors')['address'][0]))
                                                    . "</p>";
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4 position-relative text-end">
                                    <label for="password" class="form-label">كلمة المرور <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" name="password" id="password"
                                           value="">
                                    <div class="errorHelp">
                                        <?php
                                        if (!empty(app()->session->getFlash('errors')['password'])):
                                            echo "<p class='text-danger form-text'>*" .
                                                ucwords(str_replace('_', " ", app()->session->getFlash('errors')['password'][0]))
                                                . "</p>";
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12 mt-4 position-relative text-end">
                                    <label for="password_confirmation" class="form-label">تأكيد كلمة المرور <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="">
                                    <div class="errorHelp">
                                        <?php
                                        if (!empty(app()->session->getFlash('errors')['password_confirmation'])):
                                            echo "<p class='text-danger form-text'>*" .
                                                ucwords(str_replace('_', " ", app()->session->getFlash('errors')['password_confirmation'][0]))
                                                . "</p>";
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn bsb-btn-xl btn-primary" type="submit">
                                            تسجيل
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-12">
                                <hr class="mt-5 mb-4 border-secondary-subtle">
                                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                                    <a href="/login" class="link-secondary text-decoration-none">هل لديك حساب بالفعل؟</a>
                                </div>
                            </div>
                        </div>
<!--                        <div class="row">-->
<!--                            <div class="col-12">-->
<!--                                <p class="mt-5 mb-4">أو قم بتسجيل الدخول باستخدام</p>-->
<!--                                <div class="d-flex gap-3 flex-column flex-xl-row">-->
<!--                                    <a href="#!" class="btn bsb-btn-xl btn-outline-primary">-->
<!--                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"-->
<!--                                             fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">-->
<!--                                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 4.9c-1.006 0-1.915.342-2.596.908H8l-.001-.002l-3.447-3.447-.002.003z"/>-->
<!--                                        </svg>-->
<!--                                    </a>-->
<!--                                    <a href="#!" class="btn bsb-btn-xl btn-outline-primary">-->
<!--                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"-->
<!--                                             fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">-->
<!--                                            <path d="M8 0C3.582 0 0 3.582 0 8a8 8 0 0 0 6.074 7.722V10.5h-1.828v-2.5H6.074V6.828c0-1.206.35-2.023 2.17-2.023h1.904V2h-2.734c-2.58 0-4.369 1.47-4.369 4.14v2.5H2.12v2.5h1.953V15A8 8 0 0 0 8 16a8 8 0 0 0 8-8C16 3.582 12.418 0 8 0z"/>-->
<!--                                        </svg>-->
<!--                                    </a>-->
<!--                                    <a href="#!" class="btn bsb-btn-xl btn-outline-primary">-->
<!--                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"-->
<!--                                             fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">-->
<!--                                            <path d="M5.026 15c6.074 0 9.39-5.043 9.39-9.39 0-.143 0-.284-.006-.424a6.68 6.68 0 0 0 1.644-1.704 6.585 6.585 0 0 1-1.891.518 3.29 3.29 0 0 0 1.445-1.816 6.562 6.562 0 0 1-2.084.795A3.281 3.281 0 0 0 7.873 6c-1.21 0-2.142.987-2.142 2.2 0 .172.019.339.057.499a9.364 9.364 0 0 1-6.779-3.43 3.28 3.28 0 0 0 1.013 4.429 3.28 3.28 0 0 1-1.446-.398v.039a3.284 3.284 0 0 0 2.637 3.216 3.28 3.28 0 0 1-.867.116c-.212 0-.42-.021-.626-.059a3.283 3.283 0 0 0 3.065 2.273"/>-->
<!--                                        </svg>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>