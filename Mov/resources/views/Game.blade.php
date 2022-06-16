@extends('User_Layout')

@section('UserBody')



<style>
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap");

/* * {
	box-sizing: border-box;
	padding: 0;
	margin: 0;
} */



body {
	background: #457fb4;
	font-family: "Roboto", sans-serif;
	height: 100vh;

}



.hero-container {
	margin: auto;

}

.main-container {
	width: 270px;
	height: 540px;
	position: relative;
	margin: 0px;
}

.poster-container {
	width: 245px;
	position: absolute;
	top: 0;
	left: 20px;
    z-index: 344;
}

.poster {
	width: 100%;
	box-shadow: 0 5px 20px 3px rgba(0, 0, 0, 0.6);

}

.ticket-container {
    z-index: 66;
	background: #fff;
	width: 290px;
	height: 520px;
    padding: 0px;
	display: flex;
	flex-direction: column;
	align-items: center;
	border-radius: 5px;
	position: absolute;
	top: 20px;
	box-shadow: 0 5px 20px 3px rgba(0, 0, 0, 0.6);
	opacity: 0;

}

.main-container:hover .ticket-container {
	opacity: 1;
	animation: bounceIn 0.6s linear;

}

@keyframes bounceIn {
	0%,
	20%,
	40%,
	60%,
	80%,
	to {
		-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	}
	0% {
		opacity: 0;
		-webkit-transform: scale3d(0.3, 0.3, 0.3);
		transform: scale3d(0.3, 0.3, 0.3);
	}
	20% {
		-webkit-transform: scale3d(1.03, 1.03, 1.03);
		transform: scale3d(1.03, 1.03, 1.03);
	}
	40% {
		-webkit-transform: scale3d(0.9, 0.9, 0.9);
		transform: scale3d(0.9, 0.9, 0.9);
	}
	60% {
		opacity: 1;
		-webkit-transform: scale3d(1.01, 1.01, 1.01);
		transform: scale3d(1.01, 1.01, 1.01);
	}
	80% {
		-webkit-transform: scale3d(0.97, 0.97, 0.97);
		transform: scale3d(0.97, 0.97, 0.97);
	}
	to {
		opacity: 1;
		-webkit-transform: scaleX(1);
		transform: scaleX(1);
	}
}

/* @keyframes bounce {
  50% {
    opacity: 1;
    transform: scale(1.1);
  }

  100% {
    opacity: 1;
    transform: scale(1);
  }
} */

.ticket__content {
	width: 100%;
	position: absolute;
	bottom: 0;
	text-align: center;
}

.ticket__movie-title {
	text-transform: uppercase;
	margin-bottom: 5px;
}

.ticket__movie-slogan {
	color: #999;
	font-size: 0.9rem;
	margin-bottom: 20px;
}

.ticket__current-price {
	color: #69c982;
	font-size: 1.4rem;
	font-weight: bold;
}

.ticket__old-price {
	color: #999;
	text-decoration: line-through;
	margin-bottom: 10px;
}

.ticket__buy-btn {
	cursor: pointer;
	width: 100%;
	background: #2f2f2f;
	color: white;
	padding: 15px 0;
	font-size: 1rem;
	font-weight: bold;
	text-transform: uppercase;
	border: 0;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
}

</style>


<section class="breadcrumb-area breadcrumb-bg" data-background="public/img/bg/game2.jpg" style="background-size: cover;background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title">Online Games</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('Index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Games</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="top-rated-movie tr-movie-bg2" data-background="../public/img/bg/tr_movies_bg.jpg">
	<div class="hero-container">
        <div class="row">
            <div class="col-lg-3">
		<div class="main-container">
			<div class="poster-container">
				<a href="#"><img src="public/img/bg/car2.png" style="height: 370px;" class="poster" /></a>
			</div>
			<div class="ticket-container">
				<div class="ticket__content">
					<!--<h4 class="ticket__movie-title">Blade Runner 2049</h4>-->
					<h4 class="ticket__movie-slogan">Win Game & Get Discount Coupon</h4>
					<p class="ticket__current-price" style="font-size:18px;color:#e4d804">Upto 5% off For Shopping Purchases</p>
					<!--<p class="ticket__old-price">$44.99</p>-->
					<a  href="{{url('Cars')}}" class="ticket__buy-btn">Play now</a>
				</div>
			</div>
		</div>
    </div>

    <div class="col-lg-3">
		<div class="main-container">
			<div class="poster-container">
				<a href="#"><img src="public/img/bg/spider1.png" style="height: 370px;" class="poster" /></a>
			</div>
			<div class="ticket-container">
				<div class="ticket__content">
					<!-- <h4 class="ticket__movie-title">Justice League</h4> -->
					<h4 class="ticket__movie-slogan">Win Game & Get Discount Coupon</h4>
					<p class="ticket__current-price" style="font-size:18px;color:#e4d804" >Upto 5% off For Shopping Purchases</p>
					<!-- <p class="ticket__old-price">$40.99</p> -->

				<a  href="{{url('Spiderman')}}"class="ticket__buy-btn">Play Now</a>
				</div>
			</div>
		</div>
	</div>
    <div class="col-lg-3">
		<div class="main-container">
			<div class="poster-container">
				<a href="#"><img src="public/img/bg/panda4.png" style="height: 370px;" class="poster" /></a>
			</div>
			<div class="ticket-container">
				<div class="ticket__content">
					<!--<h4 class="ticket__movie-title">Justice League</h4>-->
					<h4 class="ticket__movie-slogan">Win Game & Get Discount Coupon</h4>
					<p class="ticket__current-price" style="font-size:18px;color:#e4d804">Upto 5% off For Shopping Purchases</p>
					<!--<p class="ticket__old-price">$40.99</p>-->
					<a href="{{url('Display_Game')}}" class="ticket__buy-btn"> Play now</a>
				</div>
			</div>
		</div>
	</div>
    <div class="col-lg-3">
		<div class="main-container">
			<div class="poster-container">
				<a href="#"><img src="public/img/bg/quiz.png" style="height: 370px;width:250px;" class="poster" /></a>
			</div>
			<div class="ticket-container">
				<div class="ticket__content">
					<!--<h4 class="ticket__movie-title">Justice League</h4>-->
					<h4 class="ticket__movie-slogan">Win Game & Get Discount Coupon</h4>
					<p class="ticket__current-price" style="font-size:18px;color:#e4d804">Upto 5% off For Shopping Purchases</p>
					<!--<p class="ticket__old-price">$40.99</p>-->
                    <a href="{{url('Quiz')}}" class="ticket__buy-btn"> Play now</a>
				</div>
			</div>
		</div>
	</div>
    <div class="col-lg-3">
		<div class="main-container">
			<div class="poster-container">
				<a href="#"><img src="public/img/bg/pack2.png" style="height: 370px;" class="poster" /></a>
			</div>
			<div class="ticket-container">
				<div class="ticket__content">
					<!--<h4 class="ticket__movie-title">Justice League</h4>-->
					<h4 class="ticket__movie-slogan">Win Game & Get Discount Coupon</h4>
					<p class="ticket__current-price" style="font-size:18px;color:#e4d804">Upto 5% off For Shopping Purchases</p>
					<!--<p class="ticket__old-price">$40.99</p>-->
                    <a href="{{url('Pack')}}" class="ticket__buy-btn">Play now</a>
				</div>
			</div>
		</div>
	</div>
    <div class="col-lg-3">
		<div class="main-container">
			<div class="poster-container">
				<a href="#"><img src="public/img/bg/Ches2.png" style="height: 370px;" class="poster" /></a>
			</div>
			<div class="ticket-container">
				<div class="ticket__content">
					<!--<h4 class="ticket__movie-title">Justice League</h4>-->
					<h4 class="ticket__movie-slogan">Win Game & Get Discount Coupon</h4>
					<p class="ticket__current-price" style="font-size:18px;color:#e4d804">Upto 5% off For Shopping Purchases</p>
					<!--<p class="ticket__old-price">$40.99</p>-->
                    <a href="{{url('Graphics')}}" class="ticket__buy-btn"> Play now</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-3">
		<div class="main-container">
			<div class="poster-container">
				<a href="#"><img src="public/img/bg/Ben1.png" style="height: 370px;" class="poster" /></a>
			</div>
			<div class="ticket-container">
				<div class="ticket__content">
					<!--<h4 class="ticket__movie-title">Justice League</h4>-->
					<h4 class="ticket__movie-slogan">Win Game & Get Discount Coupon</h4>
					<p class="ticket__current-price" style="font-size:18px;color:#e4d804">Upto 5% off For Shopping Purchases</p>
					<!--<p class="ticket__old-price">$40.99</p>-->

				<a  href="{{url('Ben10')}}" class="ticket__buy-btn"> Play Now</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="main-container">
			<div class="poster-container">
				<a href="#"><img src="public/img/bg/Bird1.png" style="height: 370px;" class="poster" /></a>
			</div>
			<div class="ticket-container">
				<div class="ticket__content">
					<!--<h4 class="ticket__movie-title">Justice League</h4>-->
					<h4 class="ticket__movie-slogan">Win Game & Get Discount Coupon</h4>
					<p class="ticket__current-price" style="font-size:18px;color:#e4d804">Upto 5% off For Shopping Purchases</p>
					<!--<p class="ticket__old-price">$40.99</p>-->

				<a  href="{{url('AngryBird')}}" class="ticket__buy-btn"> Play Now</a>
				</div>
			</div>
		</div>
	</div>



</div>

</div>
</section>
@endsection