
<header>
    <nav id="navbar" class="navbar-expand-lg position-fixed">
        <div class="d-flex gap-2 align-items-center">
            <div class="logo">
                <a href="/" class="avatar avatar-sm ">
                    <img src="/assets/images/logo.jpg" alt="logo" width="50" class="rounded-circle">
                    <span>
                </a>
            </div>
            <div class="nav-links">
                <a href="/">Home</a>
                <a href="/aboutUs">About</a>
                <a href="#">Services</a>
                <a href="/contactUs">Contact</a>
            </div>
        </div>
        <div class="menu-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
             aria-controls="offcanvasRight"><i class="fas fa-bars"></i></div>
        <!--    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button>-->
        <div class="right-section">
            <a href="/login" class="btn">Login</a>
            <a href="/signup" class="btn outline">Sign Up</a>
            <i class="fas fa-globe icon"></i>
            <i class="fas fa-shopping-cart icon"></i>
            <div class="dropdown">
                <i class="fas fa-user-circle icon"></i>
                <div class="dropdown-menu">
                    <a href="#">Profile</a>
                    <a href="#">Settings</a>
                    <a href="#">Logout</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Offcanvas right</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="nav-links-mobile">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </div>
    </div>
</div>
<!---->
<!--<script>-->
<!--    const menuIcon = document.querySelector('.menu-icon');-->
<!--    const offcanvas = document.getElementById('offcanvasMenu');-->
<!---->
<!--    menuIcon.addEventListener('click', toggleOffcanvas);-->
<!---->
<!--    function toggleOffcanvas() {-->
<!--        offcanvas.classList.toggle('active');-->
<!--    }-->
<!--</script>-->