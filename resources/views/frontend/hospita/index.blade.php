@extends('frontend.Layouts.master')

@section('main')
<div class="bradcam_area breadcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>All Hospitals List</h3>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="depertment_area">
    <div class="container">
        @foreach($hospitals as $hospital)
        <div class="row align-items-center">
            <div class="col-lg-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.1256358766504!2d90.4003814144887!3d23.885163234523162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c446325b1e59%3A0x658b63983b736a14!2sTongi%20Bazar%2C%20Tongi!5e0!3m2!1sen!2sbd!4v1597169778379!5m2!1sen!2sbd" width="300" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-7">
                <div class="dept_info">
                    <h3>{{$hospital->name}}</h3>
                    <p>{{$hospital->name}}</p>
                    <a href="#" class="boxed-btn">Make An Appointment</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
