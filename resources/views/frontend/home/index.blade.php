@extends('frontend.Layouts.master')
@section('main')
<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text ">
                            <span>the best medical center</span>
                            <h3> <span>Bringing health</span> <br>
                                to life for the whole family.</h3>
                            <a href="#" class="boxed-btn5">Discover More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- welcome_clicnic_area_start -->
<div class="welcome_clicnic_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="welcome_thumb">
                    <div class="thumb_1">
                        <img src="{{ asset('backend/upload/'.$doctor->profile_pic) }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="welcome_docmed_info">
                    <h3>Welcome To
                        <span>{{ $doctor->full_name }}.</span></h3>
                    <p>
                       {!! $doctor->bio !!}
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- welcome_clicnic_area_end -->

<!-- depertment_area_start  -->
<div class="depertment_area">
    <div class="container">
        <div class="row custom_align align-items-end justify-content-between">
            <div class="col-lg-6">
                <div class="section_title">
                    <h3>Departments</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="learn_more_btn text-right">
                    <a href="#" class="boxed-btn">Learn more</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="depart_ment_tab mb-30">
                    <ul class="nav" id="myTab" role="tablist">
                        @foreach($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">
                                    <i class="flaticon-teeth"></i>
                                    <h4>{{ $category->name }}</h4>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="dept_main_info white-bg">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <!-- single_content  -->
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="dept_thumb">
                                <img src="img/department/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="dept_info">
                                <h3>Dentist with surgical mask holding <br> scaler near patient</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                <a href="#" class="boxed-btn">Make An Appointment</a>
                            </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- single_content  -->
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="dept_thumb">
                                <img src="img/department/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="dept_info">
                                <h3>Dentist with surgical mask holding <br> scaler near patient</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                <a href="#" class="boxed-btn">Make An Appointment</a>
                            </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <!-- single_content  -->
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="dept_thumb">
                                <img src="img/department/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="dept_info">
                                <h3>Dentist with surgical mask holding <br> scaler near patient</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                <a href="#" class="boxed-btn">Make An Appointment</a>
                            </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>
                <div class="tab-pane fade" id="Astrology" role="tabpanel" aria-labelledby="Astrology-tab">
                    <!-- single_content  -->
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="dept_thumb">
                                <img src="img/department/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="dept_info">
                                <h3>Dentist with surgical mask holding <br> scaler near patient</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                <a href="#" class="boxed-btn">Make An Appointment</a>
                            </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>
                <div class="tab-pane fade" id="Neuroanatomy" role="tabpanel" aria-labelledby="Neuroanatomy-tab">
                    <!-- single_content  -->
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="dept_thumb">
                                <img src="img/department/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="dept_info">
                                <h3>Dentist with surgical mask holding <br> scaler near patient</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                <a href="#" class="boxed-btn">Make An Appointment</a>
                            </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>
                <div class="tab-pane fade" id="Blood" role="tabpanel" aria-labelledby="Blood-tab">
                    <!-- single_content  -->
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="dept_thumb">
                                <img src="img/department/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="dept_info">
                                <h3>Dentist with surgical mask holding <br> scaler near patient</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                <a href="#" class="boxed-btn">Make An Appointment</a>
                            </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                </div>
            </div>
        </div>

    </div>
</div>
<!-- depertment_area_end  -->

<!-- expert_doctors_area_start -->
<div class="expert_doctors_area">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-6">
                <div class="section_title mb-55 text-center">
                    <h3>Our Doctors</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

    @foreach($doctors as $key=>$doctorlist)
            <div class="col-lg-4 col-md-6">
                    <div class="single_expert">
                        <div class="expert_thumb">
                            <img src="{{ asset('backend/upload/'.$doctorlist->profile_pic) }}"
                                alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>{{$doctorlist->full_name}}</h3>
                            <span>{{$doctorlist->category->name ?? null}}</span>
                            <div class="social_links">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
             @endforeach

        </div>
    </div>
</div>
<!-- expert_doctors_area_end -->

<div class="book_apointment_area">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-7">
                <div class="popup_box ">
                    <div class="popup_inner">
                        <h3>
                            Book an
                            <span>Appointment</span>
                        </h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-12">
                                    <select class="form-select wide" id="default-select" class="">
                                        <option data-display="Please select doctor to visit">Please select doctor to
                                            visit </option>
                                        <option value="1">Anaf</option>
                                        <option value="2">Nayna Therapy</option>
                                        <option value="3">Nadif</option>
                                    </select>
                                </div>
                                <div class="col-xl-9">
                                    <input type="text" placeholder="Your name ">
                                </div>
                                <div class="col-xl-3">
                                    <input type="text" placeholder="Your age">
                                </div>
                                <div class="col-xl-6">
                                    <input type="text" placeholder="Phone number ">
                                </div>
                                <div class="col-xl-6">
                                    <input type="email" placeholder="Email Address">
                                </div>
                                <div class="col-xl-6">
                                    <input class="datepicker" placeholder="Appointment Date">
                                </div>
                                <div class="col-xl-6">
                                    <input class="timepicker" placeholder="Suitable time">
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit" class="boxed-btn3">Make an Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- quality_area_start  -->
<div class="quality_area">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-6">
                <div class="section_title mb-55 text-center">
                    <h3>Quality Health</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_quality">
                    <div class="icon">
                        <i class="flaticon-customer-service"></i>
                    </div>
                    <h3>Health Consultation</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_quality">
                    <div class="icon">
                        <i class="flaticon-find"></i>
                    </div>
                    <h3>Find Health</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_quality">
                    <div class="icon">
                        <i class="flaticon-doctor"></i>
                    </div>
                    <h3>Search Deoctor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- quality_areaend  -->

<!-- Emergency_contact start -->
<div class="Emergency_contact">
    <div class="Emergency_contact_inner ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="single_emergency">
                        <div class="info">
                            <span>We are here for you</span>
                            <h3>Book Appointment</h3>
                        </div>
                        <div class="info_button">
                            <a href="#" class="boxed-btn3-white">Book Appointment
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single_emergency align-items-center d-flex justify-content-end">
                        <div class="icon">
                            <i class="flaticon-call"></i>
                        </div>
                        <div class="info">
                            <span>Emergency Medical Care</span>
                            <h3>+1-465 4545</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Emergency_contact end -->

@endsection
