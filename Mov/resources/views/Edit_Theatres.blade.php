@extends('Admin_MainLayout')

@section('PageBody')

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Add Theatres </h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					<form action="{{url('Edit_Theatres')}}" class="form" method="post">
                        @csrf
						<div class="row row--form">

                            @if(session('Status'))

                            <div class="row">
                          <div class="alert alert-success text-center">{{session('Status')}}      </div>
                            </div>
                        @endif
							<div class="col-12 col-md-12">
								<div class="row row--form">
									<div class="col-12">
                                        <label for="" style="color:white">Theatres Name</label>
										<input type="hidden" name="T_Id" value="{{$query_Edit_Theatres[0]->Theaters_Id}}">
                                        <input type="text" name="T_name" class="form__input" value="{{$query_Edit_Theatres[0]->Theaters_Name}}" placeholder="Name...">
									</div>

									<div class="col-12">
                                        <label for="" style="color:white">Theatres Address</label>
										<input type="text" name="T_address" value="{{$query_Edit_Theatres[0]->Theaters_Address}}"  class="form__input" placeholder="Address..">
									</div>

									<div class="col-12">
                                        <label for="" style="color:white">Theatres Place</label>
										<input type="text" name="T_place" value="{{$query_Edit_Theatres[0]->Theaters_Place}}" class="form__input" placeholder="Place..">
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
