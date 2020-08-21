@extends('backend.Layouts.master')

@section('title','pharmacy')

@section('main')
<section class="section">
    @include('backend.partials.hereo')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <div class="row">
                            <a href="{{ route('farmacy.create') }}"
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
                                        <th>detail</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($hospitals as $key=>$hospital)
                                        <tr>
                                            <td>{{ $hospital->name }}</td>

                                            <td>
                                                {{ $hospital->detail }}
                                            </td>
                                            <td>
                                                @if($hospital->status == 1)
                                                    <span class="badge badge-primary">active</span>
                                                @else
                                                    <div class="badge badge-warning">incative</div>
                                                @endif
                                            </td>
                                            <td>
                                                 <form action="{{ route('farmacy.destroy',$hospital->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-outline-denger"><i class="fa fa-trash"></i></button>
                                                </form>
                                                <a href="{{ route('farmacy.edit',$hospital->id) }}"
                                                    class="btn btn-outline-dark"> <i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforEach

                                </tbody>
                            </table>
                            <div class="flex flex-center-start">
                                {{ $hospitals->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
