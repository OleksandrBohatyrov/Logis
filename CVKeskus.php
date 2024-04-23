<?php
session_start();

// Check if user is not logged in, redirect to login page
if (!isset($_SESSION["isLoggedIn"]) || !$_SESSION["isLoggedIn"]) {
    header("Location: login.html");
    exit;
}

// User is logged in, display CVKeskus page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Maxx CV Keskus</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
        href="assets/vendor/bootstrap/css/bootstrap.min.css"
        rel="stylesheet"
    />
    <link
        href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
        rel="stylesheet"
    />
    <link
        href="assets/vendor/fontawesome-free/css/all.min.css"
        rel="stylesheet"
    />
    <link
        href="assets/vendor/glightbox/css/glightbox.min.css"
        rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />

</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
    >
        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>Maxx CV Keskus</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="CVKeskus.php" class="active">CV Keskus</a></li>
                <li><a href="pricing.html">Pricing</a></li>

                <li><a href="contact.html">Contact</a></li>
            </ul>
            <h2>Welcome, <?php echo $_SESSION["email"]; ?></h2>
            <a href="logout.php">Logout</a>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->
<!-- End Header -->

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div
            class="page-header d-flex align-items-center"
            style="background-image: url('assets/img/page-header.jpg')"
        ></div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <span>Jobs we Provide</span>
                <h2>Jobs we Provide</h2>
            </div>

            <div class="row gy-4">
                <div
                    class="col-lg-4 col-md-6"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <div class="card">
                        <div class="card-img">
                            <img
                                src="assets/img/storage-service.jpg"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                        <h3>
                            <a href="service-details.html" class="stretched-link"
                            >Storage Specialist</a
                            >
                        </h3>
                        <p>Work in the warehouse</p>
                    </div>
                </div>
                <!-- End Card Item -->

                <div
                    class="col-lg-4 col-md-6"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <div class="card">
                        <div class="card-img">
                            <img
                                src="assets/img/logistics-service.jpg"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                        <h3>
                            <a href="service-details_logistic.html" class="stretched-link"
                            >Logistics Specialist</a
                            >
                        </h3>
                        <p>Work in logistics companies in warehouses, factories</p>
                    </div>
                </div>
                <!-- End Card Item -->

                <div
                    class="col-lg-4 col-md-6"
                    data-aos="fade-up"
                    data-aos-delay="300"
                >
                    <div class="card">
                        <div class="card-img">
                            <img
                                src="assets/img/cargo-service.jpg"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                        <h3>
                            <a href="service-details_cargo.html" class="stretched-link"
                            >Cargo Operator</a
                            >
                        </h3>
                        <p>Freight work, especially in the freight company</p>
                    </div>
                </div>
                <!-- End Card Item -->

                <div
                    class="col-lg-4 col-md-6"
                    data-aos="fade-up"
                    data-aos-delay="400"
                >
                    <div class="card">
                        <div class="card-img">
                            <img
                                src="assets/img/trucking-service.jpg"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                        <h3>
                            <a href="service-details.html" class="stretched-link"
                            >Truck Driver</a
                            >
                        </h3>
                        <p>
                            Cargo transport work, or trucking, can be varied and include
                            different roles and responsibilities.
                        </p>
                    </div>
                </div>
                <!-- End Card Item -->

                <div
                    class="col-lg-4 col-md-6"
                    data-aos="fade-up"
                    data-aos-delay="500"
                >
                    <div class="card">
                        <div class="card-img">
                            <img
                                src="assets/img/packaging-service.jpg"
                                alt=""
                                class="img-fluid"
                            />
                        </div>
                        <h3>
                            <a href="service-details.html" class="stretched-link"
                            >Packaging Specialist</a
                            >
                        </h3>
                        <p>
                            Packaging plays a key role in the world of business and
                            production. It includes the packaging of goods, products or
                            materials for the protection, storage, transport and sale.
                        </p>
                    </div>
                </div>
                <!-- End Card Item -->

                <div
                    class="col-lg-4 col-md-6"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/IT.webp" alt="" class="img-fluid" />
                        </div>
                        <h3>
                            <a href="service-details.html" class="stretched-link"
                            >IT Developer</a
                            >
                        </h3>
                        <p>
                            An IT Developer creates tailored programmes based on a
                            specification agreed with their client and including all of
                            the requirements and specific technical features. They oversee
                            the design of IT programmes and regular post-launch
                            monitoring, from software maintenance to upgrading and
                            improvement. They may also take responsibility for user
                            training and writing user guides to help with adopting the
                            application.
                        </p>
                    </div>
                </div>
                <!-- End Card Item -->
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="slides-1 swiper" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img
                                src="assets/img/testimonials/testimonials-1.webp"
                                class="testimonial-img"
                                alt=""
                            />
                            <h3>Artur Šuškevitš</h3>
                            <h4>Crypto liquidation master</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i
                                ><i class="bi bi-star-fill"></i
                                ><i class="bi bi-star-fill"></i
                                ><i class="bi bi-star-fill"></i
                                ><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                This is the best site to find a job!
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-2.jpg"
                                 class="testimonial-img alt="">
                            <h3>Martin Nõmmiste</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i
                                ><i class="bi bi-star-fill"></i
                                ><i class="bi bi-star-fill"></i
                                ><i class="bi bi-star-fill"></i
                                ><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                I recommend it to everyone, the prices are inexpensive
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <!-- TODO: add photo  -->
                            <img
                                src="assets/img/testimonials/testimonials-3.jpg"
                                class="testimonial-img"
                                alt=""
                            />
                            <h3>Maksym Miskevych</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i
                                ><i class="bi bi-star-fill"></i
                                ><i class="bi bi-star-fill"></i
                                ><i class="bi bi-star-fill"></i
                                ><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                This is where I was able to find my dream job!
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide p-5">
                        <div class="testimonial-item">
                            <!-- TODO: add photo  -->
                            <img
                                src="assets/img/testimonials/testimonials-4.jpg"
                                class="testimonial-img"
                                alt=""
                            />
                            <h3>Matvei Kulakovski</h3>
                            <h4>Dota 2 professional player</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i
                                ><i class="bi bi-star-fill"></i
                                ><i class="bi bi-star-fill"></i
                                ><i class="bi bi-star-fill"></i
                                ><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Here i found my best team
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <span>Frequently Asked Questions</span>
                <h2>Frequently Asked Questions</h2>
            </div>
            <!-- TODO: -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion accordion-flush" id="faqlist">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-1"
                                >
                                    <i class="bi bi-question-circle question-icon"></i>
                                    How much do we make from this?
                                </button>
                            </h3>
                            <div
                                id="faq-content-1"
                                class="accordion-collapse collapse"
                                data-bs-parent="#faqlist"
                            >
                                <div class="accordion-body">
                                    Zero for now. We are working for the idea
                                </div>
                            </div>
                        </div>
                        <!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-2"
                                >
                                    <i class="bi bi-question-circle question-icon"></i>
                                    How many people are working on the project?
                                </button>
                            </h3>
                            <div
                                id="faq-content-2"
                                class="accordion-collapse collapse"
                                data-bs-parent="#faqlist"
                            >
                                <div class="accordion-body">Right now 4 people.</div>
                            </div>
                        </div>
                        <!-- # Faq item-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Frequently Asked Questions Section -->
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span>Maxx CV Keskus</span>
                </a>
                <p>You can find your dreamed job with us!</p>
                <div class="social-links d-flex mt-4">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="telegram"><i class="bi bi-telegram"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="about.html">Maxx CV Keskus</a></li>
                    <li><a href="login.html" class="active">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                </ul>
            </div>

            <div
                class="col-lg-3 col-md-12 footer-contact text-center text-md-start"
            >
                <h4>Contact Us</h4>
                <p>
                    Sõpruse pst 182, <br />
                    13424 Tallinn <br />
                    Estonia <br /><br />
                    <strong>Phone:</strong> +3721234567<br />
                    <strong>Email:</strong> oleksandr.bohatyrov@gmail.com<br />
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Logis</span></strong
            >. All Rights Reserved
        </div>
    </div>
</footer>
<!-- End Footer -->
<!-- End Footer -->

<a
    href="#"
    class="scroll-top d-flex align-items-center justify-content-center"
><i class="bi bi-arrow-up-short"></i
    ></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>
</html>
