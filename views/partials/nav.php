
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light border-bottom border-2 border-white">
                <a href="/" class="navbar-brand">
                    <h1>Beyou</h1>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/" class="nav-item nav-link <?= $_SERVER['REQUEST_URI'] === '/' ? ' active' :'';?>">Home</a>
                        <a href="/about.php" class="nav-item nav-link <?= $_SERVER['REQUEST_URI'] === '/about.php' ? ' active' :'';?>">About</a>
                        <a href="/services.php" class="nav-item nav-link <?= $_SERVER['REQUEST_URI'] === '/services.php' ? ' active' :'';?>">Services</a>
                        <a href="/products.php" class="nav-item nav-link  <?= $_SERVER['REQUEST_URI'] === '/products.php' ? ' active' :'';?>">Products</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#!" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> -->
                        <a href="/contact.php" class="nav-item nav-link <?= $_SERVER['REQUEST_URI'] === '/contact.php' ? ' active' :'';?>">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->