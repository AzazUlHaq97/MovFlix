<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dmitryvolkov.me/demo/hotflix2.1/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Apr 2022 19:52:37 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="../css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="../css/select2.min.css">
	<link rel="stylesheet" href="../css/ionicons.min.css">
	<link rel="stylesheet" href="../css/admin.css">


     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" /> --}}



	<!-- Favicons -->
	<link rel="icon" type="image/png" href="../public/img/logo/logo.png" sizes="32x32">
	<link rel="apple-touch-icon" href="../public/img/logo/logo.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">


    <style>

        :root {
          --background-gradient: linear-gradient(30deg, #f39c12 30%, #f1c40f);
          --gray: #34495e;
          --darkgray: #2c3e50;
        }

        select {
          /* Reset Select */
          appearance: none;
          outline: 0;
          border: 0;
          box-shadow: none;
          /* Personalize */
          flex: 1;
          padding: 0 1em;
          color: #fff;
          background-color:#222028;
          background-image: none;
          cursor: pointer;
        }
        /* Remove IE arrow */
        select::-ms-expand {
          display: none;
        }
        /* Custom Select wrapper */
        .select {
          position: relative;
          display: flex;
          width: 100%;
          height: 3em;
          border-radius: .25em;
          overflow: hidden;
        }
        /* Arrow */
        .select::after {
          content: '\25BC';
          position: absolute;
          top: 0;
          right: 0;
          padding: 1em;
          background-color: #222028;
          transition: .25s all ease;
          pointer-events: none;
        }
        /* Transition */
        .select:hover::after {
          color: #f39c12;
        }




            </style>




</head>
<body>
	<!-- header -->
	<header class="header">
		<div class="header__content">
			<!-- header logo -->
			<a href="#" class="header__logo">
				<img src="../img/logo.svg" alt="">
			</a>
			<!-- end header logo -->

			<!-- header menu btn -->
			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<!-- end header menu btn -->
		</div>
	</header>
	<!-- end header -->

	<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<a href="#" class="sidebar__logo">
			<img src="../public/img/logo/logo.png" alt="">
		</a>
		<!-- end sidebar logo -->

		<!-- sidebar user -->
		<div class="sidebar__user">
			<div class="sidebar__user-img" style="background-size:cover">
				<img src="../{{session('Admin_Image')}}" style="height:100%" alt="">
			</div>

			<div class="sidebar__user-title">
				<span>Admin</span>
				<p>{{session('Admin_Name')}}</p>
			</div>

			<button class="sidebar__user-btn" type="button">
				<i class="icon ion-ios-log-out"></i>
			</button>
		</div>


		<div class="sidebar__nav-wrap">
			<ul class="sidebar__nav">
				<li class="sidebar__nav-item">
					<a href="{{url('Dashboard')}}" class="sidebar__nav-link sidebar__nav-link--active"><i class="icon ion-ios-keypad"></i> <span>Dashboard</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="{{url('Add_Category')}}" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> <span>Movie Category</span></a>
				</li>


				<li class="sidebar__nav-item">
					<a href="{{url('Add_Theatres')}}" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> <span>Movie Theatre</span></a>
				</li>


                <li class="sidebar__nav-item">
					<a href="{{url('Add_Movies')}}" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> <span>Add Movie</span></a>
				</li>


                <li class="sidebar__nav-item">
					<a href="{{url('Add_MovieTime')}}" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> <span>Movie Time</span></a>
				</li>

                <li class="sidebar__nav-item">
					<a href="{{url('Add_MovieCast')}}" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> <span>Movie Cast</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="{{url('Add_Deals')}}" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> <span>Add Deals</span></a>
				</li>
				
				<li class="sidebar__nav-item">
					<a href="{{url('Seat')}}" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> <span>Add Seats</span></a>
				</li>
				






				<li class="sidebar__nav-item">
					<a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu"><i class="icon ion-ios-copy"></i> <span>Movie Details</span> <i class="icon ion-md-arrow-dropdown"></i></a>

					<ul class="collapse sidebar__menu" id="collapseMenu">
						<li><a href="{{url('Category_List')}}">Category List</a></li>
						<li><a href="{{url('Theatres_List')}}">Theatres List</a></li>
						<li><a href="{{url('Movie_List')}}">Movie List</a></li>
						<li><a href="{{url('MovieShow_List')}}">Show Time List</a></li>
						<li><a href="{{url('MovieCast_List')}}">Movie Cast List</a></li>
						<li><a href="{{url('Deals_List')}}">Deals List</a></li>
						<li><a href="{{url('Seat_List')}}">Seat List</a></li>
					</ul>
			 </li>


				<li class="sidebar__nav-item">
					<a href="{{url('Admin_Users')}}" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> <span>Users</span></a>
				</li>
                <li class="sidebar__nav-item">
					<a href="{{url('Reviews')}}" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> <span>Reviews</span></a>
				</li>

                <li class="sidebar__nav-item">
					<a href="{{url('Order_Details')}}" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> <span>Order Details</span></a>
				</li>



                <li class="sidebar__nav-item">
					<a href="{{url('Admin_EditProfile')}}" class="sidebar__nav-link"><i class="icon ion-ios-chatbubbles"></i> <span>Edit Profile</span></a>
				</li>



                <li class="sidebar__nav-item">
			<button type="submit">	<a href="{{url('Admin_Logout')}}" class="sidebar__nav-link"><i class="icon ion-ios-chatbubbles"></i> <span>Sign Out</span></a></button>
				</li>


			</ul>
		</div>



		<div class="sidebar__copyright">© Movfix, 2019—2022. <br>Create by <a href="#">Group Member</a></div>

	</div>




@yield('PageBody')





<!-- JS -->
<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/jquery.mousewheel.min.js"></script>
<script src="../js/jquery.mCustomScrollbar.min.js"></script>
<script src="../js/select2.min.js"></script>
<script src="../js/admin.js"></script>




<script>
    $(document).ready(function () {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>



<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>









</body>

<!-- Mirrored from dmitryvolkov.me/demo/hotflix2.1/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Apr 2022 19:53:05 GMT -->
</html>
