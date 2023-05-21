@extends('layouts/admin')

@section('content')
    <div class="container d-flex justify-content-center mt-5">
        <div class="card-project text-center">
            <div class="thumb">
                <img src="{{$project->thumb}}" alt="anteprima progetto">
            </div>
            <div class="card-details">
                <div class="title">{{$project->title}}</div>
                <div class="link">{{$project->link}}</div>
                <div class="language">{{$project->Languages}}</div>
                <p>{{$project->description}}</p>
                <div class="button-more">
                    <a href="{{route('admin.projects.edit', $project->slug)}}"><button class="btn btn-primary">Modifica</button></a>
                </div>
            </div>
        </div>
    </div>

@endsection