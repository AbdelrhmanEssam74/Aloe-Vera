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
                            Aloe Vera Farmers
                        </h2>
                        <div class="mb-8 mb-lg-0 me-lg-4">
                            <!-- text -->
                            <p class="display-6 fs-2 mb-4 ">
                                "Farmers, showcase your aloe vera effectively! Provide detailed quantities, competitive
                                prices, and clear specifications to market your aloe vera smartly and attract the best
                                buyers."</p>
                        </div>


                    </div>
                    <!-- col -->
                    <div class="col-lg-5 col-md-12 col-12">
                        <div>
                            <!-- Img -->
                            <img src="/assets/images/farmer-aloe-vera.webp" alt="" class="img-fluid rounded-3 w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
if (!app()->session->get('login')):
    ?>
    <div class="container my-5">
        <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">
            <i class="fa-solid fa-ban " style="font-size:30px "></i>
            <h1 class="text-body-emphasis">Welcome, Farmer </h1>
            <p class="col-lg-6 mx-auto mb-4">
                Login to your account to access our services or create a new account.
            </p>
            <a href="/login" class="btn btn-primary px-5 mb-5" type="button">
                Login
            </a>
            <a href="/signup" class="btn btn-outline-primary px-5 mb-5" type="button">
                Sing Up
            </a>
        </div>
    </div>
<?php
else:
    ?>

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
                <h3 class="mb-0"> Fill the platform</h3>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <!-- Form -->
                <form class="row" action="/categories/farmers-upload" method="POST" enctype="multipart/form-data">
                    <div class="mb-4 col-12 col-md-12">
                        <label class="form-label" for="product_title">Product Title</label>
                        <input type="text" id="product_title" name="product_title"
                               class="form-control"
                               placeholder="Product Title"
                               >
                        <div class="errorHelp">
                            <?php
                            if (!empty(app()->session->getFlash('errors')['product_title'])):
                                echo "<p  class=' text-danger form-text'>*" .
                                    ucwords(str_replace('_', " ", app()->session->getFlash('errors')['product_title'][0]))
                                    . "</p>";
                            endif;
                            ?>
                        </div>
                    </div>
<!--                    <div class="mb-3 col-12 col-md-6">-->
<!--                        <label class="form-label" for="phone">Phone Number </label>-->
<!--                        <input type="text" id="phone_number" name="phone_number"-->
<!--                               value="--><?php //= (!empty($phone_number) ? $phone_number : '') ?><!--" class="form-control"-->
<!--                               placeholder="Phone" readonly>-->
<!--                        <div class="errorHelp">-->
<!--                            --><?php
//                            if (!empty(app()->session->getFlash('errors')['phone_number'])):
//                                echo "<p  class=' text-danger form-text'>*" .
//                                    ucwords(str_replace('_', " ", app()->session->getFlash('errors')['phone_number'][0]))
//                                    . "</p>";
//                            endif;
//                            ?>
<!--                        </div>-->
<!--                    </div>-->
                    <div class="mb-3 col-12 col-md-4">
                        <label class="form-label">Cactus Type</label>
                        <select id="cactus_type" name="cactus_type" class="form-select" data-width="100%">
                            <option value="">Select Cactus</option>
                            <option
                            <option value="medicinal">Medicinal</option>
                            <option value="industrial">Industrial</option>
                            <option value="ornamental">Ornamental</option>
                        </select>
                        <div class="errorHelp">
                            <?php
                            if (!empty(app()->session->getFlash('errors')['cactus_type'])):
                                echo "<p  class=' text-danger form-text'>*" .
                                    ucwords(str_replace('_', " ", app()->session->getFlash('errors')['cactus_type'][0]))
                                    . "</p>";
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-4">
                        <label class="form-label" for="AvailableQuantity">Available Quantity <span
                                    style="font-size: 13px;font-weight: 200">(Weight or number of cactus units)</span></label>
                        <input type="number" id="AvailableQuantity" name="available_quantity" class="form-control"
                               placeholder="Weight or number of cactus units"
                               pattern="^[1-9]\d*$" inputmode="numeric">
                        <div class="errorHelp">
                            <?php
                            if (!empty(app()->session->getFlash('errors')['available_quantity'])):
                                echo "<p  class=' text-danger form-text'>*" .
                                    ucwords(str_replace('_', " ", app()->session->getFlash('errors')['available_quantity'][0]))
                                    . "</p>";
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="mb-5 col-12 col-md-4">
                        <label class="form-label" for="zipCode">Price
                            <span style="font-size: 13px;font-weight: 200">(Price per kilogram or units)</span>
                        </label>
                        <input type="number" id="price" class="form-control" name="price"
                               placeholder="price per kilogram or unit">
                        <!-- radio-->
                        <div class="d-flex gap-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="on" name="negligible"
                                       id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Negligible
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="off" name="negligible"
                                       id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Non-Negligible
                                </label>
                            </div>
                        </div>
                        <div class="errorHelp">
                            <?php
                            if (!empty(app()->session->getFlash('errors')['price'])):
                                echo "<p  class=' text-danger form-text'>*" .
                                    ucwords(str_replace('_', " ", app()->session->getFlash('errors')['price'][0]))
                                    . "</p>";
                            endif;
                            ?>
                        </div>
                    </div>
<!--                    <div class="mb-4 col-12 col-md-12">-->
<!--                        <div id="map" class="mb-4"></div>-->
<!--                        <input type="text" id="latitude" readonly hidden>-->
<!--                        <input type="text" id="longitude" readonly hidden>-->
<!--                        <div class="form-control">-->
<!--                            <label for="address">Pick Your Location or Add Your Address:</label>-->
<!--                            <input type="text" class="form-control" name="address" id="address"-->
<!--                                   placeholder="Enter your address">-->
<!--                            <div class="errorHelp mt-1">-->
<!--                                --><?php
//                                if (!empty(app()->session->getFlash('errors')['address'])):
//                                    echo "<p  class=' text-danger form-text'>*" .
//                                        ucwords(str_replace('_', " ", app()->session->getFlash('errors')['address'][0]))
//                                        . "</p>";
//                                endif;
//                                ?>
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!-- Textarea -->
                    <div class="mb-4">
                        <label for="textarea-input" class="form-label">Additional Details (Optional)</label>
                        <textarea class="form-control" name="additional-details" id="textarea-input"
                                  placeholder="Additional Details"></textarea>
                    </div>
                    <div class="mb-4 col-12 col-md-12">
                        <div class="mb-3">
                            <label for="imageUpload" class="form-label">Upload Images</label>
                            <input type="file" class="form-control" multiple accept="image/*" required name="images[]"
                                   id="
                               imageUpload">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
endif;
?>