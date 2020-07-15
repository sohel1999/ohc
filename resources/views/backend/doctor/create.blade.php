@extends('backend.Layouts.master')

@section('title','Admin')

@section('main')
<section class="section">
    @include('backend.partials.hereo')
    <div class="section-body">
        <div class="card">
            <form action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h4>Create Doctor</h4>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label>Full name</label>
                        <input type="text" name="full_name" class="form-control form-control-lg   @error('full_name') is-invalid @enderror">
                        @error('full_name') <span>{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror">
                    </div>

                    <div class="form-group">
                      <label>Doctor Category</label>
                      <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                        <option value="{{ $category->id}}">{{$category->name}}</option>
                       @endforeach
                      </select>
                    </div>
                     <div class="form-group">
                      <label>Hosipatl</label>
                      <select class="form-control" name="hospital_id">
                       @foreach($hospiatals as $hospital)
                        <option value="{{$hospital->id}}">{{$hospital->name}}</option>
                       @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control form-control-lg  @error('password') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror">
                    </div>

                    <div class="form-group">
                        <label>Confirm Password </label>
                        <input type="password" name="password_confirmation" class="form-control form-control-lg @error('pasword_confirmation') is-invalid @enderror">
                    </div>
                      <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="profile_pic" class="form-control form-control-lg @error('profile_pic') is-invalid @enderror">
                    </div>
                      <div class="form-group ">
                      <label>Bio</label>
                        <textarea name="bio" class="summernote-simple"></textarea>
                    </div>
                </div>

                <div class="card-footer row justify-content-between">
                    <div class="ml-4">
                        <div class="custom-control custom-checkbox">
                            <input name="status" value="active" checked type="checkbox" class="custom-control-input"
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
