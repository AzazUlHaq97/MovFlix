@extends('Admin_MainLayout')

@section('PageBody')

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
					<form action="{{url('Seat')}}" class="form" method="POST">
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
										<input type="hidden">
                                        <label style="color:white">Seat Number</label>
										<input type="number" name="S_No" class="form__input" placeholder="Seat Number...">
									</div>
                                </div>
                            </div>








                            <div class="col-12 col-md-12">								
							<div class="select">
                            <select name="Show_Id">
                                <option value="">Select Theater || Date</option>
                                @foreach ($query_seat as $Item)
                                <option value="{{$Item->Show_Id}}">{{$Item->Theaters_Name}} || {{$Item->Date}}</option>
                                @endforeach

                            </select>


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