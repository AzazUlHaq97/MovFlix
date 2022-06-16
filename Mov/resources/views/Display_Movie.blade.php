@extends('User_Layout')

@section('UserBody')


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



        <main>
            <!-- ==========Banner-Section========== -->

              <!-- ==========Book-Section========== -->
                      <!-- movie-details-area -->
                      {{-- <section class="breadcrumb-area breadcrumb-bg"data-background="public/img/bg/banner3.jpg"> --}}
                    <section class="details-banner bg_img" data-background="../public/img/bg/banner3.jpg">
                  <div class="container">

                      <div class="details-banner-wrapper">
                          <div class="details-banner-thumb">
                            <input type="hidden" name="M_Id" value="{{$query_Show_Movie[0] ->Movie_Id}}">
                       <img src="../{{$query_Show_Movie[0] ->Movie_Poster}}" style="width:100%;height:314px;" alt="movie">
                              <a href="{{$query_Show_Movie[0] ->Movie_Url}}" class="video-popup">
                                  <img src="../public/assets/images/movie/video-button.png" alt="movie">
                              </a>
                          </div>
                          <div class="details-banner-content offset-lg-3">
                              <h3 class="title">{{$query_Show_Movie[0] ->Movie_Title}}</h3>
                              <div class="tags">
                                  <a href="#0">{{$query_The[0] ->Theaters_Name}}</a>

                              </div>
                              <a href="#0" class="button">{{$query_category[0] ->Category_Name}}</a>
                              <div class="social-and-duration">
                                  <div class="duration-area">
                                      <div class="item">

                                          <input type="hidden"  value="{{$query1[0]->Show_Id}}">
                                          <input type="hidden" value="{{$query1[0]->Movie_Id}}">
                                          <i class="fas fa-calendar-alt"></i><span>{{$query1[0]->Date}}</span>
                                      </div>
                                      <div class="item">
                                          <i class="far fa-clock"></i><span>{{$query_Show_Movie[0] ->Movie_duration_min}}</span>
                                      </div>
                                  </div>
                                  <ul class="social-share">
                                      <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                                      <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>

                  </div>
              </section>

              <section class="book-section bg-one">
                <div class="container">
                    <div class="book-wrapper offset-lg-4">
                        <div class="left-side" style="padding: 0px;height:80px;">
                            <div class="item">
                                <div class="item-header">
                                    <div class="">
                                        <img src="../public/assets/images/movie/T1.png" style="width:60px;height:40px;margin-bottom: 20px" alt="movie">
                                    </div>
                                    <div class="counter-area">
                                        <span class="counter-item odometer" style="font-size: 23px;" data-odometer-final="{{$query_Show_Movie[0] ->Movie_Price}}"></span>
                                    </div>
                                </div>
                                <a href="#" style="width:150px;padding:7px;margin:0px" class="custom-button">Ticket <?php $_SESSION['a'] = $query_Show_Movie[0] ->Movie_Price; echo $_SESSION['a']; ?></a>
                            </div>
                            <div class="item">
                                <div class="item-header">
                                    <div class="">
                                        <img src="../public/assets/images/movie/cake.png" style="width:40px;height:40px;margin-bottom: 20px"  alt="movie">
                                    </div>

                                </div>
                                <a href="{{url('Movie_Products')}}" style="width:150px;padding:7px;margin:0px" class="custom-button">Food</a>
                            </div>
                            <div class="item">
                                <div class="item-header">
                                    <div class="">
                                        <img src="../public/assets/images/movie/seat01.png" style="width:40px;height:40px;margin-bottom: 20px"  alt="movie">
                                    </div>

                                </div>
                                <!-- <a href="{{url('Movie_Seats')}}" style="width:150px;padding:7px;margin:0px" class="custom-button">Seats</a> -->
                                 <a href="{{url('Movie_Seats/'.$query1[0]->Show_Id)}}" style="width:150px;padding:7px;margin:0px" class="custom-button">Seats</a>
                            </div>

                        </div>
                        @if (!session()-> has('User_Name'))
                        <a href="{{url('Login')}}" class="custom-button">book tickets</a>

                        @else
                        <a href="{{url('Movie_BookingProcess/'.$query_Show_Movie[0]->Movie_Id)}}" class="custom-button">book tickets</a>
                        @endif
                    </div>
                </div>
            </section>


                    <!-- ==========Book-Section========== -->
              <!-- ==========Book-Section========== -->
              <!-- ==========Book-Section========== -->

             <section class="movie-details-area"data-background="../public/img/bg/episode_bg.jpg">
                          <div class="container">
                              <div class="row justify-content-center flex-wrap-reverse mb--50">
                                  <div class="col-lg-3 col-sm-10 col-md-6 mb-50">
                                      <div class="widget-1 widget-tags">
                                        <div class="widget-1 widget-offer">
                                            <h3 class="title">Applicable offer</h3>
                                            <div class="offer-body">
                                                <div class="offer-item">
                                                    <div class="thumb">
                                                        <img src="../public/assets/images/sidebar/offer01.png" alt="sidebar">
                                                    </div>
                                                    <div class="content">
                                                        <h6>
                                                            <a href="#0">Amazon Pay Cashback Offer</a>
                                                        </h6>
                                                        <p>Win Cashback Upto Rs 300*</p>
                                                    </div>
                                                </div>
                                                <div class="offer-item">
                                                    <div class="thumb">
                                                        <img src="../public/assets/images/sidebar/two.jpg" style="width: 60px;height:60px;" alt="sidebar">
                                                    </div>
                                                    <div class="content">
                                                        <h6>
                                                            <a href="#0">Jazz Cash Offer</a>
                                                        </h6>
                                                        <p>Transact first time with Jazz Cash and
                                                            get 100% cashback up to Rs. 500</p>
                                                    </div>
                                                </div>
                                                <div class="offer-item">
                                                    <div class="thumb">
                                                        <img src="../public/assets/images/sidebar/three.png" style="width: 60px;height:60px;text-align:center"  alt="sidebar">
                                                    </div>
                                                    <div class="content">
                                                        <h6>
                                                            <a href="#0">HBL PayPak DebitCard</a>
                                                        </h6>
                                                        <p>Get 15% discount up to PayPak 100*
                                                            and PayPak 50* off on F&B T&C apply</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      </div>

                                      <div class="widget-1 widget-banner">
                                          <div class="widget-1-body">
                                              <a href="#0">
                                                  <img src="../public/assets/images/sidebar/banner/one.jpg" alt="banner">
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-9 mb-50">
                                      <div class="movie-details">
                                          <h3 class="title">photos</h3>
                                          <div class="details-photos owl-carousel">
                                              <div class="thumb">
                                                  <a href="../public/assets/images/movie/one1.jpg" class="img-pop">
                                                      <img src="../public/assets/images/movie/one1.jpg" style="width:100%;height:350px;" alt="movie">
                                                  </a>
                                              </div>
                                              <div class="thumb">
                                                  <a href="../public/assets/images/movie/one2.jpg" class="img-pop">
                                                      <img src="../public/assets/images/movie/one2.jpg" style="width:100%;height:350px;" alt="movie">
                                                  </a>
                                              </div>
                                              <div class="thumb">
                                                  <a href="../public/assets/images/movie/one3.jpg" class="img-pop">
                                                      <img src="../public/assets/images/movie/one3.jpg" style="width:100%;height:350px;" alt="movie">
                                                  </a>
                                              </div>
                                              <div class="thumb">
                                                  <a href="../public/assets/images/movie/one4.jpg" class="img-pop">
                                                      <img src="../public/assets/images/movie/one4.jpg" style="width:100%;height:350px;" alt="movie">
                                                  </a>
                                              </div>
                                              <div class="thumb">
                                                  <a href="../public/assets/images/movie/one5.jpg" class="img-pop">
                                                      <img src="../public/assets/images/movie/one5.jpg" style="width:100%;height:350px;" alt="movie">
                                                  </a>
                                              </div>
                                              <div class="thumb">
                                                  <a href="../public/assets/images/movie/one6.jpg" class="img-pop">
                                                      <img src="../public/assets/images/movie/one6.jpg"  style="width:100%;height:350px;" alt="movie">
                                                  </a>
                                              </div>
                                          </div>
                               <div class="tab summery-review">
                                              <ul class="tab-menu">
                                                  <li>
                                                      summery
                                                  </li>
                                                  <li class="active">
                                                      user review <span>147</span>
                                                  </li>
                                              </ul>
                                              <div class="tab-area">
                                                  <div class="tab-item">
                                                      <div class="item">
                                                          <h5 class="sub-title">{{$query_Show_Movie[0] ->Movie_Title}}</h5>
                                                          <p>{{$query_Show_Movie[0] ->Movie_Description}} </p>
                                                      </div>
                                                      <div class="item">
                                                          <div class="header">
                                                              <h5 class="sub-title">cast</h5>
                                                              <div class="navigation">
                                                                  <div class="cast-prev"><i class="flaticon-double-right-arrows-angles"></i></div>
                                                                  <div class="cast-next"><i class="flaticon-double-right-arrows-angles"></i></div>
                                                              </div>
                                                          </div>
                                                          <div class="casting-slider owl-carousel">
                                                              <div class="cast-item">
                                                                  <div class="cast-thumb">
                                                                      <input type="hidden" value="{{$query2[0] ->Cast_Id}}">
                                                                      <a href="#0">
                                                                          <img src="../{{$query_Show_Movie[0] ->Movie_Director_Img}}" style="width:110px;height:110px;" alt="cast">
                                                                      </a>
                                                                  </div>
                                                                  <div class="cast-content">
                                                                      <h6 class="cast-title"><a href="#0">{{$query_Show_Movie[0] ->Movie_Director_Name}}</a></h6>
                                                                      <span class="cate">Director</span>
                                                                      <p style="overflow:hidden;width:200px;height:100px;text-align: justify;">s{{$query_Show_Movie[0] ->Movie_Director_Description}}</p>
                                                                  </div>
                                                              </div>
                                                              <div class="cast-item">
                                                                <div class="cast-thumb">
                                                                    <a href="#0">
                                                                        <img src="../{{$query2[0] ->Actors_Img}}" style="width:110px;height:110px;"  alt="cast">
                                                                    </a>
                                                                </div>
                                                                <div class="cast-content">
                                                                    <h6 class="cast-title"><a href="#0">{{$query2[0] ->Actors_Name}}</a></h6>
                                                                    <span class="cate">Actor</span>
                                                                    <p style="overflow:hidden;width:200px;height:100px;text-align:justify;">{{$query2[0] ->Actors_Des}}</p>
                                                                </div>
                                                            </div>
                                                              <div class="cast-item">
                                                                  <div class="cast-thumb">
                                                                      <a href="#0">
                                                                          <img src="../{{$query2[0] ->Actresses_Img}}" style="width:110px;height:110px;"  alt="cast">
                                                                      </a>
                                                                  </div>
                                                                  <div class="cast-content">
                                                                      <h6 class="cast-title"><a href="#0">{{$query2[0] ->Actresses_Name}}</a></h6>
                                                                      <span class="cate">Actress</span>
                                                                      <p style="overflow:hidden;width:200px;height:100px;text-align:justify;">{{$query2[0] ->Actresses_Des}}</p>
                                                                  </div>
                                                              </div>

                                                          </div>
                                                      </div>

                                                  </div>
                                                  <div class="tab-item active">



                                                      @foreach ($query_review as $Rev)


                                                      <div class="movie-review-item">
                                                          <div class="author">
                                                              <div class="thumb">
                                                                  <a href="#0">

                                                                      <img src="../{{$Rev->Image}}" style="width:60px;height:55px; " alt="cast">

                                                                    </a>
                                                              </div>
                                                              <div class="movie-review-info">
                                                                  <span class="reply-date"></span>
                                                                  <h6 class="subtitle"><a href="#0">{{$Rev->Name}}</a></h6>
                                                                  <span><i class="fas fa-check"></i>{{$Rev->Registration_Date}}</span>
                                                              </div>
                                                          </div>
                                                          <div class="movie-review-content">
                                                              <div class="review">
                                                                  <i class="flaticon-favorite-heart-button"></i>
                                                                  <i class="flaticon-favorite-heart-button"></i>
                                                                  <i class="flaticon-favorite-heart-button"></i>
                                                                  <i class="flaticon-favorite-heart-button"></i>
                                                                  <i class="flaticon-favorite-heart-button"></i>
                                                              </div>

                                                              <input type="hidden">
                                                              <h6 class="cont-title">{{$Rev->R_Name}}</h6>
                                                              <p>{{$Rev->R_Des}}</p>
                                                              <div class="review-meta">


{{--

 --}}




                                     <span style="font-size: 18px;">Reviews :



                                      @if (($Rev->R_Stars) == 1)

                                      <input class="hide" type="hidden" title="Sad" name="sad" id="sad">
                                      <i class="fas fa-heart option-sad" style="color: red"></i>


                                      @elseif (($Rev->R_Stars) == 2)
                                      <input class="hide" type="hidden" title="Meh" name="meh" id="meh">
                                      <i class="fas fa-heart option-meh" style="color: red"></i>
                                      <i class="fas fa-heart option-meh" style="color: red"></i>

                                      @elseif (($Rev->R_Stars) == 3)
                                      <input class="hide" type="hidden" title="One" name="one" id="one">
                                      <i class="fas fa-heart  option-one" style="color: red"></i>
                                      <i class="fas fa-heart  option-one" style="color: red"></i>
                                      <i class="fas fa-heart  option-one" style="color: red"></i>

                                      @elseif (($Rev->R_Stars) == 4)
                                        <input class="hide" type="hidden" title="Happy1" name="happy1" id="happy1">
                                      <i class="fas fa-heart option-happy1" style="color: red"></i>
                                      <i class="fas fa-heart option-happy1" style="color: red"></i>
                                      <i class="fas fa-heart option-happy1" style="color: red"></i>
                                      <i class="fas fa-heart option-happy1" style="color: red"></i>

                                      @elseif (($Rev->R_Stars) == 5)

                                    <input class="hide" type="hidden" title="Happy" name="happy" id="happy">
                                      <i class="fas fa-heart option-happy" style="color: red"></i>
                                      <i class="fas fa-heart option-happy" style="color: red"></i>
                                      <i class="fas fa-heart option-happy" style="color: red"></i>
                                      <i class="fas fa-heart option-happy" style="color: red"></i>
                                      <i class="fas fa-heart option-happy" style="color: red"></i>






                                     @endif

                                    </span>









                                                            </div>

                                                              </div>
                                                          </div>

                                                      @endforeach
  </div>



                                                      <div class="load-more text-center">
                                                          <a href="#0" class="custom-button transparent">load more</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                          </div>

                      </section>




          <!-- //ABOUT ka hai -->


                      <section class="episode-area episode-bg" data-background="../public/img/bg/episode_bg.jpg">
                          <div class="container">

                              <div class="row">
                                  <div class="col-12">
                                      <div class="movie-history-wrap">
                                          <h3 class="title">About <span>History</span></h3>
                                          <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many variations of passages of lorem
                                          Ipsum available, but the majority have suffered alteration in some injected humour.There are many variations of passages
                                          of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised
                                          words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure
                                          there isn't anything errassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                          repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of
                                          over 200 Latin words, combined with a handful</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
          <!-- //ABOUT ka hai -->


                      <!-- episode-area-end -->

                      <!-- tv-series-area -->
                      <section class="tv-series-area tv-series-bg" data-background="../public/img/bg/tv_series_bg02.jpg">
                          <div class="container">
                              <div class="row justify-content-center">
                                  <div class="col-lg-8">
                                      <div class="section-title text-center mb-50">
                                        <span class="sub-title">Best Movies Tralier</span>
                                        <h2 class="title">Top Rated Movies</h2>
                                      </div>
                                  </div>
                              </div>
                              <div class="row justify-content-center">
                                  <div class="col-xl-3 col-lg-4 col-sm-6">
                                      <div class="movie-item mb-50">
                                          <div class="movie-poster">
                                              <a href="#"><img src="../public/img/poster/ucm_poster09.jpg" alt=""></a>
                                          </div>
                                          <div class="movie-content">
                                              <div class="top">
                                                  <h5 class="title"><a href="#"><>Women's Day</a></h5>
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
                                  <div class="col-xl-3 col-lg-4 col-sm-6">
                                      <div class="movie-item mb-50">
                                          <div class="movie-poster">
                                              <a href="#"><img src="../public/img/poster/ucm_poster10.jpg" alt=""></a>
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
                                  <div class="col-xl-3 col-lg-4 col-sm-6">
                                      <div class="movie-item mb-50">
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
                                  <div class="col-xl-3 col-lg-4 col-sm-6">
                                      <div class="movie-item mb-50">
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
                              </div>
                          </div>
                      </section>
                      <!-- tv-series-area-end -->

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
                  <!-- main-area-end -->

                  @endsection
