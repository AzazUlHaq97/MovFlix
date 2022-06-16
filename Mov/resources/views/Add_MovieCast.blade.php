@extends('Admin_MainLayout')

@section('PageBody')

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Movie Cast </h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					<form action="{{url('Add_MovieCast')}}" class="form" method="POST" enctype="multipart/form-data">
						@csrf
                        <div class="row row--form">


							<div class="col-12 col-md-12">
								<div class="row row--form">
                                    @if(session('Status'))

                                    <div class="row">
                                  <div class="alert alert-success text-center">{{session('Status')}}      </div>
                                    </div>
                                @endif




                                        <div class="select">
                                            <select name="Movie_Id">
                                        @foreach ($query_move as $MOVIE)
                                        <option value="{{$MOVIE ->Movie_Id}}">{{$MOVIE ->Movie_Title}}</option>

                                          @endforeach
                                    </select>
                                </div>


									<div class="col-12 col-sm-6 col-lg-6">
                                        <label for="" style="color:white">Actors Name :</label>
										<input type="text" name="Actor_Name" class="form__input" placeholder="Name..">
									</div>


                                    <div class="col-12 col-sm-6 col-lg-6">
                                        <label for="" style="color:white">Actresses Name :</label>
										<input type="text" name="Actresses_Name"  class="form__input" placeholder="Name">
									</div>





                                    <div class="col-12 col-sm-6 col-lg-6">
										<div class="form__gallery">

											<label id="gallery1" for="form__gallery-upload">Actors photos</label>
                                            <input type="hidden" name="HiddenPicPath">
											<input data-name="#gallery1" name="Actor_pic"  id="form__gallery-upload"  class="form__gallery-upload" type="file" accept=".png, .jpg, .jpeg" multiple>
										</div>
									</div>

                                    <div class="col-12 col-sm-6 col-md-6">
                                        <div class="form__img" style="height:50px">
                                            <label for="form__img-upload">Actresses  photos</label>
                                            <input type="hidden" name="HiddenPicPath">
                                            <input id="form__img-upload"   name="Actresses_pics" type="file" accept=".png, .jpg, .jpeg">
                                            <img id="form__img" src="#"  alt="">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-lg-6">

										<textarea id="text" name="Actor_Des" class="form__textarea" placeholder="Description"></textarea>
									</div>

                                    <div class="col-12 col-sm-6 col-lg-6">

										<textarea id="text"name="Actresses_Des"  class="form__textarea" placeholder="Description"></textarea>
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
