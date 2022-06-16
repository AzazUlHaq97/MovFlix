@extends('User_Layout')

@section('UserBody')







<main>




    <!-- slider-area -->
    <section class="slider-area slider-bg" data-background="../public/img/bg/index1.jpg">
        <div class="slider-active">
            <div class="slider-item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="slider-img text-center text-lg-right" data-animation="fadeInRight" data-delay=".5s">
                                <img src="public/img/banner/img3.gif" style="width:100%;height:500px; " alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <div class="banner-content">
                                <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.8s">Movflx</h6>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">Book <span>Movie Ticket</span> Online </h2>
                                <div class="banner-meta wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.8s">
                                    <ul>
                                        <li class="quality">
                                            <span>Pg 18</span>
                                            <span>hd</span>
                                        </li>
                                        <li class="category">
                                            <a href="#">Romance,</a>
                                            <a href="#">Drama</a>
                                        </li>
                                        <li class="release-time">
                                            <span><i class="far fa-calendar-alt"></i> 2021</span>
                                            <span><i class="far fa-clock"></i> 128 min</span>
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://www.youtube.com/watch?v=RFinNxS5KN4" class="banner-btn btn popup-video wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1.8s"><i class="fas fa-play"></i> Watch Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="slider-img text-center text-lg-right" data-animation="fadeInRight" data-delay="1s">
                                <img src="public/img/banner/img2.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <div class="banner-content">
                                <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.8s">Movflx</h6>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">Book <span>Movie Ticket</span> Online</h2>
                                <div class="banner-meta wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.8s">
                                    <ul>
                                        <li class="quality">
                                            <span>Pg 18</span>
                                            <span>hd</span>
                                        </li>
                                        <li class="category">
                                            <a href="#">Romance,</a>
                                            <a href="#">Drama</a>
                                        </li>
                                        <li class="release-time">
                                            <span><i class="far fa-calendar-alt"></i> 2021</span>
                                            <span><i class="far fa-clock"></i> 128 min</span>
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="banner-btn btn popup-video wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1.8s"><i class="fas fa-play"></i> Watch Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="slider-img text-center text-lg-right" data-animation="fadeInRight" data-delay="1s">
                                <img src="public/img/banner/slider_img02.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <h6 class="sub-title" data-animation="fadeInUp" data-delay=".2s">Movflx</h6>
                                <h2 class="title" data-animation="fadeInUp" data-delay=".4s">Book <span>Movie Ticket</span> Online </h2>
                                <div class="banner-meta" data-animation="fadeInUp" data-delay=".6s">
                                    <ul>
                                        <li class="quality">
                                            <span>Pg 18</span>
                                            <span>hd</span>
                                        </li>
                                        <li class="category">
                                            <a href="#">Romance,</a>
                                            <a href="#">Drama</a>
                                        </li>
                                        <li class="release-time">
                                            <span><i class="far fa-calendar-alt"></i> 2021</span>
                                            <span><i class="far fa-clock"></i> 120 min</span>
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="banner-btn btn popup-video" data-animation="fadeInUp" data-delay=".8s"><i class="fas fa-play"></i> Watch Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area-end -->

    <!-- up-coming-movie-area -->
    <section class="ucm-area ucm-bg2" data-background="public/img/bg/ucm_bg02.jpg">
        <div class="container">
            <div class="row align-items-end mb-55">
                <div class="col-lg-6">
                    <div class="section-title title-style-three text-center text-lg-left">
                        <span class="sub-title">ONLINE STREAMING</span>
                        <h2 class="title">New Release Movies</h2>
                    </div>
                </div>

            </div>
            <div class="tab-content" id="myTabContent" >
                <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
                    <div class="ucm-active-two owl-carousel">

                        @foreach ($query2 as $ShowMovie)


                        <div class="movie-item movie-item-two movie-item-three mb-30">
                            <div class="movie-poster">
                                <a href="{{url('Display_Movie/'.$ShowMovie->Movie_Id)}}"><img src="{{$ShowMovie->Movie_Poster}}"  style="width:100%;height:250px;"  alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5 class="title"><a href="{{url('Display_Movie/'.$ShowMovie->Movie_Id)}}">{{$ShowMovie->Movie_Title}}</a></h5>
                                <span class="rel">{{$ShowMovie->Category_Name}}</span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">

                                            <a href="#">{{$ShowMovie->Category_Country}}</a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>




                        @endforeach

                    </div>
                </div>
                {{-- <div class="tab-pane fade" id="movies" role="tabpanel" aria-labelledby="movies-tab">
                    <div class="ucm-active-two owl-carousel">
                        <div class="movie-item movie-item-two mb-30">
                            <div class="movie-poster">
                                <a href="#"><img src="public/img/poster/s_ucm_poster06.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5 class="title"><a href="#">Message in a Bottle</a></h5>
                                <span class="rel">Adventure</span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">
                                            <a href="#">HD</a>
                                            <a href="#">English</a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item movie-item-two mb-30">
                            <div class="movie-poster">
                                <a href="#"><img src="public/img/poster/s_ucm_poster07.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5 class="title"><a href="#">The Parkar Legend</a></h5>
                                <span class="rel">Adventure</span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">
                                            <a href="#">HD</a>
                                            <a href="#">English</a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item movie-item-two mb-30">
                            <div class="movie-poster">
                                <a href="#"><img src="public/img/poster/s_ucm_poster08.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5 class="title"><a href="#">The Tonoy 88 Bottle</a></h5>
                                <span class="rel">Adventure</span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">
                                            <a href="#">HD</a>
                                            <a href="#">English</a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item movie-item-two mb-30">
                            <div class="movie-poster">
                                <a href="#"><img src="public/img/poster/s_ucm_poster09.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5 class="title"><a href="#">The Ackle Bottle</a></h5>
                                <span class="rel">Adventure</span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">
                                            <a href="#">HD</a>
                                            <a href="#">English</a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item movie-item-two mb-30">
                            <div class="movie-poster">
                                <a href="#"><img src="public/img/poster/s_ucm_poster02.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5 class="title"><a href="#">Message in a Bottle</a></h5>
                                <span class="rel">Adventure</span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">
                                            <a href="#">HD</a>
                                            <a href="#">English</a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item movie-item-two mb-30">
                            <div class="movie-poster">
                                <a href="#"><img src="public/img/poster/s_ucm_poster01.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5 class="title"><a href="#">The Dog Woof</a></h5>
                                <span class="rel">Adventure</span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">
                                            <a href="#">HD</a>
                                            <a href="#">English</a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="anime" role="tabpanel" aria-labelledby="anime-tab">
                    <div class="ucm-active-two owl-carousel">
                        <div class="movie-item movie-item-two mb-30">
                            <div class="movie-poster">
                                <a href="#"><img src="public/img/poster/s_ucm_poster01.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5 class="title"><a href="#">Message in a Bottle</a></h5>
                                <span class="rel">Adventure</span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">
                                            <a href="#">HD</a>
                                            <a href="#">English</a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item movie-item-two mb-30">
                            <div class="movie-poster">
                                <a href="#"><img src="public/img/poster/s_ucm_poster02.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5 class="title"><a href="#">The Parkar Legend</a></h5>
                                <span class="rel">Adventure</span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">
                                            <a href="#">HD</a>
                                            <a href="#">English</a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item movie-item-two mb-30">
                            <div class="movie-poster">
                                <a href="#"><img src="public/img/poster/s_ucm_poster03.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5 class="title"><a href="#">The Tonoy 88 Bottle</a></h5>
                                <span class="rel">Adventure</span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">
                                            <a href="#">HD</a>
                                            <a href="#">English</a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item movie-item-two mb-30">
                            <div class="movie-poster">
                                <a href="#"><img src="public/img/poster/s_ucm_poster04.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5 class="title"><a href="#">The Ackle Bottle</a></h5>
                                <span class="rel">Adventure</span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">
                                            <a href="#">HD</a>
                                            <a href="#">English</a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item movie-item-two mb-30">
                            <div class="movie-poster">
                                <a href="#"><img src="public/img/poster/s_ucm_poster05.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5 class="title"><a href="#">Message in a Bottle</a></h5>
                                <span class="rel">Adventure</span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">
                                            <a href="#">HD</a>
                                            <a href="#">English</a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-item movie-item-two mb-30">
                            <div class="movie-poster">
                                <a href="#"><img src="public/img/poster/s_ucm_poster06.jpg" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5 class="title"><a href="#">The Dog Woof</a></h5>
                                <span class="rel">Adventure</span>
                                <div class="movie-content-bottom">
                                    <ul>
                                        <li class="tag">
                                            <a href="#">HD</a>
                                            <a href="#">English</a>
                                        </li>
                                        <li>
                                            <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- up-coming-movie-area-end -->

    <!-- gallery-area -->
    <div class="gallery-area position-relative">
        <div class="gallery-bg">

    </div>
        <div class="container-fluid p-0 fix">
            <div class="row gallery-active">
                <div class="col-12">

                    <a href="public/img/images/gallery_01.jpg">
                    <div class="gallery-item">
                        <img src="public/img/images/gallery_01.jpg" alt="">
                    </div>
                   </a>
                </div>
                <div class="col-12">
                    <a href="public/img/images/gallery_02.jpg">
                    <div class="gallery-item">
                        <img src="public/img/images/gallery_02.jpg" alt="">
                    </div>
                </a>
                </div>
                <div class="col-12">
                    <a href="public/img/images/gallery_03.jpg">
                    <div class="gallery-item">
                        <img src="public/img/images/gallery_03.jpg" alt="">
                    </div>
                    </a>
                </div>
                <div class="col-12">
                    <a href="public/img/images/gallery_04.jpg">
                    <div class="gallery-item">
                        <img src="public/img/images/gallery_04.jpg" alt="">
                    </div>
                </a>
                </div>
            </div>
        </div>
        <div class="slider-nav">



    </div>
    </div>
    <!-- gallery-area-end -->

    <!-- services-area -->


    <section class="top-rated-movie tr-movie-bg" data-background="../public/img/bg/tr_movies_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">ONLINE STREAMING</span>
                        <h2 class="title">Top Rated Movies</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="tr-movie-menu-active text-center">
                        <button class="active" data-filter="*">TV Shows</button>
                        <button class="" data-filter=".cat-one">Movies</button>
                        <button class="" data-filter=".cat-two">documentary</button>
                        <button class="" data-filter=".cat-three">sports</button>
                    </div>
                </div>
            </div>







            {{-- <div class="row tr-movie-active">
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                    <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="#"><img src="../public/img/poster/ucm_poster01.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="#">Women's Day</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">hd</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
                    <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="#"><img src="../public/img/poster/ucm_poster09.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="#">The Perfect Match</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">4k</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                    <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="#"><img src="../public/img/poster/ucm_poster03.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="#">The Dog Woof</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">hd</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
                    <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="#"><img src="../public/img/poster/ucm_poster04.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="#">The Easy Reach</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">8K</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                    <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="#"><img src="../public/img/poster/ucm_poster05.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="#">The Cooking</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">3D</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
                    <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="#"><img src="../public/img/poster/ucm_poster06.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="#">The Hikaru</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">hd</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                    <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="#"><img src="../public/img/poster/ucm_poster07.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="#">Life Quotes</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">4K</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one cat-three">
                    <div class="movie-item mb-60">
                        <div class="movie-poster">
                            <a href="#"><img src="../public/img/poster/ucm_poster08.jpg" alt=""></a>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title"><a href="#">The Beachball</a></h5>
                                <span class="date">2021</span>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><span class="quality">4K</span></li>
                                    <li>
                                        <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                        <span class="rating"><i class="fas fa-thumbs-up"></i> 3.9</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- services-area-end -->

    <!-- top-rated-movie -->
    <section class="top-rated-movie tr-movie-bg2" data-background="../public/img/bg/tr_movies_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title title-style-three text-center mb-70">
                        <span class="sub-title">top rated movies</span>
                        <h2 class="title">Top Online Movies Tralier </h2>
                    </div>
                </div>
            </div>

            <div class="row movie-item-row">
                <div class="custom-col-">
                    <div class="movie-item movie-item-two">
                        <div class="movie-poster">
                            <img src="public/img/poster/s_ucm_poster01.jpg" alt="">
                            <ul class="overlay-btn">
                                <div id="game"></div>


                                {{-- <iframe loading="lazy" id="playframe" width="1024" height="768" frameborder="0" scrolling="no" allowfullscreen="true" src="about:blank" data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://html5.gamedistribution.com/93c4b356431b4b80a3a98abbd057e85c/"></iframe><noscript><iframe id="playframe" width="1024" height="768" frameborder="0" scrolling="no" allowfullscreen="true" src="https://html5.gamedistribution.com/93c4b356431b4b80a3a98abbd057e85c/" ></iframe></noscript> --}}


                                <li><a href="#" class="btn"  onclick="NewTab()">Watch Now</a>

                                </li>

                                <script>
                                    function NewTab() {
                                        window.open(
                                          "https://html5.gamedistribution.com/93c4b356431b4b80a3a98abbd057e85c/", "_blank");
                                    }
                                </script>

                                <li><a href="#" class="btn">Details</a></li>
                            </ul>
                        </div>
                        <div class="movie-content">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="title"><a href="#">Message in a Bottle</a></h5>
                            <span class="rel">Adventure</span>
                            <div class="movie-content-bottom">
                                <ul>
                                    <li class="tag">
                                        <a href="#">HD</a>
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-">
                    <div class="movie-item movie-item-two">
                        <div class="movie-poster">
                            <img src="public/img/poster/s_ucm_poster02.jpg" alt="">
                            <ul class="overlay-btn">
                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                <li><a href="#" class="btn">Details</a></li>
                            </ul>
                        </div>
                        <div class="movie-content">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="title"><a href="#">The Parkar Legend</a></h5>
                            <span class="rel">Adventure</span>
                            <div class="movie-content-bottom">
                                <ul>
                                    <li class="tag">
                                        <a href="#">HD</a>
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-">
                    <div class="movie-item movie-item-two">
                        <div class="movie-poster">
                            <img src="public/img/poster/s_ucm_poster03.jpg" alt="">
                            <ul class="overlay-btn">
                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                <li><a href="#" class="btn">Details</a></li>
                            </ul>
                        </div>
                        <div class="movie-content">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="title"><a href="#">The Ackle Bottle</a></h5>
                            <span class="rel">Adventure</span>
                            <div class="movie-content-bottom">
                                <ul>
                                    <li class="tag">
                                        <a href="#">HD</a>
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-">
                    <div class="movie-item movie-item-two">
                        <div class="movie-poster">
                            <img src="public/img/poster/s_ucm_poster04.jpg" alt="">
                            <ul class="overlay-btn">
                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                <li><a href="#" class="btn">Details</a></li>
                            </ul>
                        </div>
                        <div class="movie-content">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="title"><a href="#">The Speed 2</a></h5>
                            <span class="rel">Adventure</span>
                            <div class="movie-content-bottom">
                                <ul>
                                    <li class="tag">
                                        <a href="#">HD</a>
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-">
                    <div class="movie-item movie-item-two">
                        <div class="movie-poster">
                            <img src="public/img/poster/s_ucm_poster05.jpg" alt="">
                            <ul class="overlay-btn">
                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                <li><a href="#" class="btn">Details</a></li>
                            </ul>
                        </div>
                        <div class="movie-content">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="title"><a href="#">The Legend Emo</a></h5>
                            <span class="rel">Adventure</span>
                            <div class="movie-content-bottom">
                                <ul>
                                    <li class="tag">
                                        <a href="#">HD</a>
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-">
                    <div class="movie-item movie-item-two">
                        <div class="movie-poster">
                            <img src="public/img/poster/s_ucm_poster06.jpg" alt="">
                            <ul class="overlay-btn">
                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                <li><a href="#" class="btn">Details</a></li>
                            </ul>
                        </div>
                        <div class="movie-content">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="title"><a href="#">Envato Bottle 88</a></h5>
                            <span class="rel">Adventure</span>
                            <div class="movie-content-bottom">
                                <ul>
                                    <li class="tag">
                                        <a href="#">HD</a>
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-">
                    <div class="movie-item movie-item-two">
                        <div class="movie-poster">
                            <img src="public/img/poster/s_ucm_poster07.jpg" alt="">
                            <ul class="overlay-btn">
                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                <li><a href="#" class="btn">Details</a></li>
                            </ul>
                        </div>
                        <div class="movie-content">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="title"><a href="#">Message Bottle II</a></h5>
                            <span class="rel">Adventure</span>
                            <div class="movie-content-bottom">
                                <ul>
                                    <li class="tag">
                                        <a href="#">HD</a>
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-">
                    <div class="movie-item movie-item-two">
                        <div class="movie-poster">
                            <img src="public/img/poster/s_ucm_poster08.jpg" alt="">
                            <ul class="overlay-btn">
                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                <li><a href="#" class="btn">Details</a></li>
                            </ul>
                        </div>
                        <div class="movie-content">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="title"><a href="#">The Message B.</a></h5>
                            <span class="rel">Adventure</span>
                            <div class="movie-content-bottom">
                                <ul>
                                    <li class="tag">
                                        <a href="#">HD</a>
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-">
                    <div class="movie-item movie-item-two">
                        <div class="movie-poster">
                            <img src="public/img/poster/s_ucm_poster09.jpg" alt="">
                            <ul class="overlay-btn">
                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                <li><a href="#" class="btn">Details</a></li>
                            </ul>
                        </div>
                        <div class="movie-content">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="title"><a href="#">Tiger World Q.</a></h5>
                            <span class="rel">Adventure</span>
                            <div class="movie-content-bottom">
                                <ul>
                                    <li class="tag">
                                        <a href="#">HD</a>
                                        <a href="#">Bluray</a>
                                    </li>
                                    <li>
                                        <span class="like"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-">
                    <div class="movie-item movie-item-two">
                        <div class="movie-poster">
                            <img src="public/img/poster/s_ucm_poster10.jpg" alt="">
                            <ul class="overlay-btn">
                                <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li>
                                <li><a href="#" class="btn">Details</a></li>
                            </ul>
                        </div>
                        <div class="movie-content">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="title"><a href="#">Avenger World IV</a></h5>
                            <span class="rel">Adventure</span>
                            <div class="movie-content-bottom">
                                <ul>
                                    <li class="tag">
                                        <a href="#">HD</a>
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <span class="like"><i class="fas fa-thumbs-up"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <section class="newsletter-area newsletter-bg" data-background="../public/img/bg/newsletter_bg.jpg">
        <div class="container">
            <div class="newsletter-inner-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="newsletter-content">
                            <h4 style="font-size: 24px;">SUBSCRIBE FOR OUR MOVIES UPDATES.</h4>
                            <p>Don't worry, we won't spam you. You will be able to unsubscribe with a single mouse click.</p>
                            {{-- <p>Enter your email to create or restart your membership.</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="#" class="newsletter-form">
                            <input type="email" required placeholder="Enter your email" required>
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>





@endsection
