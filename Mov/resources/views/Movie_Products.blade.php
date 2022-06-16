@extends('User_Layout')

@section('UserBody')


<link rel="stylesheet" href="../public/assets/css/nice-select.css">
<link rel="stylesheet" href="../public/assets/css/main.css">



<section class="breadcrumb-area breadcrumb-bg" data-background="public/img/bg/food2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">WE HAVE FOOD</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('Index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Food</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>





    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="../public/img/bg/episode_bg.jpg">
        <div class="container">

    <!-- ==========Movie-Section========== -->

            <div class="row">
                <div class="col-lg-12">

                    <!-- <div class="section-header-3">
                        <span class="cate">You're hungry</span>
                        <h2 class="title">we have food</h2>
                        <p>Prebook Your Meal and Save More!</p>
                    </div> -->
                    <div class="grid--area">
                        <ul class="filter">
                            <li data-filter="*" class="active">all</li>
                            <li data-filter=".combos">combos</li>
                            <li data-filter=".bevarage">bevarage</li>
                            <li data-filter=".popcorn">popcorn</li>
                        </ul>
                        <div class="grid-area">


                        @foreach ($query_Food as $products)
                            <div class="grid-item combos popcorn">
                                <div class="grid-inner">
                                    <div class="grid-thumb">
                                        <img src="{{$products->picture}}" alt="movie/popcorn">
                                        <div class="offer-tag">
                                            ${{$products->price}}
                                        </div>
                                        <div class="offer-remainder">
                                            <h6 class="o-title mt-0">24%</h6>
                                            <span>off</span>
                                        </div>
                                    </div>
                                    <div class="grid-content">
                                        <h5 class="subtitle">
                                            <a href="#0">
                                            {{$products->Product_Name}}
                                            </a>
                                        </h5>
                                        <form class="cart-button">
											<div class="cart-plus-minus">
			                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
			                            	</div>
			                            	<button type="submit" class="custom-button">
			                            		add
			                            	</button>
			                            </form>
                                    </div>
                                </div>
                            </div>
@endforeach

                            <!-- <div class="grid-item bevarage">
                                <div class="grid-inner">
                                    <div class="grid-thumb">
                                        <img src="../public/assets/images/movie/popcorn/pop2.png" alt="movie/popcorn">
                                        <div class="offer-tag">
                                            $57
                                        </div>
                                        <div class="offer-remainder">
                                            <h6 class="o-title mt-0">24%</h6>
                                            <span>off</span>
                                        </div>
                                    </div>
                                    <div class="grid-content">
                                        <h5 class="subtitle">
                                            <a href="#0">
                                                Crispy Beef Taco, Beef Mucho Nachos
                                            </a>
                                        </h5>
                                        <form class="cart-button">
											<div class="cart-plus-minus">
			                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
			                            	</div>
			                            	<button type="submit" class="custom-button">
			                            		add
			                            	</button>
			                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item combos">
                                <div class="grid-inner">
                                    <div class="grid-thumb">
                                        <img src="../public/assets/images/movie/popcorn/pop3.png" alt="movie/popcorn">
                                        <div class="offer-tag">
                                            $57
                                        </div>
                                        <div class="offer-remainder">
                                            <h6 class="o-title mt-0">24%</h6>
                                            <span>off</span>
                                        </div>
                                    </div>
                                    <div class="grid-content">
                                        <h5 class="subtitle">
                                            <a href="#0">
                                                Chicken Quesadilla Crispy Beef Taco
                                            </a>
                                        </h5>
                                        <form class="cart-button">
											<div class="cart-plus-minus">
			                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
			                            	</div>
			                            	<button type="submit" class="custom-button">
			                            		add
			                            	</button>
			                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item bevarage popcorn">
                                <div class="grid-inner">
                                    <div class="grid-thumb">
                                        <img src="../public/assets/images/movie/popcorn/pop4.png" alt="movie/popcorn">
                                        <div class="offer-tag">
                                            $57
                                        </div>
                                        <div class="offer-remainder">
                                            <h6 class="o-title mt-0">24%</h6>
                                            <span>off</span>
                                        </div>
                                    </div>
                                    <div class="grid-content">
                                        <h5 class="subtitle">
                                            <a href="#0">
                                                MexiDips & Chips, Beef Muchaco
                                            </a>
                                        </h5>
                                        <form class="cart-button">
											<div class="cart-plus-minus">
			                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
			                            	</div>
			                            	<button type="submit" class="custom-button">
			                            		add
			                            	</button>
			                            </form>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
 


            {{-- <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title">Venus</h3>
                    <div class="tags">
                        <a href="#0">City Walk</a>
                        <a href="#0">English - 2D</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Page-Title========== -->
    {{-- <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="movie-ticket-plan.html" class="custom-button back-button">
                        <i class="flaticon-double-right-arrows-angles"></i>back
                    </a>
                </div>
                <div class="item date-item">
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
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ==========Page-Title========== -->

    {{-- <!-- ==========Movie-Section========== -->
    <div class="movie-facility padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="section-header-3">
                        <span class="cate">You're hungry</span>
                        <h2 class="title">we have food</h2>
                        <p>Prebook Your Meal and Save More!</p>
                    </div>
                    <div class="grid--area">
                        <ul class="filter">
                            <li data-filter="*" class="active">all</li>
                            <li data-filter=".combos">combos</li>
                            <li data-filter=".bevarage">bevarage</li>
                            <li data-filter=".popcorn">popcorn</li>
                        </ul>
                        <div class="grid-area">
                            <div class="grid-item combos popcorn">
                                <div class="grid-inner">
                                    <div class="grid-thumb">
                                        <img src="../public/assets/images/movie/popcorn/pop1.png" alt="movie/popcorn">
                                        <div class="offer-tag">
                                            $57
                                        </div>
                                        <div class="offer-remainder">
                                            <h6 class="o-title mt-0">24%</h6>
                                            <span>off</span>
                                        </div>
                                    </div>
                                    <div class="grid-content">
                                        <h5 class="subtitle">
                                            <a href="#0">
                                                Muchaco, Crispy Taco, Bean Burrito
                                            </a>
                                        </h5>
                                        <form class="cart-button">
											<div class="cart-plus-minus">
			                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
			                            	</div>
			                            	<button type="submit" class="custom-button">
			                            		add
			                            	</button>
			                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item bevarage">
                                <div class="grid-inner">
                                    <div class="grid-thumb">
                                        <img src="../public/assets/images/movie/popcorn/pop2.png" alt="movie/popcorn">
                                        <div class="offer-tag">
                                            $57
                                        </div>
                                        <div class="offer-remainder">
                                            <h6 class="o-title mt-0">24%</h6>
                                            <span>off</span>
                                        </div>
                                    </div>
                                    <div class="grid-content">
                                        <h5 class="subtitle">
                                            <a href="#0">
                                                Crispy Beef Taco, Beef Mucho Nachos
                                            </a>
                                        </h5>
                                        <form class="cart-button">
											<div class="cart-plus-minus">
			                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
			                            	</div>
			                            	<button type="submit" class="custom-button">
			                            		add
			                            	</button>
			                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item combos">
                                <div class="grid-inner">
                                    <div class="grid-thumb">
                                        <img src="../public/assets/images/movie/popcorn/pop3.png" alt="movie/popcorn">
                                        <div class="offer-tag">
                                            $57
                                        </div>
                                        <div class="offer-remainder">
                                            <h6 class="o-title mt-0">24%</h6>
                                            <span>off</span>
                                        </div>
                                    </div>
                                    <div class="grid-content">
                                        <h5 class="subtitle">
                                            <a href="#0">
                                                Chicken Quesadilla Crispy Beef Taco
                                            </a>
                                        </h5>
                                        <form class="cart-button">
											<div class="cart-plus-minus">
			                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
			                            	</div>
			                            	<button type="submit" class="custom-button">
			                            		add
			                            	</button>
			                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item bevarage popcorn">
                                <div class="grid-inner">
                                    <div class="grid-thumb">
                                        <img src="../public/assets/images/movie/popcorn/pop4.png" alt="movie/popcorn">
                                        <div class="offer-tag">
                                            $57
                                        </div>
                                        <div class="offer-remainder">
                                            <h6 class="o-title mt-0">24%</h6>
                                            <span>off</span>
                                        </div>
                                    </div>
                                    <div class="grid-content">
                                        <h5 class="subtitle">
                                            <a href="#0">
                                                MexiDips & Chips, Beef Muchaco
                                            </a>
                                        </h5>
                                        <form class="cart-button">
											<div class="cart-plus-minus">
			                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
			                            	</div>
			                            	<button type="submit" class="custom-button">
			                            		add
			                            	</button>
			                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
 @endsection
