@extends('Admin_MainLayout')

@section('PageBody')



<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>List Category</h2>

						<span class="main__title-stat">3,702 Total</span>

						<div class="main__title-wrap">
							<!-- filter sort -->
							<div class="filter" id="filter__sort">
								<span class="filter__item-label">Sort by:</span>

								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="Date created">
									<span></span>
								</div>

								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-sort">
									<li>Date created</li>
									<li>Pricing plan</li>
									<li>Status</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
				<!-- end main title -->

				<!-- users -->
				<div class="col-12">
                    <div class="main__table-wrap" style="width:100%;height:100%;overflow:auto;color:white">

                        <table  id="example"  style="color: white">


                            @if(session('Deletion'))

                            <div class="row">
                          <div class="alert alert-success text-center">{{session('Deletion')}}      </div>
                            </div>
                        @endif

                        <thead  style="background-color:#222028;color:white">
								<tr>
									<th>ID</th>
                                    <th>Movie Category</th>
									<th>Country Name</th>
									<th>ACTIONS</th>
								</tr>
							</thead>

							<tbody>
                                @foreach ($query_C_list as $Category_List)
								<tr>
									<td style="background-color:#222028;">
										<div class="main__table-text">{{$Category_List->Category_Id}}</div>
									</td>


									<td style="background-color:#222028;">
										<div class="main__table-text">{{$Category_List->Category_Name}}</div>
									</td>



									<td style="background-color:#222028;">
										<div class="main__table-text">{{$Category_List->Category_Country}}</div>
									</td>



                					<td style="background-color:#222028;">
										<div class="main__table-btns">
											<a href="{{url('Add_Category')}}" class="main__table-btn main__table-btn--banned open-modal">
                                             <i class="icon ion-ios-add-circle-outline"></i>
											</a>
											<a href="{{url('Edit_Category/'.$Category_List->Category_Id)}}" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
                                            <a onclick="javascript:return confirm('Are You sure you Want to delete')" href="{{url('Delete_Categorys/'.$Category_List->Category_Id)}}" class="main__table-btn main__table-btn--delete">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
                                    @endforeach
							</tbody>
						</table>
					</div>
				</div>
				<!-- end users -->




			</div>
		</div>
	</main>
	<!-- end main content -->
	<!-- main content -->
	

    @endsection
