@extends('Admin_MainLayout')

@section('PageBody')




	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Movie Cast</h2>

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
							<!-- end filter sort -->

							<!-- search -->

						</div>
					</div>
				</div>
				<!-- end main title -->

				<!-- users -->
				<div class="col-12">
                    <div class="main__table-wrap" style="width:100%;height:100%;overflow:auto;color:white">

                        <table  id="example"  style="color:white">
                            <thead  style="background-color:#222028;color:white">
								<tr>
									<th>Product Id</th>
									<th>Product Name</th>
									<th>Product Image</th>
                                    <th>Product Descriptiopn</th>
									<th>Product Price</th>							
									<th>Actions</th>
								</tr>
							</thead>

							<tbody>
                                @foreach ($query_products as $item)

								<tr>
									<td  style="background-color:#222028;">
										<div class="main__table-text">{{$item->Product_Id}}</div>
									</td>

									<td style="background-color:#222028;">
										<div class="main__table-text">{{$item->Product_Name}}</div>
									</td>
                                    <td style="background-color:#222028;">
										<div class="main__user">
											<div class="main__avatar">
												<img src="{{$item->picture}}" alt="asssssssss">
											</div>

										</div>
									</td>
									<td style="background-color:#222028;">
										<div class="main__table-text"  style="width:200px;overflow:hidden">{{$item->Product_description}}</div>
									</td>
									<td style="background-color:#222028">
										<div class="main__table-text">{{$item->price}}</div>
									</td>
                               
                                    <td style="background-color:#222028;">
										<div class="main__table-btns">
											<a href="{{url('Add_Deals')}}" class="main__table-btn main__table-btn--banned open-modal">
                                                <i class="icon ion-ios-add-circle-outline"></i>
											</a>
											<a href="{{url('Edit_Deals_List/'.$item->Product_Id)}}" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
                                            <a onclick="javascript:return confirm('Are You sure you Want to delete')" href="{{url('Delete_Deals_List/'.$item->Product_Id)}}" class="main__table-btn main__table-btn--delete">
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

			</div>
		</div>
	</main>
	<!-- end main content -->

    @endsection