@extends('User_Layout')

@section('UserBody')




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
                                <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
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
                <div class="col-md-2">
                    <div class="form-group">
                        <div class="settings-avatar">
                            <img src="{{($query_edit[0]->Image)}}" style="height:250px;width:400px" class="img-fluid d-block mx-auto mb-3" alt="User avatar">
                            <div class="change-avatar"><a href="#"></a></div><br><br>
                        </div>
                    </div>
                </div>
                <!-- Col End -->
                <div class="col-md-10">
                    <h2>{{$query_edit[0]->Name}}</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.br Lorem Ipsum has been the industry's
                        standard<br> dummy text ever since the 1500s.</p>
                </div>
                <!-- Col End -->
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="contact-form-wrap">
                        <div class="widget-title mb-50">
                            <h1 class="title" style="font-size: 33px">Edit Profile </h1>
                        </div>
                        <div class="contact-form">
                            <form action="{{url('EditProfile')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="U_ID" value="{{$query_edit[0]->User_ID}}">
                                        <input type="text" name="name" value="{{$query_edit[0]->Name}}" placeholder="You Name *">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="hidden" name="HiddenPicPath1"  value="{{($query_edit[0]->Image)}}">
                                        <input type="file" name="file1" accept=".png, .jpg, .jpeg">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" value="{{$query_edit[0]->Email}}" placeholder="You  Email *">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="password" name="password" value="{{$query_edit[0]->Password}}" placeholder="You  Password *">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="date" name="Dob" value="{{$query_edit[0]->DateOfBirth}}" placeholder="Date Of Birth *">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="gender" value="{{$query_edit[0]->Gender}}" placeholder="Gender*">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" name="mobile" value="{{$query_edit[0]->Contact_No}}" placeholder="Contact Us*">
                                        <input type="hidden" name="res" value="{{$query_edit[0]->Registration_Date}}">
                                    </div>
                                </div>


                                <button class="btn" type="submit">Edit Profile</button>
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
<!-- main-area-end -->

 @endsection
