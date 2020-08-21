    <div id="booking" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>
                    Book an
                    <span>Appointment</span>
                </h3>
                <form action="{{ route('bookings.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12">
                            <select class="form-select wide" id="default-select" name="doctor_id" class="">
                                <option data-display="Please select doctor to visit">Please select doctor to visit
                                </option>
                                @foreach($doctors as $doctor)
                                <option value="{{ $doctor->id }}"> {{ $doctor->full_name }} , Hospital {{ optional($doctor->hospital)->name}}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-9">
                            <input type="text" value="{{ auth()->user()->full_name ?? '' }}" placeholder="Your name" name="name">
                        </div>
                        <div class="col-xl-3">
                            <input type="text" value="{{ auth()->user()->age ?? ''  }}" placeholder="Your age" name="age">
                        </div>
                        <div class="col-xl-6">
                            <input type="text" value="{{ auth()->user()->phone ?? ''  }}" placeholder="Phone number" name="phone">
                        </div>
                        <div class="col-xl-6">
                            <input type="email" value="{{ auth()->user()->email ?? ''  }}" placeholder="Email Address" name="email">
                        </div>
                        <div class="col-xl-6">
                            <input type="date" name="date" placeholder="Appointment Date">
                        </div>
                        <div class="col-xl-6">
                            <input class="timepicker" placeholder="Suitable time" name="time">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Make an Appointment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="registaiton" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>
                    Patient
                    <span>Registraiton</span>
                </h3>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xl-9">
                            <input type="text" name="full_name" placeholder="Your full name">
                        </div>
                        <div class="col-xl-3">
                            <input type="text" placeholder="Your age" name="age">
                        </div>
                        <div class="col-xl-6">
                            <input type="text" placeholder="Phone number " name="phone">
                        </div>
                        <div class="col-xl-6">
                            <input type="email" placeholder="Email Address" name="email">
                        </div>
                        <div class="col-xl-6">
                            <input type="password" placeholder="Password" name="password">
                        </div>
                        <div class="col-xl-6">
                            <input type="password" placeholder="Confiramtion Password" name="password-confirmation">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Registraiton</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="login" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>
                    Patient
                    <span>Login</span>
                </h3>
                <form action="{{ route('admin.loginProcess') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12">
                            <input type="email" placeholder="Email Address" name="email">
                        </div>
                        <div class="col-xl-12">
                            <input type="password" placeholder="Password" name="password">
                        </div>

                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
