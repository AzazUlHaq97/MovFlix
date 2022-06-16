@extends('Admin_MainLayout')

@section('PageBody')




	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Users</h2>

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
					<div class="main__table-wrap">
                        <div class="main__table-wrap" style="width:100%;height:100%;overflow:auto;color:white">

                            <table  id="example"  style="color: white">
                                <thead  style="background-color:#222028;color:white">
								<tr>
									<th>ID</th>
									<th>BASIC INFO</th>
									<th>DateOfBirth</th>
									<th>Gender</th>
									<th>Contact_No</th>
									<th>Registration_Date</th>

									<th>ACTIONS</th>
								</tr>
							</thead>

							<tbody>
                                @foreach ($Admin_User as $Users)


								<tr>
									<td style="background-color:#222028;">
										<div class="main__table-text">{{$Users->User_ID}}</div>
									</td>
									<td style="background-color:#222028;">
										<div class="main__user">
											<div class="main__avatar">
												<img src="../{{$Users->Image}}" alt="">
											</div>
											<div class="main__meta">
												<h3>{{$Users->Name}}</h3>
												<span>{{$Users->Email}}</span>
											</div>
										</div>
									</td>
									<td style="background-color:#222028;">
										<div class="main__table-text">{{$Users->DateOfBirth}}</div>
									</td>
									<td style="background-color:#222028;">
										<div class="main__table-text">{{$Users->Gender}}</div>
									</td>
									<td style="background-color:#222028;">
										<div class="main__table-text">{{$Users->Contact_No}}</div>
									</td>
									<td style="background-color:#222028;">
										<div class="main__table-text">{{$Users->Registration_Date}}</div>
									</td>

									<td style="background-color:#222028">
										<div class="main__table-btns">


                                                <a href="{{url('Admin_EditUser/'.$Users->User_ID)}}" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
                                            <a onclick="javascript:return confirm('Are You sure you Want to delete')" href="{{url('Delete_Admin_EditUser/'.$Users->User_ID)}}" class="main__table-btn main__table-btn--edit">
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

				<!-- paginator -->

				<!-- end paginator -->
			</div>
		</div>
	</main>
	<!-- end main content -->

    @endsection
