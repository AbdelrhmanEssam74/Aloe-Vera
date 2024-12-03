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