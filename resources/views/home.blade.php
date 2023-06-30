<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/animate.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/style.css">
    <meta name="favicon" src="/images/logo/logo-trans.png">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand py-1">
                <img src="/images/logo/logo-trans.png" style="height: 50px;">
                <span>Nayan</span> IAS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active" onclick="funn(this)"><a href="#hero" class="nav-link">Home</a></li>
                    <li class="nav-item" onclick="funn(this)"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item" onclick="funn(this)"><a href="#courses" class="nav-link">Courses</a></li>
                    <li class="nav-item" onclick="funn(this)"><a href="#testimonials" class="nav-link">Testimonials</a>
                    </li>
                    <li class="nav-item" onclick="funn(this)"><a href="#features" class="nav-link">Features</a></li>
                    <li class="nav-item" onclick="funn(this)"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <script>
        function funn(e) {
            const elements = document.getElementsByClassName('nav-item');

            // Loop through the elements
            for (let i = 0; i < elements.length; i++) {
                // Remove "class1" from each element
                elements[i].classList.remove('active');
            }
            e.classList.add('active');
        }
    </script>
    <div class="hero-wrap js-fullheight" id="hero" style="background-image: url('/images/hero2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <span class="subheading">Welcome to Nayan IAS </span>
                    <h1 class="mb-4">We Are Online Platform For Make Learn</h1>
                    <p class="caps">We aim to provide you with a one-stop platform for all your app download needs</p>
                    <p class="mb-0"><a href="#" class="btn btn-primary">Our Courses</a> </p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-5 order-md-last">
                    <div class="login-wrap p-4 p-md-5">
                        <h3 class="mb-4">Register Now</h3>
                        <form action="{{ route('register') }}" method="post" class="signup-form">
                            @csrf
                            <div class="form-group">
                                <label class="label" for="name">Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group">
                                <label class="label" for="email">Email Address</label>
                                <input type="text" class="form-control" placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <label class="label" for="mobile">Mobile No.</label>
                                <input id="mobile" type="number" class="form-control"
                                    placeholder="Enter Your Phone">
                            </div>
                            <!-- <div class="form-group">
                                <label class="label" for="password">Confirm Password</label>
                                <input id="password-field" type="password" class="form-control" placeholder="Confirm Password">
                            </div> -->
                            <div class="form-group d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-primary submit m-auto"><span
                                        class="fa fa-paper-plane"></span> Register Now</button>
                            </div>
                        </form>
                        <p class="text-center"> For download app on play store <a href="#signin">click Here!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about img" id="about">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row">
                        <div class="col-md-6 d-flex">
                            <div class="d-flex about-wrap">
                                <div class="img d-flex align-items-center justify-content-center"
                                    style="background-image:url(images/about-1.jpg);">
                                </div>
                                <div class="img-2 d-flex align-items-center justify-content-center"
                                    style="background-image:url(images/about.jpg);">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">Enhanced Your Skills</span>
                                    <h2 class="mb-4">Learn Anything You Want Today</h2>
                                    <p>we are passionate about education and believe that learning should be accessible
                                        to everyone. Our dedicated team works tirelessly to curate the best educational
                                        resources and ensure that you have a smooth and enriching experience on our
                                        platform. We are committed to helping you achieve your academic and personal
                                        growth goals.</p>
                                    <p><a href="#" class="btn btn-primary">Get in touch with us</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light" id="courses">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Start Learning Today</span>
                    <h2 class="mb-4">Pick Your Course</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(images/work-1.jpg);">
                            <span class="price">Software</span>
                        </a>
                        <div class="text p-4">
                            <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                            <p class="advisor">Advisor <span>Tony Garret</span></p>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>2300</li>
                                <li class="price">$199</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(images/work-2.jpg);">
                            <span class="price">Software</span>
                        </a>
                        <div class="text p-4">
                            <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                            <p class="advisor">Advisor <span>Tony Garret</span></p>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>2300</li>
                                <li class="price">$199</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(images/work-3.jpg);">
                            <span class="price">Software</span>
                        </a>
                        <div class="text p-4">
                            <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                            <p class="advisor">Advisor <span>Tony Garret</span></p>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>2300</li>
                                <li class="price">$199</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(images/work-4.jpg);">
                            <span class="price">Software</span>
                        </a>
                        <div class="text p-4">
                            <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                            <p class="advisor">Advisor <span>Tony Garret</span></p>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>2300</li>
                                <li class="price">$199</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(images/work-5.jpg);">
                            <span class="price">Software</span>
                        </a>
                        <div class="text p-4">
                            <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                            <p class="advisor">Advisor <span>Tony Garret</span></p>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>2300</li>
                                <li class="price">$199</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(images/work-6.jpg);">
                            <span class="price">Software</span>
                        </a>
                        <div class="text p-4">
                            <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                            <p class="advisor">Advisor <span>Tony Garret</span></p>
                            <ul class="d-flex justify-content-between">
                                <li><span class="flaticon-shower"></span>2300</li>
                                <li class="price">$199</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url('https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex align-items-center">
                        <div class="icon"><span class="flaticon-online"></span></div>
                        <div class="text">
                            <strong class="number" data-number="400">0</strong>
                            <span>Online Courses</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex align-items-center">
                        <div class="icon"><span class="flaticon-graduated"></span></div>
                        <div class="text">
                            <strong class="number" data-number="4500">0</strong>
                            <span>Students Enrolled</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex align-items-center">
                        <div class="icon"><span class="flaticon-instructor"></span></div>
                        <div class="text">
                            <strong class="number" data-number="1200">0</strong>
                            <span>Experts Instructors</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex align-items-center">
                        <div class="icon"><span class="flaticon-tools"></span></div>
                        <div class="text">
                            <strong class="number" data-number="300">0</strong>
                            <span>Hours Content</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light" id="testimonials">
        <div class="overlay"
            style="background-image: url('https://images.unsplash.com/photo-1633613286991-611fe299c4be?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
        </div>
        <div class="container">
            <div class="row pb-4">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-4">What Our Students Says</h2>
                </div>
            </div>
        </div>
        <div class="container container-2">
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section services-section" id="features">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 heading-section pr-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100 mb-4 mb-md-0">
                        <span class="subheading">Welcome to Nayan IAS </span>
                        <h2 class="mb-4">We Are Nayan IAS An Online Learning Center</h2>
                        <p>In addition to providing app download links, we also offer recommendations for the best
                            courses available online. These courses cover a wide range of subjects and are carefully
                            selected to provide high-quality content from reputable sources. Whether you're looking to
                            learn a new programming language, delve into art history, or improve your business skills,
                            our curated list of courses will guide you towards excellence.</p>

                        <div class="d-flex video-image align-items-center mt-md-4">
                            <a href="#" class="video img d-flex align-items-center justify-content-center"
                                style="background-image: url(images/about.jpg);">
                                <span class="fa fa-play-circle"></span>
                            </a>
                            <h4 class="ml-4">Learn anything from Nayan IAS , Watch video</h4>
                        </div>
                    </div>
                </div>
                <style>
                    .featuress p {
                        font-size: 12px;
                        text-align: justify;
                    }
                </style>
                <div class="col-md-6 featuress">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-tools"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Top Quality Content</h3>
                                    <p>Premium content that is informative, engaging, and reliable, designed to provide
                                        you with the best learning experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services">
                                <div class="icon icon-2 d-flex align-items-center justify-content-center"><span
                                        class="flaticon-instructor"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Highly Skilled Instructor</h3>
                                    <p>Expert educators delivering top-notch instruction, guiding you towards mastery
                                        with their extensive knowledge and expertise.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services">
                                <div class="icon icon-3 d-flex align-items-center justify-content-center"><span
                                        class="flaticon-quiz"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Pre Compiled Notes</h3>
                                    <p>condensing key information for efficient studying, ensuring you have the
                                        essential knowledge at your fingertips.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services">
                                <div class="icon icon-4 d-flex align-items-center justify-content-center"><span
                                        class="flaticon-browser"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Online Test</h3>
                                    <p>Interactive online tests that assess your understanding, track progress, and
                                        provide valuable insights to enhance your learning journey.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Get in touch</h3>
                                    <form method="POST" id="contactForm" name="contactForm"
                                        action="{{ Route('enquery') }}" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Full Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                        id="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email"
                                                        id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Subject</label>
                                                    <input type="text" class="form-control" name="subject"
                                                        id="subject" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="message">Message</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message"
                                                        class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                    <h3>Let's get in touch</h3>
                                    <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Email:</span> <a
                                                    href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Website</span> <a href="#">yoursite.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="ftco-section" id="download_app">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters"
                            style="background-color:rgb(84 141 252 / 25%); border-radius:5px;">
                            <div class="col-md-7 col-sm-8 py-3 px-5">
                                <h5 class="mt-5" style="font-weight: 600;font-family: proxima-nova,sans-serif;">
                                    Download The Nayan IAS App Now!</h5>
                                <p style="font-size: 14px;">Our app is designed to be user-friendly and intuitive,
                                    making it easy for you to navigate and find the resources you need. With a clean and
                                    modern interface, you can browse through our extensive collection of educational
                                    apps and find the ones that align with your interests and goals. Our app is
                                    regularly updated with new additions to ensure that you always have access to the
                                    latest educational tools.</p>
                                <button type="submit" class="btn btn-primary mx-1"><span
                                        class="fa fa-download"></span> Download Now</button>

                            </div>
                            <div class="col-md-2 col-sm-none"></div>
                            <div class="col-md-3 col-sm-4">
                                <img style="width:150px" class="my-5" src="/images/app.jpeg">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>








    <footer class="ftco-footer ftco-no-pt">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md pt-5">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">About</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5">
                    <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Help Desk</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Customer Care</a></li>
                            <li><a href="#" class="py-2 d-block">Legal Help</a></li>
                            <li><a href="#" class="py-2 d-block">Services</a></li>
                            <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
                            <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
                            <li><a href="#" class="py-2 d-block">Call Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Recent Courses</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Computer Engineering</a></li>
                            <li><a href="#" class="py-2 d-block">Web Design</a></li>
                            <li><a href="#" class="py-2 d-block">Business Studies</a></li>
                            <li><a href="#" class="py-2 d-block">Civil Engineering</a></li>
                            <li><a href="#" class="py-2 d-block">Computer Technician</a></li>
                            <li><a href="#" class="py-2 d-block">Web Developer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St.
                                        Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2
                                            392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p> Copyright &copy; 2023 All rights reserved </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
