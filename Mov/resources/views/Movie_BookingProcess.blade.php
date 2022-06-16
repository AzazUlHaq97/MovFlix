@extends('User_Layout')

@section('UserBody')



<link rel="stylesheet" href="../public/assets/css/nice-select.css">
<link rel="stylesheet" href="../public/assets/css/main.css">


{{-- <form action="{{url('Movie_BookingProcess')}}" method="post" enctype="multipart/form-data">
    @csrf --}}




<section class="details-banner hero-area bg_img seat-plan-banner" data-background="../{{$query_Show_Movie[0]->Movie_Poster}}">
    <div class="container">
        <div class="details-banner-wrapper">
            <div class="details-banner-content style-two">
                <h5 class="title">{{$query_Show_Movie[0]->Movie_Title}}</h5>
                <div class="tags">
                    <a href="#0">{{$query_category[0]->Category_Country}}</a>
                    <a href="#0">English - 2D</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Banner-Section========== -->

<!-- ==========Page-Title========== -->

<section class="book-section bg-one">

{{-- <form action="{{url('Movie_BookingProcess')}}" method="post" enctype="multipart/form-data">
    @csrf --}}

    <div class="container">

            {{-- <form class="ticket-search-form two"> --}}

                <form action="{{url('Movie_BookingProcess')}}" class="ticket-search-form two" method="post" enctype="multipart/form-data">
                    @csrf

            <div class="form-group">
                <div class="thumb">
                    <img src="../public/assets/images/ticket/city.png" alt="ticket">
                </div>
                <span class="type">Time</span>
                <select class="select-bar" name="Start_time">
                    @foreach ($query1 as $ShowTime)
                    <option value="{{$ShowTime->Start_time}}">{{$ShowTime->Start_time}}</option>
                     @endforeach
                </select>
            </div>
            <div class="form-group">
                <div class="thumb">
                    <img src="../public/assets/images/ticket/date.png" alt="ticket">
                </div>



                <span class="type">date</span>
                <select class="select-bar" name="Date">
                    @foreach ($query1 as $ShowTime)
                    <option value="{{$ShowTime->Date}}">{{$ShowTime->Date}}</option>
                     @endforeach
                </select>
            </div>
            <div class="form-group">
                <div class="thumb">
                    <img src="../public/assets/images/ticket/cinema.png" alt="ticket">
                </div>
                <span class="type">cinema</span>
                <select class="select-bar" name="Theaters">
                    @foreach ($query_The as $The)
                    <option value="{{$The->Theaters_Id}}">

                        {{$The->Theaters_Name}}</option>
                     @endforeach
                </select>
            </div>

            <div class="form-group">
                <div class="thumb">
                    <img src="../public/assets/images/ticket/exp.png"  alt="ticket">
                </div>
                <span class="type">Seats Booking</span>


                <input type="hidden" name="Movie_Id" value="{{$query_Show_Movie[0]->Movie_Id}}">
                <input type="hidden" name="UserID" value="{{$query_User[0]->User_ID}}">

                <input type="hidden" name="Amount"  value="{{$query_Show_Movie[0]->Movie_Price}}">




                <select class="select-bar" name="seat_no">
                @foreach ($query_Seat as $Seat)
                <option value="{{$Seat->Seat_Id}}">{{$Seat->Seat_Number}}</option>
                 @endforeach
                </select>

            </div>



        <div class="form-group">
            <div class="thumb">
                <img src="../public/assets/images/ticket/exp.png" alt="ticket">
            </div>
            <span class="type">Reviews</span>
            <select class="select-bar" name="stars">

                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
    </div>
</section>


<section class="page-title">
    <div class="container">
        <div class="page-title-area">


            <div class="contact-form">



                    <div class="error-container">
                        <span style="color:red;font-weight: bold;font-size:22px">{{session('Status')}}</span>
                        <br><br>

                    </div>
<input type="hidden" name="UserID" value="{{$query_User[0]->User_ID}}">
                    <input type="hidden" name="M_Id" value="{{$query_Show_Movie[0]->Movie_Id}}">

                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="name" placeholder="You Name *" required>
                        </div>


                        <div class="col-md-12">
                        <textarea name="message" placeholder="Add a comment..."></textarea>
                    </div>
                    </div>





                        <button type="submit"  class="btn1">Post</button>






            </div>


</form>



            <div class="col-lg-5 col-md-6">
                <div class="event-about-thumb">
                    <img src="../public/assets/images/sports/sports-about.jpg" alt="sports">
                </div>
            </div>
        </div>
    </div>
</section>



































@endsection
