
@extends('User_Layout')

@section('UserBody')




<link rel="stylesheet" href="../public/M/css/plugins.css">


<style>


    .ceb-infor{
      background-color: #091a2c;
      padding: 10px 20px;
      width: 100%;

    }

    .ceb-infor {
      background-color: #e4eaf0;
    }

    .ceb-infor p{
      color: #abb7c4;
    }



    .ceb-infor h2 a{
      color: #abb7c4;
    }

    .ceb-infor span {
      color: #9ca9b7;
    }
    .ceb-infor:hover h2 a {
      color: #9ca9b7;
    }



    .ceb-item-style-2 {
      display: flex;
      width: 100%;
      /* background-color: #091a2c; */
      background-color: #1c1c24;
      margin-bottom: 30px;
    }


      .ceb-item-style-2 img {
        max-width: 50%;
        margin: 0 auto;
      }



    .ceb-item-style-2 .ceb-infor {
      background-color: #1c1c24;
      padding: 10px 20px;
      width: 100%;
    }
    .ceb-item-style-2 h2 a {
      font-family: 'Dosis', sans-serif;
      font-size: 18px;
      color: #ffffff;
      font-weight: 700;
      text-transform: none;
    }
    .ceb-item-style-2 span {
      font-family: 'Nunito', sans-serif;
      font-size: 12px;
      color: #abb7c4;
      font-weight: 300;
      text-transform: uppercase;
    }
    .ceb-item-style-2:hover h2 a {
      color: #dcf836;
    }


</style>
    <main>



<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg"data-background="public/img/bg/bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title">Celebrity Grid View</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('Index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Celebrity Grid View</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- blog-area -->
<section class="blog-area blog-bg" data-background="public/img/bg/blog_bg.jpg">
    <div class="container">
        <div class="row">



            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">



                <div class="topbar-filter" style="border-top:1px solid #e4d804;border-bottom: 1px solid #e4d804;margin-bottom:50px">
                    <div class="widget blog-widget" style="height:50px;padding:10px">
                    <div class="row">
                <div class="col-md-5">
                    <p class="pad-change" style="line-height:30px;">Found <span>1,608 celebrities</span> in total</p>
                </div>

         <label style="line-height:30px;">Sort by</label>

          <div class="col-md-4">
                    <select class="btn" style="width:400px;height:7px;border-radius:0%;border:none">
                    <option value="popularity">Popularity Descending</option>
                        <option value="popularity">Popularity Ascending</option>
                        <option value="rating">Rating Descending</option>
                        <option value="rating">Rating Ascending</option>
                        <option value="date">Release date Descending</option>
                        <option value="date">Release date Ascending</option>
                    </select>
                </div>



                    <div class="col-md-1" >

                    <a href="{{url('Celebrity')}}" style="font-size: 30px;" class="list"><i class="ion-ios-list-outline active"></i></a>
                  </div>
                  <div class="col-md-1">
                    <a href="{{url('Celebrity_grid')}}" style="font-size: 30px;" class="grid"><i class="ion-grid "></i></a>

                </div>
                </div>
                </div>

                </div>




                <div class="celebrity-items">
                    <div class="row">
                        @foreach ($query_cast as $cast)
                    <div class="col-md-4">
                        <a href="celebritysingle.html"><img src="{{$cast->Actors_Img}}" style="width:100%;height:350px" alt=""></a>
                        <div style="background:transparent;padding-bottom:10px;padding-top:10px;">
                            <h2><a href="celebritylist.html">{{$cast->Actors_Name}}</a></h2>
                            {{-- <span style="font-size:14px;color:silver">{{$cast->Actors_Des}}</span> --}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="celebritylist.html"><img src="{{$cast->Actresses_Img}}" style="width:100%;height:350px;" alt=""></a>
                        <div style="background:transparent;padding-bottom:10px;padding-top:10px;">
                            <h2><a href="celebritylist.html">{{$cast->Actresses_Name}}</a></h2>
                            {{-- <span style="font-size:14px;color:silver">{{$cast->Actresses_Des}}</span> --}}
                        </div>
                    </div>

                    @endforeach









{{--
                    <div class="col-md-4">
                        <a href="celebritysingle.html"><img src="public/I/images/uploads/ceb7.jpg" style="width:100%;" alt=""></a>
                        <div style="background:transparent;padding-bottom:10px;padding-top:10px;">
                            <h2><a href="celebritylist.html">Micheal Bay</a></h2>
                            <span style="font-size:14px;color:silver">Director, france</span>
                        </div>
                    </div> --}}


                </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="pagination-wrap mt-30">
                            <nav>
                                <ul>
                                    {{$query_cast->links()}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>








            <div class="col-lg-4 col-md-4">
                <aside class="blog-sidebar">
                    <div class="widget blog-widget">
                        <div class="widget-title mb-30">
                            <h5 class="title">Search Objects</h5>
                        </div>
                        <form action="#" class="sidebar-search">
                            <input type="text" placeholder="Search...">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget blog-widget">
                        <div class="widget-title mb-30">
                            <h5 class="title">Categories</h5>
                        </div>
                        <div class="sidebar-cat">
                            <ul>
                                <li><a href="#">Movies</a> <span>12</span></li>
                                <li><a href="#">Action Movies</a> <span>10</span></li>
                                <li><a href="#">Streaming</a> <span>9</span></li>
                                <li><a href="#">Download</a> <span>16</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget blog-widget">
                        <div class="widget-title mb-30">
                            <h5 class="title">Recent Posts</h5>
                        </div>
                        <div class="rc-post">
                            <ul>
                                <li class="rc-post-item">
                                    <div class="thumb">
                                        <a href="blog-details.html"><img src="public/img/blog/rc_post_thumb01.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="blog-details.html">Express Management Effective</a></h5>
                                        <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                                    </div>
                                </li>
                                <li class="rc-post-item">
                                    <div class="thumb">
                                        <a href="blog-details.html"><img src="public/img/blog/rc_post_thumb02.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="blog-details.html">Where watch English movies free?</a></h5>
                                        <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                                    </div>
                                </li>
                                <li class="rc-post-item">
                                    <div class="thumb">
                                        <a href="blog-details.html"><img src="public/img/blog/rc_post_thumb03.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="blog-details.html">House movie streaming website</a></h5>
                                        <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget blog-widget">
                        <div class="widget-title mb-30">
                            <h5 class="title">Tag Post</h5>
                        </div>
                        <div class="tag-list">
                            <ul>
                                <li><a href="#">Movies</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Romantic</a></li>
                                <li><a href="#">Who</a></li>
                                <li><a href="#">English</a></li>
                                <li><a href="#">Blending</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- blog-area-end -->



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
