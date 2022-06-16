@extends('Admin_MainLayout')

@section('PageBody')







<!-- end sidebar -->

<!-- main content -->
<main class="main">
<div class="container-fluid">
<div class="row">
<!-- main title -->
<div class="col-12">
    <div class="main__title">
        <h2>Edit user</h2>
    </div>
</div>
<!-- end main title -->

<!-- profile -->
<div class="col-12">
    <div class="profile__content">
        <!-- profile user -->
        <div class="profile__user">
            <div class="profile__avatar">
                <img src="../{{session('Admin_Image')}}" alt="">
            </div>
            <!-- or red -->
            <div class="profile__meta profile__meta--green">
                <h3>{{session('Admin_Name')}}</span></h3>
                <span>{{session('Admin_Email')}}</span>
            </div>
        </div>
        <!-- end profile user -->

        <!-- profile tabs nav -->
        <ul class="nav nav-tabs profile__tabs" id="profile__tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Profile</a>
            </li>

        </ul>
        <!-- end profile tabs nav -->

        <!-- profile mobile tabs nav -->
        <div class="profile__mobile-tabs" id="profile__mobile-tabs">
            <div class="profile__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <input type="button" value="Profile">
                <span></span>
            </div>

            <div class="profile__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Profile</a></li>

                    {{-- <li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Comments</a></li> --}}

                    <li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Reviews</a></li>
                </ul>
            </div>
        </div>
        <!-- end profile mobile tabs nav -->

        <!-- profile btns -->

        <!-- end profile btns -->
    </div>
</div>
<!-- end profile -->

<!-- content tabs -->
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
        <div class="col-12">
            <div class="row">
                <!-- details form -->
                <div class="col-12 col-lg-12">



                    <form action="{{url('Admin_EditUser')}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row row--form">
                            <div class="col-12">
                                <h4 class="form__title">Profile details</h4>
                            </div>

                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="username">Username</label>
                                    <input type="hidden" name="Id"  value="{{$query_users[0]->User_ID}}">
                                    <input id="username" type="text" value="{{$query_users[0]->Name}}" name="u_name" class="form__input" placeholder="">
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="username">Iamge</label>
                                    <input type="hidden" name="HiddenPicPath1" value="{{($query_users[0]->Image)}}">
                                    <input type="file" name="u_image" accept=".png, .jpg, .jpeg">
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="email">Email</label>
                                    <input id="email" type="text" name="u_email"  value="{{$query_users[0]->Email}}" class="form__input" placeholder="">
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="firstname">Password</label>
                                    <input id="firstname" type="text" name="u_password" value="{{$query_users[0]->Password}}" class="form__input" placeholder="">
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="lastname">Date Of Birth</label>
                                    <input id="lastname" type="date" name="u_dob" value="{{$query_users[0]->DateOfBirth}}"  class="form__input" placeholder="">
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="lastname">Gender</label>
                                    <input id="lastname" type="text" name="u_gender" value="{{$query_users[0]->Gender}}" class="form__input" placeholder="">
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="lastname">Contact No</label>
                                    <input id="lastname" type="number" name="u_contact_no"  value="{{$query_users[0]->Contact_No}}" class="form__input" placeholder="">
                                </div>
                            </div>


                            <div class="col-12">
                                <button class="form__btn" type="submit">Profile Update</button>
                            </div>
                        </div>
                    </form>
                </div>





                <!-- end details form -->

                <!-- password form -->

                <!-- end password form -->
            </div>
        </div>
    </div>




</div>
<!-- end content tabs -->
</div>
</div>
</main>
<!-- end main content -->

<!-- modal view -->

<!-- end modal view -->

<!-- modal delete -->

<!-- end modal delete -->

<!-- modal view -->
<div id="modal-view2" class="zoom-anim-dialog mfp-hide modal modal--view">
<div class="reviews__autor">
<img class="reviews__avatar" src="img/user.svg" alt="">
<span class="reviews__name">Best Marvel movie in my opinion</span>
<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

<span class="reviews__rating"><i class="icon ion-ios-star"></i>8.4</span>
</div>
<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
</div>
<!-- end modal view -->

<!-- modal delete -->
<div id="modal-delete2" class="zoom-anim-dialog mfp-hide modal">
<h6 class="modal__title">Review delete</h6>

<p class="modal__text">Are you sure to permanently delete this review?</p>

<div class="modal__btns">
<button class="modal__btn modal__btn--apply" type="button">Delete</button>
<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
</div>
</div>
<!-- end modal delete -->

<!-- modal status -->
<div id="modal-status3" class="zoom-anim-dialog mfp-hide modal">
<h6 class="modal__title">Status change</h6>

<p class="modal__text">Are you sure about immediately change status?</p>

<div class="modal__btns">
<button class="modal__btn modal__btn--apply" type="button">Apply</button>
<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
</div>
</div>
<!-- end modal status -->

<!-- modal delete -->
<div id="modal-delete3" class="zoom-anim-dialog mfp-hide modal">
<h6 class="modal__title">User delete</h6>

<p class="modal__text">Are you sure to permanently delete this user?</p>

<div class="modal__btns">
<button class="modal__btn modal__btn--apply" type="button">Delete</button>
<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
</div>
</div>





@endsection






