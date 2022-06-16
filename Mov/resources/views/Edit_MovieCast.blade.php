@extends('Admin_MainLayout')

@section('PageBody')

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Edit MovieCast </h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					<form action="{{url('Edit_MovieCast')}}" class="form" method="POST" enctype="multipart/form-data">
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



                                    {{-- <input type="hidden" name="Movie_Id"  value="{{$query_movie_cast[0]->Movie_Id}}"> --}}
                                    <input type="hidden" name="Cast_Id"  value="{{$query_movie_cast[0]->Cast_Id}}">

									<div class="col-12 col-sm-6 col-lg-6">
                                        <label for="" style="color:white">Actors Name :</label>
										<input type="text" name="Actor_Name" class="form__input" value="{{$query_movie_cast[0]->Actors_Name}}"  placeholder="Name..">
									</div>


                                    <div class="col-12 col-sm-6 col-lg-6">
                                        <label for="" style="color:white">Actresses Name :</label>
										<input type="text" name="Actresses_Name" value="{{$query_movie_cast[0]->Actresses_Name}}"  class="form__input" placeholder="Name">
									</div>





                                    <div class="col-12 col-sm-6 col-lg-6">
										<div  style="height:50px">

											<label for="form__img-upload">Actors  photos</label>
                                            <input type="hidden" name="HiddenPicPath1" value="{{($query_movie_cast[0]->Actors_Img)}}">
											{{-- <input data-name="#gallery1" name="Actor_pic" value="{{($query_movie_cast[0]->Actors_Img)}}"  id="form__gallery-upload"  class="form__gallery-upload" type="file" accept=".png, .jpg, .jpeg"> --}}
											<input type="file" name="Actor_pic" accept=".png, .jpg, .jpeg">
                                            {{-- <img src="{{url($query_movie_cast[0]->Actors_Img)}}"  alt=""> --}}
										</div>
									</div>

                                    <div class="col-12 col-sm-6 col-md-6">
                                        <div style="height:50px">
                                            <label for="form__img-upload">Actresses  photos</label>
                                            <input type="hidden" name="HiddenPicPath2" value="{{($query_movie_cast[0]->Actresses_Img)}}">
                                            <input  type="file" name="Actresses_pics" accept=".png, .jpg, .jpeg">
                                            {{-- <img src="{{url($query_movie_cast[0]->Actresses_Img)}}"  alt=""> --}}
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-lg-6">

										<textarea id="text" name="Actor_Des" class="form__textarea"   placeholder="Description">{{$query_movie_cast[0]->Actors_Des}}</textarea>
									</div>

                                    <div class="col-12 col-sm-6 col-lg-6">

										<textarea id="text"name="Actresses_Des"  class="form__textarea"  placeholder="Description">{{$query_movie_cast[0]->Actresses_Des}}</textarea>
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
