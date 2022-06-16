@extends('User_Layout')


@section('UserBody')




<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="public/img/bg/movie4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Our <span>Movie</span></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('Index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Movie</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- movie-area -->
    <section class="movie-area movie-bg" data-background="public/img/bg/movie_bg.jpg">
        <div class="container">
            <div class="row align-items-end mb-60">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-left">
                        <span class="sub-title">ONLINE STREAMING</span>
                        <h2 class="title">New Release Movies</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="movie-page-meta">

                            <form action="{{url('Movie')}}" style="display:inline-flex;" class="movie-filter-form" method="POST" enctype="multipart/form-data">
                                @csrf



                            <select name="inpCat" style="width:200px;border:none;border-radius:0px;height:20px;" class="custom-select">
                                <option value="">Select Category</option>
                                @foreach ($query1 as $Item)
                                <option value="{{$Item->Category_Id}}">{{$Item->Category_Name}}</option>
                                @endforeach

                            </select>
                    <button type="submit" class="btn1 btn-danger" style="width:70px;border:none;height:45px;"><i class="fas fa-search"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="row tr-movie-active">

                @foreach ($query2 as $ShowMovie)


                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one">

                    <div class="movie-item movie-item-three  movie-item-two  mb-50">

                        <div class="movie-poster">

                            <img src="{{$ShowMovie->Movie_Poster}}"  style="width:100%;height:350px;" alt="">
                            <ul class="overlay-btn">
                                <li class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                                <li><a href="{{$ShowMovie->Movie_Url}}" class="popup-video btn">Watch Now</a></li>
                                <li><a href="{{url('Display_Movie/'.$ShowMovie->Movie_Id)}}"class="btn">Details</a></li>
                            </ul>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="movie-details.html">{{$ShowMovie->Movie_Title}}</a></h5>
                                <span class="date">{{$ShowMovie->Movie_Release_year}}</span>
                            </div>
                            <div class="bottom">
                                <ul>





                                    <li><span class="quality">Blockbuster</span></li>


                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i>{{$ShowMovie->Movie_duration_min}}</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="pagination-wrap mt-30">
                        <nav>
                            <ul>

                                {{$query2->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- movie-area-end -->

    <!-- newsletter-area -->
    <section class="newsletter-area newsletter-bg" data-background="../public/img/bg/newsletter_bg.jpg">
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
                            <input type="email" required placeholder="Enter your email" required>
                            <button class="btn">get started</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-area-end -->

</main>
<!-- main-a

@endsection
