$(document).ready(function () {
// Function to fetch products for a given page
    let currentPage = 1; // Initialize current page to 1

    function fetchProducts(page = 1) {
        const host = "http://localhost:800/";
        $.ajax({
            url: host + "products/p/" + page,
            method: "GET",
            success: function (data) {
                if (data && data.length > 0) {
                    // Display the first product from the page
                    $("#product-parent-container").empty();
                    // Populate products
                    data.forEach(createProductElement);
                    // Update navigation buttons
                    updateNavigationButtons(page, data.length);
                } else {
                    // Clear the product container
                    $("#product-parent-container").empty();

                    // Show a warning alert if no data is returned
                    showWarningAlert("No products available for the selected page.");
                }
            },
            error: function (jqXHR, textStatus, errorTh) {
                console.error(jqXHR, textStatus, errorTh);
                // Show a warning alert if an error occurs
                showWarningAlert("An error occurred while fetching products. Please try again.");
            }
        });
    }

// Function to show a Bootstrap warning alert
    function showWarningAlert(message) {
        $("#product-parent-container").empty();
        const alert = `
        <div class="alert w-100 text-center alert-warning alert-dismissible fade show" role="alert">
            ${message}
        </div>
    `;
        $("#product-parent-container").append(alert);
    }

// Function to update navigation buttons
    function updateNavigationButtons(currentPage, totalItems) {
        const navContainer = $(".pagination");
        navContainer.empty();

        const prevButton = `
        <button class="btn btn-primary me-2" id="prev-button" ${currentPage === 1 ? 'disabled' : ''}>
            Previous
        </button>
    `;
        let count = $('#product-parent-container').children().length;

        const nextButton = `
        <button class="btn btn-primary" id="next-button" ${count <= 3 ? 'disabled' : ''}>
            Next
        </button>
    `;

        navContainer.append(prevButton + nextButton);

        // Add event listeners
        $("#prev-button").on("click", function () {
            if (currentPage > 1) {
                currentPage--;
                fetchProducts(currentPage);
            }
        });

        $("#next-button").on("click", function () {
            currentPage++;
            fetchProducts(currentPage);
        });
    }


// Initial fetch to load the first page
    fetchProducts(1);


    // Function to create product element
    function createProductElement(product) {
        // Create the div with class 'col'
        const colDiv = $('<div>', {class: 'col'});

        // Create the card div
        const cardDiv = $('<div>', {class: 'card h-100'});

        // Create the slider-container div
        const sliderContainer = $('<div>', {
            class: 'slider-container',
            css: {position: 'relative', overflow: 'hidden', height: '300px'} // Set height to avoid collapse
        });

        // Add slider images to the slider-container
        const images = product.images.split('|');
        images.forEach((image, index) => {
            sliderContainer.append(
                $('<img>', {
                    src: '/' + image,
                    class: 'card-img-top slider-image',
                    alt: 'Product Image',
                    css: {
                        position: 'absolute',
                        top: 0,
                        left: 0,
                        width: '100%',
                        height: '100%',
                        opacity: index === 0 ? 1 : 0, // Initially, only the first image is fully visible
                        zIndex: index === 0 ? 1 : 0,
                        transition: 'opacity 0.8s ease-in-out' // Smooth fade transition
                    }
                })
            );
        });

        // Set up automatic sliding with fade effect
        let currentIndex = 0;
        setInterval(() => {
            const sliderImages = sliderContainer.find('.slider-image');
            const currentImage = sliderImages.eq(currentIndex);
            const nextIndex = (currentIndex + 1) % images.length;
            const nextImage = sliderImages.eq(nextIndex);

            // Bring the next image to the front and start fading it in
            nextImage.css({zIndex: 1, opacity: 1});

            // After fade-in, reset the current image
            setTimeout(() => {
                currentImage.css({zIndex: 0, opacity: 0});
                currentIndex = nextIndex;
            }, 500); // Matches the transition duration
        }, 2000); // Change image every 3 seconds

        // Append slider-container to cardDiv
        cardDiv.append(sliderContainer);

        // Create the card-body div
        const cardBody = $('<div>', {class: 'card-body'});

        // Add title and details to card-body
        cardBody.append($('<h5>', {class: 'card-title', text: product.full_name}));
        cardBody.append($('<p>').html(`<strong>Type:</strong> ${product.cactus_type}`));
        cardBody.append($('<p>').html(`<strong>Quantity:</strong> ${product.quantity} KG`));
        cardBody.append($('<p>').html(`<strong>Price Per Kilogram:</strong> EGP ${product.price}`));

        // Add the button to card-body
        cardBody.append(
            $('<button>', {
                class: 'btn btn-primary w-100',
                text: 'Add to Cart'
            })
        );

        // Append card-body to cardDiv
        cardDiv.append(cardBody);

        // Append cardDiv to colDiv
        colDiv.append(cardDiv);

        // Append the colDiv to a parent container (e.g., a row or a specific div)
        $('#product-parent-container').append(colDiv);
    }

    // Fetch products when document is ready
    fetchProducts();
});
