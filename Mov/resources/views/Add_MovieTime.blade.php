@extends('Admin_MainLayout')

@section('PageBody')

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Show Time</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					<form action="{{url('Add_MovieTime')}}" class="form" method="post" enctype="multipart/form-data">
                        @csrf
						<div class="row row--form">
                            @if(session('Status'))

                            <div class="row">
                          <div class="alert alert-success text-center">{{session('Status')}}      </div>
                            </div>
                        @endif


							<div class="col-12 col-md-12">
								<div class="row row--form">


									<div class="col-12 col-sm-12 col-lg-12">
                                        <label for="" style="color:white">Select Theatres</label>

                                            <div class="select">
                                                <select name="T_Id">

                                            @foreach ($query_the as $the)
                                            <option value="{{$the->Theaters_Id}}">{{$the->Theaters_Name}}</option>

                                              @endforeach
										</select>
									</div>
                                </div>


									<div class="col-12 col-lg-12">
                                        <label for="" style="color:white">Select Movie</label>

                                            <div class="select">
                                                <select name="M_Id">

                                            @foreach ($query_move as $cat)
                                            <option value="{{$cat->Movie_Id }}">{{$cat ->Movie_Title}}</option>

                                              @endforeach
										</select>
									</div>
                                </div>



                                    <div class="col-12 col-sm-6 col-lg-6">
                                        <label for="" style="color:white">Show Start Time:</label>
										<input type="time" name="S_Time" class="form__input" placeholder="Show Start Time..">
									</div>




                                    <div class="col-12 col-sm-6 col-lg-6">
                                        <label for="" style="color:white">Show End Time:</label>
										<input type="time" name="E_Time" class="form__input" placeholder="Show End Time..">
									</div>

                                    <div class="col-12 col-sm-12 col-lg-12">
                                        <label for="" style="color:white">Show Date:</label>
										<input type="date" name="S_D" class="form__input" placeholder="Show Date..">
									</div>


								</div>
							</div>



							<div class="col-12">
								<div class="row row--form">

									<div class="col-12">
										<button type="submit" class="form__btn">publish</button>
									</div>
								</div>
							</div>



						</div>
					</form>
				</div>
				<!-- end form -->
			</div>
		</div>
	</main>
	<!-- end main content -->



    @endsection
