@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Abvailable Posts
            </div>
            <div class="card-body">
                @if(isset($posts))
                <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    @foreach($posts as $post )
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{  $post->description }}</td>
                            <td><a href="/posts/{id}" class="btn btn-primary">View</a></td>
                        </tr>
                    @endforeach
                </table>
                {{ $posts->links()}}
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
@endsection
