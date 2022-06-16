@extends('User_Layout')

@section('UserBody')


       <!-- Start Sub Header Section -->
       <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="public/img/bg/contact4.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Contact Us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('Index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact-area contact-bg" data-background="public/img/bg/contact_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-form-wrap">
                            <div class="widget-title mb-50">
                                <h5 class="title">Contact Form</h5>
                            </div>
                            <div class="contact-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="You Name *" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" placeholder="You  Email *" required>
                                        </div>
                                    </div>
                                    <input type="text" placeholder="Subject *" required>
                                    <textarea name="message" placeholder="Type Your Message..." required></textarea>
                                    <button class="btn">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="widget-title mb-50">
                            <h5 class="title">Information</h5>
                        </div>
                        <div class="contact-info-wrap">
                            <p><span>Find solutions :</span> to common problems, or get help from a support agent industry's standard .</p>
                            <div class="contact-info-list">
                                <ul>
                                    <li>
                                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                        <p><span>Address :</span> W38 Park Road New York</p>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                        <p><span>Phone :</span> (09) 123 854 365</p>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-envelope"></i></div>
                                        <p><span>Email :</span> <a href="#" class="__cf_email__" data-cfemail="cbb8bebbbba4b9bf8ba6a4bdada7b3e5a8a4a6">[email&#160;protected]</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

        <!-- map -->
        <div id="map" data-background="public/img/bg/map.jpg"></div>
        <!-- map-end -->

        <!-- newsletter-area -->
        <section class="newsletter-area newsletter-bg" data-background="public/img/bg/newsletter_bg.jpg">
            <div class="container">
                <div class="newsletter-inner-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="newsletter-content">
                                <h4>Book Your Ticket First 30 Days.</h4>
                                <p>Enter your email to create or restart your membership.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="#" class="newsletter-form">
                                <input type="email" required placeholder="Enter your email">
                                <button class="btn">get started</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter-area-end -->

    </main>

    @endsection
