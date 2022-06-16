@extends('Admin_MainLayout')

@section('PageBody')




	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Movie List</h2>

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

							<!-- end search -->
						</div>
					</div>
				</div>
				<!-- end main title -->

				<!-- users -->
				<div class="col-12">
                    <div class="main__table-wrap" style="width:100%;height:100%;overflow:auto;color:white">

                        <table  id="example"  style="color: white">
                            <thead  style="background-color:#222028;color:white">
								<tr>
									<th>Movie_Id</th>
									<th>Movie Poster</th>
									<th>Movie Title</th>
									<th>Movie Price</th>
									<th>Movie Description</th>
									<th>Movie Release year</th>
									<th>Movie Director Name</th>
									<th>Movie Director Img</th>
                                    <th>Movie Director Description</th>
                                    <th>Movie Url</th>
                                    <th>Movie duration min</th>
									<th>Category Id</th>
                                    <th>ACTIONS</th>
								</tr>
							</thead>

							<tbody>
                            @foreach ($query_movies as $Movie_List)


								<tr>
									<td style="background-color:#222028;">
										<div class="main__table-text">{{$Movie_List->Movie_Id}}</div>
									</td>
									<td style="background-color:#222028;">
										<div class="main__user">
											<div class="main__avatar">
												<img src="{{$Movie_List->Movie_Poster}}" alt="">
											</div>

										</div>
									</td>
									<td style="background-color:#222028;">
										<div class="main__table-text">{{$Movie_List->Movie_Title}}</div>
									</td>
									<td style="background-color:#222028;">
										<div class="main__table-text">{{$Movie_List->Movie_Price}}</div>
									</td>
									<td style="background-color:#222028;">
										<div class="main__table-text" style="width:150px;overflow:hidden">{{$Movie_List->Movie_Description}}</div>
									</td>
									<td style="background-color:#222028;">
										<div class="main__table-text">{{$Movie_List->Movie_Release_year}}</div>
									</td>
									<td style="background-color:#222028;">

										<div class="main__table-text">{{$Movie_List->Movie_Director_Name}}</div>
									</td>
                                    <td style="background-color:#222028;">
                                        	<div class="main__user">
                                        <div class="main__avatar">
                                            <img src="{{$Movie_List->Movie_Director_Img}}" alt="">
                                        </div>
                                    </div>

									</td>
                                    <td style="background-color:#222028;">
										<div class="main__table-text" style="width:150px;overflow:hidden">{{$Movie_List->Movie_Director_Description}}</div>
									</td>

                                     <td style="background-color:#222028;">
										<div class="main__table-text">{{$Movie_List->Movie_Url}}</div>
									</td>
                                    <td style="background-color:#222028;">
										<div class="main__table-text">{{$Movie_List->Movie_duration_min}}</div>
									</td>

                                    <td style="background-color:#222028;">
										<div class="main__table-text">{{$Movie_List->Category_Id}}</div>

									</td>



                                    <td style="background-color:#222028;">
										<div class="main__table-btns">
											<a href="{{url('Add_Movies')}}" class="main__table-btn main__table-btn--banned open-modal">
                                                <i class="icon ion-ios-add-circle-outline"></i>
											</a>
                                            <a href="{{url('Edit_Movie/'.$Movie_List->Movie_Id)}}" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a onclick="javascript:return confirm('Are You sure you Want to delete')" href="{{url('Delete_Movie/'.$Movie_List->Movie_Id)}}" class="main__table-btn main__table-btn--delete">
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


				<!-- end paginator -->
			</div>
		</div>
	</main>
	<!-- end main content -->

    @endsection
