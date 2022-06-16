@extends('Admin_MainLayout')

@section('PageBody')



	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Add Movie </h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					<form action="{{url('Add_Movies')}}" class="form" method="post" enctype="multipart/form-data">
                        @csrf

                        @if(session('Status'))

                        <div class="row">
                      <div class="alert alert-success text-center">{{session('Status')}}      </div>
                        </div>
                    @endif

						<div class="row row--form">
							<div class="col-12 col-md-5 form__cover">
								<div class="row row--form">
									<div class="col-12 col-sm-6 col-md-12">
										<div class="form__img" style="height:437px">

                                            <label for="form__img-upload">Upload cover (270 x 400)</label>
                                            <input  name="HiddenPicPath" type="hidden" accept=".png, .jpg, .jpeg">
                                            <input id="form__img-upload"  name="M_pic" type="file" accept=".png, .jpg, .jpeg">
											<img id="form__img" src="#"  alt=" ">
										</div>
									</div>
								</div>
							</div>

							<div class="col-12 col-md-7 form__content">
								<div class="row row--form">
									<div class="col-12">
										<input type="text" class="form__input" name="M_title" placeholder="Title">
									</div>

									<div class="col-12">
										<textarea id="text" style="height:110px" name="M_des" class="form__textarea" placeholder="Description"></textarea>
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" class="form__input" name="M_relese" placeholder="Release year">
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text"  class="form__input" name="M_duration" placeholder="Running timed in minutes">
									</div>

									<div class="col-12 col-sm-6 col-lg-3">

                                            <div class="select">
                                                <select name="category">
                                            @foreach ($query_cat as $cat)
                                            <option value="{{$cat ->Category_Id}}">{{$cat ->Category_Name}}</option>

                                              @endforeach
										</select>

                                    </div>
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<input type="text" class="form__input" name="M_price" placeholder="Price">
									</div>





									<div class="col-12 col-lg-6">
										<div class="form__gallery">
											<label id="gallery1" for="form__gallery-upload">Upload Direct photos</label>
                                            <input name="HiddenPicPath" type="hidden" accept=".png, .jpg, .jpeg">
											<input data-name="#gallery1" name="M_dimg" id="form__gallery-upload" name="gallery" class="form__gallery-upload" type="file" accept=".png, .jpg, .jpeg">

                                        </div>
									</div>

                                    <div class="col-12 col-lg-6">
										<input type="text" class="form__input" name="M_dname" placeholder="Direct Name">
									</div>
                                    <div class="col-12">
										<textarea id="text" style="height:110px"  name="M_ddes" class="form__textarea" placeholder="Description"></textarea>
									</div>


								</div>
							</div>



							<div class="col-12">
								<div class="row row--form">


									<div class="col-12">
										<input type="text" class="form__input" name="M_url" placeholder="Or add a link">
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
