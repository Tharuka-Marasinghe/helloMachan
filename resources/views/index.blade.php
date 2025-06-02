@extends('layouts.app')

@section('content')
<!-- Hero Start -->
<div class="mb-5 container-fluid bg-dark hero-header">
    <div class="container py-5 my-5">
        <div class="row align-items-center g-5">
            <div class="text-center col-lg-6 text-lg-start">
                <h1 class="text-white display-3 animated slideInLeft">
                    Enjoy Our<br />Delicious Meal
                </h1>
                <p class="pb-2 mb-4 text-white animated slideInLeft">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                    Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                    sed stet lorem sit clita duo justo magna dolore erat amet
                </p>
                <a
                    href="#booking"
                    class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
            </div>
            <div class="overflow-hidden text-center col-lg-6 text-lg-end">
                <img class="img-fluid" src="{{ asset('assets/img/hero.png') }}" alt="" />
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Service Start -->
<div class="py-5 container-xxl">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="pt-3 rounded service-item">
                    <div class="p-4">
                        <i class="mb-4 fa fa-3x fa-user-tie text-primary"></i>
                        <h5>Master Chefs</h5>
                        <p>
                            Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                            amet diam
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="pt-3 rounded service-item">
                    <div class="p-4">
                        <i class="mb-4 fa fa-3x fa-utensils text-primary"></i>
                        <h5>Quality Food</h5>
                        <p>
                            Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                            amet diam
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="pt-3 rounded service-item">
                    <div class="p-4">
                        <i class="mb-4 fa fa-3x fa-cart-plus text-primary"></i>
                        <h5>Online Order</h5>
                        <p>
                            Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                            amet diam
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="pt-3 rounded service-item">
                    <div class="p-4">
                        <i class="mb-4 fa fa-3x fa-headset text-primary"></i>
                        <h5>24/7 Service</h5>
                        <p>
                            Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita
                            amet diam
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- About Start -->
<div class="py-5 container-xxl">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img
                            class="rounded img-fluid w-100 wow zoomIn"
                            data-wow-delay="0.1s"
                            src="{{ asset('assets/img/about-1.jpg') }}" />
                    </div>
                    <div class="col-6 text-start">
                        <img
                            class="rounded img-fluid w-75 wow zoomIn"
                            data-wow-delay="0.3s"
                            src="{{ asset('assets/img/about-2.jpg') }}"
                            style="margin-top: 25%" />
                    </div>
                    <div class="col-6 text-end">
                        <img
                            class="rounded img-fluid w-75 wow zoomIn"
                            data-wow-delay="0.5s"
                            src="{{ asset('assets/img/about-3.jpg') }}" />
                    </div>
                    <div class="col-6 text-end">
                        <img
                            class="rounded img-fluid w-100 wow zoomIn"
                            data-wow-delay="0.7s"
                            src="{{ asset('assets/img/about-4.jpg') }}" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5
                    class="section-title ff-secondary text-start text-primary fw-normal">
                    About Us
                </h5>
                <h1 class="mb-4">
                    Welcome to
                    <i class="fa fa-utensils text-primary me-2"></i>Hello Machan
                </h1>
                <p class="mb-4">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                    Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet
                    lorem sit.
                </p>
                <p class="mb-4">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                    Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                    sed stet lorem sit clita duo justo magna dolore erat amet
                </p>
                <div class="mb-4 row g-4">
                    <div class="col-sm-6">
                        <div
                            class="px-3 d-flex align-items-center border-start border-5 border-primary">
                            <h1
                                class="flex-shrink-0 mb-0 display-5 text-primary"
                                data-toggle="counter-up">
                                15
                            </h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="mb-0 text-uppercase">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div
                            class="px-3 d-flex align-items-center border-start border-5 border-primary">
                            <h1
                                class="flex-shrink-0 mb-0 display-5 text-primary"
                                data-toggle="counter-up">
                                50
                            </h1>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <h6 class="mb-0 text-uppercase">Master Chefs</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="px-5 py-3 mt-2 btn btn-primary" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Menu Start -->
<div class="py-5 container-xxl">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
                class="text-center section-title ff-secondary text-primary fw-normal">
                Food Menu
            </h5>
            <h1 class="mb-5">Most Popular Items</h1>

        </div>
        <div class="text-center tab-class wow fadeInUp" data-wow-delay="0.1s">
            <ul
                class="mb-5 nav nav-pills d-inline-flex justify-content-center border-bottom">
                <li class="nav-item">
                    <a
                        class="pb-3 mx-3 d-flex align-items-center text-start ms-0 active"
                        data-bs-toggle="pill"
                        href="#tab-1">
                        <i class="fa fa-coffee fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Popular</small>
                            <h6 class="mb-0 mt-n1">Breakfast</h6>
                        </div>
                    </a>
                </li>


            </ul>
            <div class="tab-content">
                <div id="tab-1" class="p-0 tab-pane fade show active">
                    <div class="row g-4">
                        <x-menu-card />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


    <!-- Reservation Start -->
    <div class="px-0 py-5 container-xxl wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="video">
                    <button
                        type="button"
                        class="btn-play"
                        data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                        data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h5
                        class="section-title ff-secondary text-start text-primary fw-normal">
                        Reservation
                    </h5>
                    <h1 class="mb-4 text-white">Book A Table Online</h1>
                    <form id="booking" action="" method="POST">

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="name"
                                        placeholder="Your Name" />
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="Your Email" />
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div
                                    class="form-floating date"
                                    id="date3"
                                    data-target-input="nearest">
                                    <input
                                        type="text"
                                        class="form-control datetimepicker-input"
                                        id="datetime"
                                        name="datetime"
                                        placeholder="Date & Time"
                                        data-target="#date3"
                                        data-toggle="datetimepicker" />
                                    <label for="datetime">Date & Time</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="select1" name="people"> >
                                        <option value="1">People 1</option>
                                        <option value="2">People 2</option>
                                        <option value="3">People 3</option>
                                        <option value="3">People 4</option>
                                        <option value="3">People 5</option>
                                        <option value="3">People 6</option>
                                    </select>
                                    <label for="select1">No Of People</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea
                                        class="form-control"
                                        placeholder="Special Request"
                                        id="message"
                                        name="message"
                                        style="height: 100px"></textarea>
                                    <label for="message">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="py-3 btn btn-primary w-100" type="submit">
                                    Book Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div
        class="modal fade"
        id="videoModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe
                            class="embed-responsive-item"
                            src=""
                            id="video"
                            allowfullscreen
                            allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Start -->

    <!-- Team Start -->
    <div class="pt-5 pb-3 container-xxl">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5
                    class="text-center section-title ff-secondary text-primary fw-normal">
                    Team Members
                </h5>
                <h1 class="mb-5">Our Master Chefs</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden text-center rounded team-item">
                        <div class="m-4 overflow-hidden rounded-circle">
                            <img class="img-fluid" src="{{ asset('assets/img/team-1.jpg') }}" alt="" />
                        </div>
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
                        <div class="mt-3 d-flex justify-content-center">
                            <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden text-center rounded team-item">
                        <div class="m-4 overflow-hidden rounded-circle">
                            <img class="img-fluid" src="{{ asset('assets/img/team-2.jpg') }}" alt="" />
                        </div>
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
                        <div class="mt-3 d-flex justify-content-center">
                            <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="overflow-hidden text-center rounded team-item">
                        <div class="m-4 overflow-hidden rounded-circle">
                            <img class="img-fluid" src="{{ asset('assets/img/team-3.jpg') }}" alt="" />
                        </div>
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
                        <div class="mt-3 d-flex justify-content-center">
                            <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="overflow-hidden text-center rounded team-item">
                        <div class="m-4 overflow-hidden rounded-circle">
                            <img class="img-fluid" src="{{ asset('assets/img/team-4.jpg') }}" alt="" />
                        </div>
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
                        <div class="mt-3 d-flex justify-content-center">
                            <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->

    <!-- Testimonial End -->
    @endsection