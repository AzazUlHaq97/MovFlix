@extends('Admin_MainLayout')

@section('PageBody')




<main class="main">
    <div class="container-fluid">
        <div class="row">php
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Order Details</h2>

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
                        <thead  style="background-color:#222028;color:white">
                            <tr>
                                <th>Booking Id</th>
                                <th>BASIC INFO</th>
                                <th>Theaters Name</th>
                                <th>Movie Poster | Name</th>
                                <th>Seat No</th>
                                <th>Amount</th>
                                <th>Ticket_Date</th>
                                <th>Date</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($Order_Detail as $Order)




                            <tr >
                                <td style="background-color:#222028">
                                    <div class="main__table-text">{{$Order->Booking_Id}}</div>
                                </td>


                                <td style="background-color:#222028">
                                    <div class="main__user">
                                        <div class="main__avatar">
                                            <img src="../{{$Order->Image}}" alt="">
                                        </div>
                                        <div class="main__meta">
                                            <h3>{{$Order->Name}}</h3>

                                        </div>
                                    </div>
                                </td>

                                <td style="background-color:#222028">
                                    <div class="main__table-text">{{$Order->Theaters_Name}}</div>
                                </td>
                                <td  style="background-color:#222028">
                                <div class="main__user" style="background-color:#222028">
                                    <div class="main__avatar">
                                        <img src="../{{$Order->Movie_Poster}}" alt="">
                                    </div>
                                    <div class="main__meta" >
                                        <h3 style="background-color:#222028">{{$Order->Movie_Title}}</h3>

                                    </div>
                                </div>
                            </td>
                                <td style="background-color:#222028">
                                    <div class="main__table-text">{{$Order->Seat_Number}}</div>
                                </td>



                                  <td  style="background-color:#222028">
                                    <div class="main__table-text">{{$Order->Amount}}</div>
                                </td>



                                <td style="background-color:#222028">
                                    <div class="main__table-text">{{$Order->Ticket_Date}}</div>
                                </td>
                                <td  style="background-color:#222028">
                                    <div class="main__table-text">{{$Order->Date}}</div>
                                </td>

                                <td style="background-color:#222028">
                                    <div class="main__table-btns">

                                        <a onclick="javascript:return confirm('Are You sure you Want to delete')" href="{{url('Delete_Order_Details/'.$Order->Booking_Id)}}"  class="">
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
