
@extends('User_Layout')

@section('UserBody')


{{--




<div class="top-search">
    <select>
        <option value="united">TV show</option>
        <option value="saab">Others</option>
    </select>
    <input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
</div> --}}

<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="public/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Account </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
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

            <div class="error-container"></div>

            <div class="row text-center intro">
                <div class="col-12">
                    <h2>Create an Account</h2>
                    <p class="text-max-800">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <!-- Col End -->
            </div>



            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="contact-form-wrap">
                        <div class="widget-title mb-50">
                            <h1 class="title" style="font-size: 33px">Registration Form</h1>
                        </div>
                        <div class="contact-form">
                            <form action="{{url('Registration')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="error-container">
                                    <span style="color:red;font-weight: bold;font-size:22px">{{session('Status')}}</span>
                                    <br><br>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" placeholder="You Name *" required>
                                    </div>
                                    <div class="col-md-6">

                                        <input type="file" name="file" placeholder="You File *" required>

                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" placeholder="You  Email *" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" name="password" placeholder="You  Password *" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="date" name="Dob" placeholder="Date Of Birth *" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="gender" placeholder="Gender*" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" name="mobile" placeholder="Contact Us*" required>
                                        <input type="hidden" name="res">
                                    </div>
                                </div>

                                <button class="btn" type="submit">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xl-4 col-lg-5">
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
                                    <p><span>Email :</span> <a href="https://themebeyond.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cbb8bebbbba4b9bf8ba6a4bdada7b3e5a8a4a6">[email&#160;protected]</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

    <!-- map -->
    <!-- <div id="map" data-background="img/bg/map.jpg"></div> -->
    <!-- map-end -->

    <!-- newsletter-area -->
    <section class="newsletter-area newsletter-bg" data-background="public/img/bg/newsletter_bg.jpg">
        <div class="container">
            <div class="newsletter-inner-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-content">
                            <h4>Trial Start First 30 Days.</h4>
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
<!-- main-area-end -->




        @endsection










