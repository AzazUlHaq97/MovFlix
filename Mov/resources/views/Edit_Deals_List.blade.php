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
					<form action="{{url('Edit_Deals_List')}}" class="form" method="POST" enctype="multipart/form-data">
						@csrf
                        <div class="row row--form">


							<div class="col-12 col-md-12">
                            <input type="hidden" name="Product_Id" value="{{$Edit_Deals_List[0]->Product_Id}}" >
									<div class="col-12 col-sm-6 col-lg-8 col-md-8">
                                       
                                        <label for="" style="color:white">Product Name :</label>
										<input type="text" name="Product_Name" value="{{$Edit_Deals_List[0]->Product_Name}}" class="form__input" placeholder="Name..">
                                     </div>   

                                        <div class="col-12 col-sm-6 col-lg-8 col-md-8">

										<input type="number" name="Product_Price" value="{{$Edit_Deals_List[0]->price}}" class="form__input" placeholder="Name..">
									</div>
                                	
                        

									<div class="col-12 col-sm-12 col-md-8">
									<input type="file" name="M_pic"  style="height:95%" value="{{($Edit_Deals_List[0]->picture)}}" class="form__textarea" accept=".png, .jpg, .jpeg">
                                	<input type="hidden" name="HiddenPicPath1" value="{{($Edit_Deals_List[0]->picture)}}">
                                    </div>



                                  
			

                                    <div class="col-12 col-sm-6 col-lg-8 col-md-8">
										<textarea id="text" name="Product_Description"  class="form__textarea" placeholder="Description">{{$Edit_Deals_List[0]->Product_description}}</textarea>
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
