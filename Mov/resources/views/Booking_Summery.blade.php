{{-- @extends('User_Layout') --}}


@section('UserBody')



<link rel="shortcut icon" type="image/x-icon" href="../public/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="../public/assets/css/main.css">
		<!-- CSS here -->
        <link rel="stylesheet" href="../public/css/bootstrap.min.css">
        <link rel="stylesheet" href="../public/css/animate.min.css">
        <link rel="stylesheet" href="../public/css/magnific-popup.css">
        <link rel="stylesheet" href="../public/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="../public/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../public/css/flaticon.css">
        <link rel="stylesheet" href="../public/css/odometer.css">
        <link rel="stylesheet" href="../public/css/aos.css">

        <link rel="stylesheet" href="../public/css/slick.css">

        <link rel="stylesheet" href="../public/css/default.css">

        <link rel="stylesheet" href="../public/css/style.css">

        <link rel="stylesheet" href="../public/css/responsive.css">



<link rel="stylesheet" href="../public/assets/css/nice-select.css">
<link rel="stylesheet" href="../public/assets/css/main.css">

<style>

    h6{text-transform: capitalize;}

    .row{

        width: 70%;
        margin:50px auto 0px auto;
    }

</style>


 <div class="movie-facility padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                @if (session('Booking'))
                <div class="alert alert-success alert-dismissable custom-success-box" style="margin:15px;text-align:center">
                   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <strong> {{ session('Booking') }} </strong>
                </div>
              @endif

                <div class="checkout-widget checkout-contact">
                    <h5 class="title">Share your Contact  Details </h5>
                    <form class="checkout-contact-form">
                        <div class="form-group">
                            <input type="text" placeholder="Full Name" value="{{$query_User[0]->Name}}" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Enter your Mail" value="{{$query_User[0]->Email}}" readonly>
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Enter your Phone Number" value="{{$query_User[0]->DateOfBirth}}" readonly>
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Enter your Phone Number" value="{{$query_User[0]->Gender}}" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Enter your Phone Number" value="{{$query_User[0]->Contact_No}}" readonly>
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Enter your Phone Number" value="{{$query_User[0]->Registration_Date}}" readonly>
                        </div>
                    </form>
                </div>
            </div>


            </div>
            <div class="row">
            <div class="col-lg-12">
                <div class="booking-summery bg-one">
                    <h4 class="title">booking summery</h4>
                    <ul>
                        <li>
                            <h3 style="text-align:center">{{$Order_Detail[0]->Movie_Title}}</h3><br>

                            {{-- <h4  style="text-align:center;color:#9aace5;font-size:15px;">{{$Order_Detail[0]->Category_Country}} | {{$query_category[0]->Category_Name}} Movie</h4> --}}
                        </li>
                        <li>
                            <h6 class="subtitle"><span>Release Date:</span> <span style="color:#9aace5;font-size:15px;">{{$Order_Detail[0]->Movie_Release_year}}</span></h6>
                        </li>
                        <li>
                            <h6 class="subtitle"><span>Cinema</span><span style="color:#9aace5;font-size:15px;">{{$Order_Detail[0]->Theaters_Name}}</span></h6>
                        </li>

                        <li>
                            <h6 class="subtitle"><span>Address</span> <span style="color:#9aace5;font-size:15px;">{{$Order_Detail[0]->Theaters_Address}}</span></h6>
                        </li>

                        <li>
                            <h6 class="subtitle mb-0"><span>Duration Min</span><span style="color:#9aace5;font-size:15px;">{{$Order_Detail[0]->Movie_duration_min}}</span></h6>
                        </li>
                    </ul>
                    <ul class="side-shape">
                        <li>
                            <h6 class="subtitle"><span>Show Date</span><span style="color:#9aace5;font-size:15px;">{{$Order_Detail[0]->Date}}</span></h6>

                        </li>
                        <li>
                            <h6 class="subtitle"><span>Show Time</span> <span style="color:#9aace5;font-size:15px;">{{$Order_Detail[0]->Start_time}}</span></h6>
                        </li>
                    </ul>
                    <ul>

                        <li>
                            <h6 class="subtitle"><span>Seat No:</span> <span style="color:#9aace5;font-size:15px;">{{$Order_Detail[0]->Seat_Number}}</span></h6>

                        </li>
                        <li>
                            <h6 class="subtitle"><span>Ticket Price</span> <span style="color:#9aace5;font-size:15px;">Rs :{{$Order_Detail[0]->Movie_Price}}</span></h6>
                        </li>
                    </ul>
                </div>
                <div class="proceed-area  text-center">



<a href="{{url('Index')}}" class="custom-button back-button">Back To Home</a>
<a href="{{url('dynamic_pdf/pdf/'.$query_Show_Movie[0]->Movie_Id)}}"  class="custom-button back-button">Convert into PDF</a>




                </div>
            </div>
        </div>
    </div>
</div>









		<!-- JS here -->
        <script src="../public/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="../public/js/popper.min.js"></script>
        <script src="../public/js/bootstrap.min.js"></script>
        <script src="../public/js/isotope.pkgd.min.js"></script>
        <script src="../public/js/imagesloaded.pkgd.min.js"></script>
        <script src="../public/js/jquery.magnific-popup.min.js"></script>
        <script src="../public/js/owl.carousel.min.js"></script>
        <script src="../public/js/jquery.odometer.min.js"></script>
        <script src="../public/js/jquery.appear.js"></script>
        <script src="../public/js/slick.min.js"></script>
        <script src="../public/js/ajax-form.js"></script>
        <script src="../public/js/wow.min.js"></script>
        <script src="../public/js/aos.js"></script>
        <script src="../public/js/plugins.js"></script>
        <script src="../public/js/main.js"></script>









        <script src="../public/assets/js/jquery-3.3.1.min.js"></script>
        <script src="../public/assets/js/modernizr-3.6.0.min.js"></script>
        <script src="../public/assets/js/plugins.js"></script>
        <script src="../public/assets/js/bootstrap.min.js"></script>
        <script src="../public/assets/js/isotope.pkgd.min.js"></script>
        <script src="../public/assets/js/magnific-popup.min.js"></script>
        <script src="../public/assets/js/owl.carousel.min.js"></script>
        <script src="../public/assets/js/wow.min.js"></script>
        <script src="../public/assets/js/countdown.min.js"></script>
        <script src="../public/assets/js/odometer.min.js"></script>
        <script src="../public/assets/js/viewport.jquery.js"></script>
        <script src="../public/assets/js/nice-select.js"></script>
        <script src="../public/assets/js/main.js"></script>







{{-- @endsection --}}
