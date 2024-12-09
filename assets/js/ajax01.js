$(document).ready(function () {
    // Function to fetch products for a given page
    var currentPage = 1; // Initialize current page to 1
    var filter = null;
    var amount = 0;
    // const host = "https://bisque-parrot-667884.hostingersite.com/";

    const host = "http://localhost:800/";

    function fetchProducts(page = 1, filter = "null") {
        $.ajax({
            url: host + "products/page/" + page + "/" + filter,
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
                console.error(textStatus, errorTh);
                // Show a warning alert if an error occurs
                showWarningAlert(
                    "An error occurred while fetching products. Please try again."
                );
            },
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

    // Filter products
    $(".filter-container").on("click", function (e) {
        e.preventDefault();
        const target = $(e.target); // Convert e.target to a jQuery object
        filter = target.data("filter");
        fetchProducts(currentPage, target.data("filter"));
    });

    // Function to update navigation buttons
    function updateNavigationButtons(currentPage, totalItems) {
        const navContainer = $(".pagination");
        navContainer.empty();

        const prevButton = `
        <button class="btn btn-primary me-2" id="prev-button" ${
            currentPage === 1 ? "disabled" : ""
        }>
            Previous
        </button>
    `;
        let count = $("#product-parent-container").children().length;
        const nextButton = `
        <button class="btn btn-primary" id="next-button" ${
            count < 6 ? "disabled" : ""
        }>
            Next
        </button>
    `;

        navContainer.append(prevButton + nextButton);

        // Add event listeners
        $("#prev-button").on("click", function () {
            if (currentPage > 1) {
                currentPage--;
                fetchProducts(currentPage, filter);
            }
        });

        $("#next-button").on("click", function () {
            currentPage++;
            fetchProducts(currentPage, filter);
        });
    }

    // Initial fetch to load the first page
    fetchProducts(1);

    ///////////////////////////////////////////////////////
    //!SECTION Add to cart list
    // Add event listeners for increase and decrease buttons
    //NOTE - Cart button
    // Use jQuery to attach a click event listener to buttons with the class "cart-btn"
    // Initialize cart as an array
    let cart = [];
    // Handle the increase button click
    $(document).on("click", ".amount-increase-btn", function () {
        // Get the current amount display
        const amountDisplay = $(this).siblings(".amount-display");
        let amount = parseInt(amountDisplay.text());

        // Increase the amount and update the display
        amount++;
        amountDisplay.text(amount);

        // Enable the Add to Cart button if the amount is greater than 0
        $(this)
            .parent()
            .siblings(".cart-btn")
            .prop("disabled", amount === 0);
    });

    // Handle the decrease button click
    $(document).on("click", ".amount-decrease-btn", function () {
        // Get the current amount display
        const amountDisplay = $(this).siblings(".amount-display");
        let amount = parseInt(amountDisplay.text());

        // Decrease the amount (ensure it doesn't go below 0)
        if (amount > 0) {
            amount--;
        }
        amountDisplay.text(amount);

        // Disable the Add to Cart button if the amount is 0
        $(this)
            .parent()
            .siblings(".cart-btn")
            .prop("disabled", amount === 0);
    });

// Handle the Add to Cart button click
    $(document).on("click", ".cart-btn", function () {
        const productId = $(this).data("product_id");
        const userId = $(".cart-icon").data("user_id");
        if (userId == "") {
            // Show modal prompting user to log in
            $("#loginModal").modal("show");
        } else {
            const amount = parseInt(
                $(this).siblings(".d-flex").find(".amount-display").text()
            );

            if (amount > 0) {
                // Check if the product is already in the cart
                const existingProduct = cart.find(
                    (item) => item.product_id === productId
                );

                if (existingProduct) {
                    // Update the quantity of the existing product
                    existingProduct.quantity += amount;
                } else {
                    // Add a new product to the cart
                    cart.push({
                        product_id: productId,
                        user_id: userId,
                        quantity: amount,
                    });
                }

                // Reset the amount display to 0 for the current product
                $(this).siblings(".d-flex").find(".amount-display").text(0);

                // Disable the Add to Cart button again
                $(this).prop("disabled", true);
            } else {
                alert("Please select at least one item to add to the cart.");
                return;
            }

            // Send AJAX request to add to cart
            $.ajax({
                url: host + "cart/add",
                method: "POST",
                data: {
                    data: cart,
                },
                success: function (data) {
                    console.log("Cart updated successfully.");
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(errorThrown);
                },
            });
        }

    });

    // get the count of items
    let user_id = $(".cart-icon").attr("data-user_id");
    setInterval(function () {
        $.ajax({
            url: host + "cart/count/" + user_id,
            method: "GET",
            success: function (data) {
                if (data > 0) {
                    $(".cart-icon").addClass("has-data");
                    $(".cart-icon").attr("data-count", data);
                }
            },
            error: function (jqXHR, textStatus, error) {
                console.error("Error fetching cart items:", error);
            },
        });
    }, 100);
    // NOTE - get cart from database
    $(".cart-icon").on("click", function () {
        let user_id = $(this).attr("data-user_id");
        if (user_id) {
            $.ajax({
                url: host + "cart/items/" + user_id,
                method: "GET",
                success: function (data) {

                    populateCart(data);
                },
                error: function (jqXHR, textStatus, error) {
                    console.error("Error fetching cart items:", error);
                },
            });
        }
    });

    // Function to append cart items to the offcanvas body

    function populateCart(cartItems) {
        const container = $(".offcanvas-body");

        // Clear existing content
        container.empty();

        // Append each item as a card
        cartItems.forEach((item) => {
            const itemRow = document.createElement("div");
            itemRow.className = "cart-item row mb-3 p-3 border rounded";
            itemRow.setAttribute("data-product_id", item.product_id);
            let img_url = item.images.split("|")[0];

            itemRow.innerHTML = `
        <div class="col-4 text-center">
          <img src="/${img_url}" alt="${
                item.product_title
            }" class="img-fluid rounded" style="max-height: 100px;">
        </div>
        <div class="col-8">
          <div class="d-flex justify-content-between">
            <strong class="fs-5">${item.product_title}</strong>
          </div>
                      <span class="text-muted">Price: ${parseFloat(
                item.price
            ).toFixed(2)} ₤</span>
          <p class="mb-1">Quantity: ${item.order_quantity}</p>
          <p><strong>Total:</strong> ${(
                parseFloat(item.order_quantity) * parseFloat(item.price)
            ).toFixed(2)} ₤</p>
          <button class="btn btn-danger btn-sm remove-item" data-product_id="${
                item.product_id
            }">Remove</button>
        </div>
      `;

            container.append(itemRow);
        });

        // Add event listener for remove buttons
        container.on("click", ".remove-item", function () {
            const productId = $(this).data("product_id");
            const user_id = $(".cart-icon").attr("data-user_id");
            // Remove the item from the DOM
            $(this).closest(".cart-item").remove();
            // Send AJAX request to the server to delete the item
            $.ajax({
                url: host + "cart/delete/" + user_id + "/" + productId,
                method: "GET",
                data: JSON.stringify({product_id: productId}),
                success: function (response) {
                    // let product_count = $(".cart-icon").attr("data-count");
                    // if (product_count > 0) {
                    //     $(".cart-icon").attr("data-count", --product_count);
                    // } else if (product_count == 0) {
                    //     $(".cart-icon").removeClass("has-data");
                    // }
                    // Optionally, update cart summary or display a success message
                },
                error: function (xhr, status, error) {
                    console.error("Failed to remove item", error);
                    // Optionally, display an error message
                },
            });
        });
    }

    // Function to create product element
    function createProductElement(product) {
        // Create the div with class 'col'
        const colDiv = $("<div>", {
            class: "col",
            data_product_id: product.product_id,
        });

        // Create the card div
        const cardDiv = $("<div>", {class: "card h-100"});

        // Create the slider-container div
        const sliderContainer = $("<div>", {
            class: "slider-container",
            css: {position: "relative", overflow: "hidden", height: "300px"}, // Set height to avoid collapse
        });

        // Add slider images to the slider-container
        const images = product.images.split("|");
        images.forEach((image, index) => {
            sliderContainer.append(
                $("<img>", {
                    src: "/" + image,
                    class: "card-img-top slider-image",
                    alt: "Product Image",
                    css: {
                        position: "absolute",
                        top: 0,
                        left: 0,
                        width: "100%",
                        height: "100%",
                        opacity: index === 0 ? 1 : 0, // Initially, only the first image is fully visible
                        zIndex: index === 0 ? 1 : 0,
                        transition: "opacity 0.8s ease-in-out", // Smooth fade transition
                    },
                })
            );
        });

        // Set up automatic sliding with fade effect
        let currentIndex = 0;
        setInterval(() => {
            const sliderImages = sliderContainer.find(".slider-image");
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
        const cardBody = $("<div>", {class: "card-body"});

        // Add title and details to card-body
        cardBody.append(
            $("<h5>", {class: "card-title", text: product.full_name})
        );
        cardBody.append(
            $("<p>").html(`<strong>Type:</strong> ${product.cactus_type}`)
        );
        cardBody.append(
            $("<p>").html(`<strong>Quantity:</strong> ${product.quantity} KG`)
        );
        if (!product.negligible) {
            cardBody.append(
                $("<p>").html(`<strong>Price Per Kilogram:</strong> EGP ${product.price}`)
            );
        }else{
            cardBody.append(
                $("<p>").html(`<strong>Price Per Kilogram:</strong> Not Available`)
            );
        }


        // Initial value of the amount

        // Add the buttons to card-body
        cardBody
            .append(
                $("<div>", {
                    class: "d-flex align-items-center justify-content-between w-100",
                })
                    .append(
                        // Decrease button
                        $("<button>", {
                            class: "btn btn-danger amount-decrease-btn",
                            type: "button",
                        }).text("-")
                    )
                    .append(
                        // Amount display
                        $("<span>", {
                            class: "amount-display mx-2",
                            text: amount,
                        })
                    )
                    .append(
                        // Increase button
                        $("<button>", {
                            class: "btn btn-success amount-increase-btn",
                            type: "button",
                        }).text("+")
                    )
            )
            .append(
                // Add to Cart button
                $("<button>", {
                    class: "btn btn-primary mt-2 w-100 cart-btn",
                    "data-product_id": product.product_id,
                    "data-user_id": product.user_id,
                    type: "button",
                    disabled: true, // Initially disabled because amount is 0
                }).text("Add to Cart")
            );

        // Append card-body to cardDiv
        cardDiv.append(cardBody);

        // Append cardDiv to colDiv
        colDiv.append(cardDiv);

        // Append the colDiv to a parent container (e.g., a row or a specific div)
        $("#product-parent-container").append(colDiv);
    }
    // Add eye icon after each password input
    $('input[type="password"]').each(function () {
        const eyeIcon = $('<span class="toggle-password show-pass">👁️</span>');
        $(this).after(eyeIcon);
    });

    // Toggle password visibility on eye icon click
    $(document).on('click', '.toggle-password', function () {
        const input = $(this).prev('input[type="password"], input[type="text"]');
        const inputType = input.attr('type');

        if (inputType === 'password') {
            input.attr('type', 'text'); // Show password
            $(this).text('🙈'); // Change icon to hide
        } else {
            input.attr('type', 'password'); // Hide password
            $(this).text('👁️'); // Change icon to show
        }
    });
});
