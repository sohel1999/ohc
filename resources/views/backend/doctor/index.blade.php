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
                            <h4>Doctor</h4>
                            <a href="{{ route('doctors.create') }}" class="btn btn-success">Create Doctor</a>
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
                                        <th>
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    data-checkbox-role="dad" class="custom-control-input"
                                                    id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Profile</th>
                                        <th>phone</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($doctors as $key=>$doctor)
                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        class="custom-control-input" id="checkbox-{{ $key+1 }}">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>{{ $doctor->full_name }}</td>
                                            <td class="align-middle">
                                                {{ $doctor->email }}
                                            </td>

                                            <td>
                                                <img alt="image"
                                                    src="{{ asset('backend/upload/'.$doctor->profile_pic) }}"
                                                    class="rounded-circle" width="35" data-toggle="tooltip" title=""
                                                    data-original-title="Wildan Ahdian">
                                            </td>
                                            <td>{{ $doctor->phone }}</td>
                                            <td>
                                                <div
                                                    class="badge {{ $doctor->status=='active' ? 'badge-success' : 'badge-danger' }}">
                                                    {{ $doctor->status }}</div>
                                            </td>
                                            <td>
<a href="{{route('user.admin.delete',$doctor->id)}}" class="btn btn-outline-danger"> <i
                                                        class="fa fa-trash"></i></a>
                                                <a href="{{route('doctors.edit',$doctor->id)}}" class="btn btn-outline-dark"> <i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforEach

                                </tbody>
                            </table>
                            <div class="flex flex-center-start">
                                {{ $doctors->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
