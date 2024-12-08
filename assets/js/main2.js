//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.bottom = "20px";
    } else {
        mybutton.style.bottom = "-50px";
    }
}

// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

(function ($) {

    "use strict";

    var fullHeight = function () {

        $('.js-fullheight').css('height', $(window).height());
        $(window).resize(function () {
            $('.js-fullheight').css('height', $(window).height());
        });

    };
    fullHeight();

    $(".toggle-password").click(function () {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

})(jQuery);

document.querySelectorAll('.account-settings-links a').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();

        // Remove 'active' class from all links
        document.querySelectorAll('.account-settings-links a').forEach(item => item.classList.remove('active'));

        // Add 'active' class to clicked link
        this.classList.add('active');

        // Remove 'active show' from all tab panes
        document.querySelectorAll('.tab-pane').forEach(tab => tab.classList.remove('active', 'show'));

        // Add 'active show' to the corresponding tab pane
        const targetId = this.getAttribute('href').replace('#', '');
        const target = document.querySelector("#" + targetId);
        if (target) {
            target.classList.add('active', 'show');
        }
    });
});

let map, marker;

// Initialize the map
function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 29.0706792, lng: 31.0987647 }, // Default center
        zoom: 18,
    });

    // Add click event listener to the map
    map.addListener("click", (event) => {
        const lat = event.latLng.lat();
        const lng = event.latLng.lng();

        // Place or move the marker
        if (marker) {
            marker.setPosition(event.latLng);
        } else {
            marker = new google.maps.Marker({
                position: event.latLng,
                map: map,
            });
        }

        // Update the latitude and longitude fields
        $("#latitude").val(lat);
        $("#longitude").val(lng);

        // Get the address using Geocoding API
        getAddress(lat, lng);
    });

    // Add input listener for address field
    $("#address").on("change", function () {
        const address = $(this).val();
        getLocationFromAddress(address);
    });
}

// Get address from latitude and longitude
function getAddress(lat, lng) {
    const geocoder = new google.maps.Geocoder();
    const latLng = { lat: lat, lng: lng };

    geocoder.geocode({ location: latLng }, (results, status) => {
        if (status === "OK" && results[0]) {
            $("#address").val(results[0].formatted_address);
        } else {
            $("#address").val("No address found");
        }
    });
}

// Get location (lat, lng) from address
function getLocationFromAddress(address) {
    const geocoder = new google.maps.Geocoder();

    geocoder.geocode({ address: address }, (results, status) => {
        if (status === "OK" && results[0]) {
            const location = results[0].geometry.location;

            // Update latitude and longitude fields
            $("#latitude").val(location.lat());
            $("#longitude").val(location.lng());

            // Move the map to the new location
            map.setCenter(location);

            // Place or move the marker
            if (marker) {
                marker.setPosition(location);
            } else {
                marker = new google.maps.Marker({
                    position: location,
                    map: map,
                });
            }
        } else {
            alert("Could not find location for the entered address.");
        }
    });
}

// Load the map
$(document).ready(initMap);

$(document).ready(function() {
    $('#AvailableQuantity').on('input', function() {
        // Remove non-numeric and negative values
        this.value = this.value.replace(/[^0-9]/g, '');
    });
    $('#price').on('input', function() {
        // Allow numbers and at most one decimal point
        this.value = this.value.replace(/[^0-9.]/g, ''); // Remove non-numeric and non-dot characters
    });
    $('#phone_number').on('input', function() {
        // Remove non-numeric and negative values
        this.value = this.value.replace(/[^0-9]/g, '');
    });
});