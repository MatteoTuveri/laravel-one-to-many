@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex flex-column align-items-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $category->name }}</h5>
                </div>
            </div>
            @foreach ($category->projects as $project)
                <li>{{ $project->name }}</li>
            @endforeach
            <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Return to the Dashboard</a>
        </div>
    </div>
@endsection