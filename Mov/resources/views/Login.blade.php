
@extends('User_Layout')

@section('UserBody')


   <!-- main-area -->
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
                                <li class="breadcrumb-item"><a href="{{url('Index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login</li>
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
                <div class="col-xl-12 col-lg-12">
                    <div class="contact-form-wrap">

                        <div class="contact-form">
                            <form id="login-form" action="{{url('Login')}}" method="post" class="mb-4" enctype="multipart/form-data">


                                <section class="login">
                                    <div class="container">
                                        <div class="row text-center intro">
                                            <div class="col-12">
                                                <h2>Welcome Back !</h2>
                                                <p class="text-max-800">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </div>
                                            <!-- Col End -->
                                        </div>
                                        <!-- Row End -->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- Start Form -->
                                                <form id="login-form" action="{{url('Login')}}" method="post" class="mb-4" enctype="multipart/form-data">
                                                  @csrf
                                                  <div class="error-container">
                                                    <span style="color:green;font-weight: bold">{{session('Correct')}}</span>
                                                     <span style="color:red;font-weight: bold">{{session('Incorrect')}}</span>
                                                </div>
                                                    <div class="error-container"></div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-4">Username</label>
                                                        <input type="email" name="uname"  class="form-control"  required="required" style="color: black">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-xs-4">Password</label>
                                                        <input type="password" class="form-control" name="upass" required="required" style="color: black">
                                                    </div>
                                                    <div class="form-group">


                                                        <input type="hidden" name="U_ID">
                                                        <button type="submit" class="btn1">Login</button>
                                                    </div>

                                                </form>
                                                <!-- Form End -->
                                                <div class="row d-flex align-items-center mb-4">
                                                    <div class="col-md-6">
                                                        <a href="#" class="btn1 facebook-color d-block hvr-sweep-to-right mb-3" tabindex="0"><i class="icofont-facebook mr-2" aria-hidden="true"></i>Facebook</a>
                                                    </div>
                                                    <!-- Col End -->
                                                    <div class="col-md-6">
                                                        <a href="#" class="btn1 twitter-color d-block hvr-sweep-to-right mb-3" tabindex="0"><i class="icofont-twitter mr-2" aria-hidden="true"></i>Twitter</a>
                                                    </div>
                                                    <!-- Col End -->
                                                </div>
                                                <!-- Row End -->
                                                <p class="text-center">Don't have an account? <a href="{{url('Registration')}}">Sign up here!</a></p>
                                            </div>
                                            <!-- Col End -->
                                            <div class="col-lg-6">
                                                <img class="img-fluid" src="public/img/login.png" style="width:100%;height:400px; " alt="">
                                            </div>
                                            <!-- Col End -->
                                        </div>
                                        <!-- Row End -->
                                    </div>
                                    <!-- Container End -->
                                </section>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

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
