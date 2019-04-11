@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $post->title}}</h3>
                </div>
                <div class="card-body">
                <p>{{  $post->description }}</p>
                <small>Written on {{ $post->created_at}} by {{ $post->user->name}} </small>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection