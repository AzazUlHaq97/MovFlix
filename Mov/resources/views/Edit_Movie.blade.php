@extends('Admin_MainLayout')

@section('PageBody')





	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Edit Movie </h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					<form action="{{url('Edit_Movie')}}" class="form" method="post" enctype="multipart/form-data">
                        @csrf

                        @if(session('Status'))

                        <div class="row">
                      <div class="alert alert-success text-center">{{session('Status')}}      </div>
                        </div>
                    @endif
                    <input type="hidden" name="M_Id" value="{{$query_Edit_Movie[0]->Movie_Id}}">
                    <input type="hidden" name="C_Id" value="{{$query_Edit_Movie[0]->Category_Id}}">


                    <div class="row row--form">
                        <div class="col-12 col-sm-6 col-lg-3">



                                <input type="file" name="M_pic"  style="height:95%" class="form__textarea" accept=".png, .jpg, .jpeg">
                                <input type="hidden" name="HiddenPicPath1" value="{{($query_Edit_Movie[0]->Movie_Poster)}}">
                            </div>


							<div class="col-12 col-md-7 form__content">
								<div class="row row--form">
									<div class="col-12 col-md-12">
										<input type="text" class="form__input" name="M_title" value="{{$query_Edit_Movie[0]->Movie_Title}}" placeholder="Title">
									</div>

									<div class="col-12">
										<textarea id="text" style="height:110px" name="M_des" value="{{$query_Edit_Movie[0]->Movie_Description}}" class="form__textarea" placeholder="Description">{{$query_Edit_Movie[0]->Movie_Description}}</textarea>
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" class="form__input" name="M_relese" value="{{$query_Edit_Movie[0]->Movie_Release_year}}" placeholder="Release year">
									</div>







									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" class="form__input" name="M_duration" value="{{$query_Edit_Movie[0]->Movie_duration_min}}" placeholder="Running timed in minutes">
									</div>

									<div class="col-12 col-sm-6 col-lg-3">


                                            <div class="select">
                                                <select name="Cat">
                                            @foreach ($query_Edit_Movie1 as $cat)
                                            <option value="{{$cat->Category_Id}}">{{$cat->Category_Name}}</option>
                                               @endforeach
										</select>

                                    </div>
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" class="form__input" name="M_price" value="{{$query_Edit_Movie[0]->Movie_Price}}" placeholder="Price">
									</div>



									<div class="col-12 col-lg-6">
										<div class="form__gallery">
											<label id="gallery1" for="form__gallery-upload">Upload Direct photos</label>
                                            <input  name="HiddenPicPath" type="hidden" value="{{($query_Edit_Movie[0]->Movie_Director_Img)}}">
											<input  name="M_dimg"  id="form__gallery-upload"  type="file" accept=".png, .jpg, .jpeg">

                                        </div>
									</div>

                                    <div class="col-12 col-lg-6">
										<input type="text" class="form__input" name="M_dname" value="{{$query_Edit_Movie[0]->Movie_Director_Name}}" placeholder="Direct Name">
									</div>
                                    <div class="col-12">
										<textarea id="text" style="height:110px"  name="M_ddes" value="" class="form__textarea" placeholder="Description">{{$query_Edit_Movie[0]->Movie_Director_Description}}</textarea>
									</div>


								</div>
							</div>



							<div class="col-12">
								<div class="row row--form">


									<div class="col-12">
										<input type="text" class="form__input"  value="{{$query_Edit_Movie[0]->Movie_Url}}" name="M_url" placeholder="Or add a link">
									</div>

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
