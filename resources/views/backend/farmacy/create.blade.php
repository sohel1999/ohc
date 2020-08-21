@extends('backend.Layouts.master')

@section('title','Admin')

@section('main')
<section class="section">
    @include('backend.partials.hereo')
    <div class="section-body">
        <div class="card">
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h4>Category</h4>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="name" class="form-control form-control-lg   @error('name') is-invalid @enderror">
                        @error('name') <span>{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>File</label>
                        <input type="file" name="photo" class="form-control form-control-lg  @error('photo') is-invalid @enderror">
                    </div>
                </div>

                <div class="card-footer row justify-content-between">
                    <div class="ml-4">
                        <div class="custom-control custom-checkbox">
                            <input name="status" value="1" checked type="checkbox" class="custom-control-input"
                                id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Active</label>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
