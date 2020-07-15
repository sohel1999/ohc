@extends('backend.Layouts.master')

@section('title','Admin')

@section('main')
<section class="section">
    @include('backend.partials.hereo')
    <div>
        {!! $tip->body !!}

    </div>
</section>



@endsection
