@extends('Admin_MainLayout')

@section('PageBody')

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Add Deals </h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					<form action="{{url('Add_Deals')}}" class="form" method="POST" enctype="multipart/form-data">
						@csrf
                        <div class="row row--form">


							<div class="col-12 col-md-12">
								


									<div class="col-12 col-sm-12 col-lg-12">
                                        <label for="" style="color:white">Product Name :</label>
										<input type="text" name="Product_Name" class="form__input" placeholder="Product Name :">
									</div>


                                
                        

                                    <div class="col-12 col-sm-12 col-md-12">
                                        <div class="form__img" style="height:50px">
                                            <label for="form__img-upload">Product  Image</label>
                                            <input type="hidden" name="HiddenPicPath">
                                            <input id="form__img-upload"   name="M_pic" type="file" accept=".png, .jpg, .jpeg">
                                            <img id="form__img" src="#"  alt="">
                                        </div>
                                    </div>



									<div class="col-12 col-sm-12 col-lg-12">                               
										<input type="number" name="Product_Price" class="form__input" placeholder="Product Price :">
									</div>

                                    
						

                                    <div class="col-12 col-sm-6 col-lg-12">
										<textarea id="text" name="Product_Description"  class="form__textarea" placeholder="Description"></textarea>
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
