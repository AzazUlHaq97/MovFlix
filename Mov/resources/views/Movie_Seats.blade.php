@extends('User_Layout')

@section('UserBody')


<link rel="stylesheet" href="../public/assets/css/nice-select.css">
<link rel="stylesheet" href="../public/assets/css/main.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<style>


    #one ~ .option-one {
      cursor: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/9632/meh.png"), auto;
      font-size: 20px;
      width: 20px;
    }
    #one:checked ~ .option-one{
      background: green;

    }


    #happy ~ .option-happy {
      cursor: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/9632/happy.png"), auto;
      font-size: 20px;
      width: 20px;
    }
    #happy:checked ~ .option-happy {
      background: green;

    }



    #happy1 ~ .option-happy1 {
      cursor: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/9632/happy.png"), auto;
      font-size: 20px;
      width: 20px;
    }
    #happy1:checked ~ .option-happy1 {
      background: green;

    }




    #sad ~ .option-sad {
      cursor: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/9632/sad.png"), auto;
      font-size: 20px;
      width: 20px;
    }
    #sad:checked ~ .option-sad {
      background: red;
    }

    #meh ~ .option-meh {
      cursor: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/9632/meh.png"), auto;
      font-size: 20px;
      width: 20px;
    }
    #meh:checked ~ .option-meh {
      background: orange;
    }
    </style>


    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="public/assets/images/banner/banner04.jpg">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title">Venus</h3>
                    <div class="tags">
                        <a href="#0">City Walk</a>
                        <a href="#0">English - 2D</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Page-Title========== -->
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="movie-ticket-plan.html" class="custom-button back-button">
                        <i class="flaticon-double-right-arrows-angles"></i>back
                    </a>
                </div>
                {{-- <div class="item date-item">
                    <span class="date">MON, SEP 09 2020</span>
                    <select class="select-bar">
                        <option value="sc1">09:40</option>
                        <option value="sc2">13:45</option>
                        <option value="sc3">15:45</option>
                        <option value="sc4">19:50</option>
                    </select>
                </div>
                <div class="item">
                    <h5 class="title">05:00</h5>
                    <p>Mins Left</p>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->

    <!-- ==========Movie-Section========== -->
    <div class="seat-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="screen-area">
                <h4 class="screen">screen</h4>
                <div class="screen-thumb">
                    <img src="../public/assets/images/movie/screen-thumb.png" alt="movie">
                </div>
                <!-- <h5 class="subtitle">silver plus</h5> -->
                <!-- <div class="screen-wrapper">
                    <ul class="seat-area">
                        <li class="seat-line">
                            <span>G</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>G</span>
                        </li>
                        <li class="seat-line">
                            <span>f</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="../public/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f7</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="../public/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f8</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free">
                                            <img src="../public/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f9</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="../public/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f10</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="../public/assets/images/movie/seat01-free.png" alt="seat">
                                            <span class="sit-num">f11</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="../public/assets/images/movie/seat01.png" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>f</span>
                        </li>
                    </ul>
                </div> -->
                <h5 class="subtitle">@php($i = 1) silver plus</h5>
                <div class="screen-wrapper">
                    <ul class="seat-area couple">










                    @php($char = 'a')


                         <li class="seat-line">
                            <span>A</span>
                            <ul class="seat--area">
                                    <ul>

                                    @foreach ($query_seat as $Item)
                                        @if ($Item -> Status == "Booked")
                                            <li class="single-seat">
                                                {{$Item -> Seat_Number}}<img src="../public/assets/images/movie/seat01_Booked.png"  alt="seat">
                                            </li>
                                        @endif
                                        @if ($Item -> Status == NULL)
                                            <li class="single-seat">
                                                    <a href="#" class="clickCheck" onclick="abc({{$Item -> Seat_Number}})" id="a{{$Item -> Seat_Number}}">
                                                    {{$Item -> Seat_Number}}<img src="../public/assets/images/movie/seat01.png" id="imgStatus" alt="seat">
                                                </a>
                                            </li>
                                        @endif
                                            <?php $i++ ?>
                                        @if($i%8==0)
                                            </ul>
                                            </ul>
                                            <li class="seat-line">
                                            <span><?php if ($char >= 'a') { $char++; echo $char; }?></span>
                                            <ul class="seat--area">
                                            <ul>
                                        @endif
                                    @endforeach
                                    </ul>
                            </ul>
                        </li>
        <script>

        var ticketCount = 0;
        var seats = [];

        function abc(id)
        {
            var ts = document.getElementById("printSeats");
            var tp = document.getElementById("printTotalPrice");

            var parent = document.querySelector('#a'+id);
            var seatImg = parent.querySelector('#imgStatus');

            var ticketPrice = parseInt({{Session::get('variableName')}});

            if(seats.includes(id))
            {
                ticketCount--;
                var totalPrice = ticketPrice*ticketCount;

                var index = seats.indexOf(id);
                seats.splice(index, 1);

                ts.innerHTML = "";
                tp.innerHTML = "";
                seatImg.src = "../public/assets/images/movie/seat01.png";

                for(var i = 0; i < seats.length; i++)
                {
                    ts.innerHTML += seats[i] + " &nbsp; ";
                    tp.innerHTML = totalPrice + "/- PKR";
                }
            }
            else
            {
                ticketCount++;
                var totalPrice = ticketPrice*ticketCount;

                seats.push(id);
                ts.innerHTML = "";
                tp.innerHTML = "";

                seatImg.src = "../public/assets/images/movie/seat01_partialSelect.png";

                for(var i = 0; i < seats.length; i++)
                {
                    ts.innerHTML += seats[i] + " &nbsp; ";
                    tp.innerHTML = totalPrice + "/- PKR";
                }



            }
            console.log(seats)



        }
        </script>

    </div>














            </div>
            <div class="proceed-book bg_img" data-background="../public/assets/images/movie/movie-bg-proceed.jpg">
                <div class="proceed-to-book">
                    <div class="book-item">
                        <span>You have Selected Seats:</span>
                        <h3 class="title" id="printSeats"></h3>
                    </div>
                    <div class="book-item">
                        <span>Total Price:</span>
                        <h3 class="title" id="printTotalPrice"> </h3>
                    </div>
                    <div class="book-item">
                        <a href="movie-checkout.html" class="custom-button">proceed</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
