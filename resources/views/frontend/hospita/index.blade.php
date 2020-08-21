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
                <iframe src="{{$hospital->google_map_location}}" width="400" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
