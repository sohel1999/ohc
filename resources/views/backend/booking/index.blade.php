@extends('backend.Layouts.master')

@section('title','Admin')

@section('main')
<section class="section">
    @include('backend.partials.hereo')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <div class="row">

                        </div>
                        <div>
                            <div class="card-header-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th>Patient</th>
                                        <th>phone</th>
                                        <th>age</th>
                                        <th>date & time</th>
                                        <th>doctor</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($bookings as $key=>$booking)
                                        <tr>
                                            <td>{{ $booking->name }}</td>

                                            <td>
                                                {{ $booking->phone }}
                                            </td>
                                            <td>{{ $booking->age }}</td>
                                            <th>{{ $booking->date }} {{ $booking->time }}</th>
                                            <td>{{ $booking->doctor->full_name }}</td>
                                            <td>
                                                @if(array_key_exists($booking->status, $validStatus))
                                                    <span class="badge text-white {{ $validStatus[$booking->status]}}">{{ $booking->status }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('categories.destroy',$booking->id) }}"
                                                    class="btn btn-outline-danger"> <i class="fa fa-trash"></i></a>
                                                <a href="{{ route('categories.edit',$booking->id) }}"
                                                    class="btn btn-outline-dark"> <i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforEach

                                </tbody>
                            </table>
                            <div class="flex flex-center-start">
                                {{ $bookings->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
