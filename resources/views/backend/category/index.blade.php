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
                            <a href="{{ route('categories.create') }}"
                                class="btn btn-success">Create</a>
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
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($categories as $key=>$category)
                                        <tr>
                                            <td>{{ $category->name }}</td>

                                            <td>
                                                <a href="#">
                                                    <img alt="image"
                                                        src="{{ asset('backend/upload/category/'.$category->image) }}"
                                                        class="rounded-circle" style="object-fit: cover;" width="35"
                                                        data-toggle="title" title="">

                                                </a>
                                            </td>
                                            <td>
                                                @if($category->status == 1)
                                                    <span class="badge badge-primary">active</span>
                                                @else
                                                    <div class="badge badge-warning">incative</div>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('categories.destroy',$category->id) }}"
                                                    class="btn btn-outline-danger"> <i class="fa fa-trash"></i></a>
                                                <a href="{{ route('categories.edit',$category->id) }}"
                                                    class="btn btn-outline-dark"> <i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforEach

                                </tbody>
                            </table>
                            <div class="flex flex-center-start">
                                {{ $categories->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
