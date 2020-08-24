@extends('backend.Layouts.master')

@section('title','Admin')

@section('main')
<section class="section">
    @include('backend.partials.hereo')
    <div class="section-body">
        <div class="card">
            <form action="{{ route('doctors.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h4>Doctor Edit</h4>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label>Full name</label>
                        <input type="text" value="{{$user->full_name}}" name="full_name" class="form-control form-control-lg   @error('full_name') is-invalid @enderror">
                        @error('full_name') <span>{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="{{$user->email}}" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input value="{{$user->phone}}" type="text" name="phone" class="form-control form-control-lg  @error('password') is-invalid @enderror">
                    </div>
                       <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="profile_pic" class="form-control form-control-lg @error('profile_pic') is-invalid @enderror">
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" class="form-control @error('role') is-invalid @enderror">
                            <option>Docotor</option>
                        </select>
                    </div>
                </div>

                <div class="card-footer row justify-content-between">
                    <div class="ml-4">
                        <div class="custom-control custom-checkbox">
                            <input name="status" value="active" {{ $user->status == 'active' ? 'checked' : '' }} type="checkbox" class="custom-control-input"
                                id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Active</label>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        <a href="{{ route('doctors.index') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
