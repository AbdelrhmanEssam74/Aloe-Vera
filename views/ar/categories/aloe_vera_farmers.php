<section class="category-hero py-lg-16 pt-8 pb-8">
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                <div class="row text-center">
                    <!-- col -->
                    <div class="col-md-12 px-md-16 mb-4 mt-6">
                    </div>
                </div>

                <div class="row align-items-start">
                    <div class="col-lg-7 col-md-12 col-12">
                        <!-- heading -->
                        <h2 class="h1 fw-bold mt-3 category-heading mb-4">
                            مزارعو الصبار
                        </h2>
                        <div class="mb-8 mb-lg-0 me-lg-4">
                            <!-- text -->
                            <p class="display-6 fs-2 mb-4 ">
                                "أيها المزارعون، عرضوا صباركم بفعالية! قدموا الكميات التفصيلية والأسعار التنافسية
                                والمواصفات الواضحة لتسويق صباركم بذكاء وجذب أفضل المشترين."
                            </p>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-5 col-md-12 col-12">
                        <div>
                            <!-- Img -->
                            <img src="/assets/images/farmer-aloe-vera.webp" alt="صبار"
                                 class="img-fluid rounded-3 w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
if (!app()->session->get('login')): ?>
    <div class="container my-5">
        <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">
            <i class="fa-solid fa-ban " style="font-size:30px "></i>
            <h1 class="text-body-emphasis">مرحباً، مزارع</h1>
            <p class="col-lg-6 mx-auto mb-4">
                سجل دخولك إلى حسابك للوصول إلى خدماتنا أو أنشئ حساباً جديداً.
            </p>
            <a href="/login" class="btn btn-primary px-5 mb-5" type="button">
                تسجيل الدخول
            </a>
            <a href="/signup" class="btn btn-outline-primary px-5 mb-5" type="button">
                إنشاء حساب
            </a>
        </div>
    </div>
<?php else: ?>

    <div id="farmer-form" class="container p-3 farmers-from">
        <div class="mb-5 d-flex align-items-center justify-content-center">
            <?php
            if (!empty(app()->session->getFlash('success'))) {
                echo '<div class="alert w-fit alert-success text-center ">' . app()->session->getFlash('success') . '</div>';
            }
            ?>
        </div>
        <!-- Card -->
        <div class="card mb-4">
            <!-- Card Header -->
            <div class="card-header">
                <h3 class="mb-0">املأ النموذج</h3>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <!-- Form -->
                <form class="row" action="/categories/farmers-upload" method="POST" enctype="multipart/form-data">
                    <div class="mb-4 col-12 col-md-12">
                        <label class="form-label" for="product_title">عنوان المنتج</label>
                        <input type="text" id="product_title" name="product_title"
                               class="form-control"
                               placeholder="عنوان المنتج"
                        >
                        <div class="errorHelp">
                            <?php
                            if (!empty(app()->session->getFlash('errors')['product_title'])):
                                echo "<p  class=' text-danger form-text'>*" . ucwords(str_replace('_', " ", app()->session->getFlash('errors')['product_title'][0])) . "</p>";
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-4">
                        <label class="form-label">نوع الصبار</label>
                        <select id="cactus_type" name="cactus_type" class="form-select" data-width="100%">
                            <option value="">اختر نوع الصبار</option>
                            <option value="medicinal">طبي</option>
                            <option value="industrial">صناعي</option>
                            <option value="ornamental">زينة</option>
                        </select>
                        <div class="errorHelp">
                            <?php
                            if (!empty(app()->session->getFlash('errors')['cactus_type'])):
                                echo "<p  class=' text-danger form-text'>*" . ucwords(str_replace('_', " ", app()->session->getFlash('errors')['cactus_type'][0])) . "</p>";
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-4">
                        <label class="form-label" for="AvailableQuantity">الكمية المتاحة <span
                                    style="font-size: 13px; font-weight: 200">(الوزن أو عدد وحدات الصبار)</span></label>
                        <input type="number" id="AvailableQuantity" name="available_quantity" class="form-control"
                               placeholder="الوزن أو عدد وحدات الصبار"
                               pattern="^[1-9]\d*$" inputmode="numeric">
                        <div class="errorHelp">
                            <?php
                            if (!empty(app()->session->getFlash('errors')['available_quantity'])):
                                echo "<p  class=' text-danger form-text'>*" . ucwords(str_replace('_', " ", app()->session->getFlash('errors')['available_quantity'][0])) . "</p>";
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="mb-5 col-12 col-md-4">
                        <label class="form-label" for="zipCode">السعر <span style="font-size: 13px; font-weight: 200">(السعر لكل كيلوغرام أو وحدة)</span></label>
                        <input type="number" id="price" class="form-control" name="price"
                               placeholder="السعر لكل كيلوغرام أو وحدة">
                        <!-- radio-->
                        <div class="d-flex gap-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="on" name="negligible"
                                       id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    ضئيل
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="off" name="negligible"
                                       id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    غير ضئيل
                                </label>
                            </div>
                        </div>
                        <div class="errorHelp">
                            <?php
                            if (!empty(app()->session->getFlash('errors')['price'])):
                                echo "<p  class=' text-danger form-text'>*" . ucwords(str_replace('_', " ", app()->session->getFlash('errors')['price'][0])) . "</p>";
                            endif;
                            ?>
                        </div>
                    </div>
                    <!-- Textarea -->
                    <div class="mb-4">
                        <label for="textarea-input" class="form-label">تفاصيل إضافية (اختياري)</label>
                        <textarea class="form-control" name="additional-details" id="textarea-input"
                                  placeholder="تفاصيل إضافية"></textarea>
                    </div>

                </form>
            </div>
        </div>
    </div>
<?php endif; ?>