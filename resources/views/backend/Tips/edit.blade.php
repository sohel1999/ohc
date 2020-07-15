@extends('backend.Layouts.master')

@section('title','Admin')

@section('main')
<section class="section">
    @include('backend.partials.hereo')
    <div class="section-body">
        <div class="card">
            <form action="{{ route('healthTip.update',$tip->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h4>Writing Health Tips Blog</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Titel</label>
                        <input type="text" value="{{$tip->title}}" name="title" class="form-control form-control-lg   @error('full_name') is-invalid @enderror">
                        @error('full_name') <span>{{$message}}</span>@enderror
                    </div>
                   <div class="form-group row mb-4">
                      <label class="col-form-label ml-3 display-3">Content</label>
                      <div class="col-lg-12">
                        <textarea class="summernote" name="body">{!! $tip->body !!}</textarea>
                      </div>
                    </div>

                </div>
                <div class="card-footer row justify-content-between">
                    <div class="ml-4">
                        <div class="custom-control custom-checkbox">
                            <input name="status" value="active" checked type="checkbox" class="custom-control-input"
                                id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">published</label>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary mr-1" type="submit">post update</button>
                        <a href="{{ route('healthTip.index') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>



@endsection
