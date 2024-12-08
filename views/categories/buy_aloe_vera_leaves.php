<div class="container py-5" style="margin-top: 100px">
    <!-- Filter and Search Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <a href="#" class="btn btn-outline-primary me-2">All</a>
            <a href="#" class="btn btn-outline-primary me-2">Electronics</a>
            <a href="#" class="btn btn-outline-primary me-2">Clothing</a>
            <a href="#" class="btn btn-outline-primary me-2">Home Appliances</a>
        </div>
<!--        <div>-->
<!--            <input type="text" class="form-control" placeholder="Search products...">-->
<!--        </div>-->
    </div>

    <!-- Product Section Headline -->
    <h2 class="text-center mb-5">Our Products</h2>

    <!-- Product Grid -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Product Item -->
        <div class="col">
            <div class="card h-100">
                <div class="slider-container">
                    <img src="https://via.placeholder.com/150" class="card-img-top slider-image" alt="Product Image">
                    <img src="https://via.placeholder.com/150/0000FF" class="card-img-top slider-image" alt="Product Image" style="display:none;">
                    <img src="https://via.placeholder.com/150/FF0000" class="card-img-top slider-image" alt="Product Image" style="display:none;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Product Name</h5>
                    <p><strong>Type:</strong> Electronics</p>
                    <p><strong>Quantity:</strong> 5</p>
                    <p><strong>Price:</strong> $99.99</p>
                    <button class="btn btn-primary w-100">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <nav class="mt-5">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
    </nav>
</div>
