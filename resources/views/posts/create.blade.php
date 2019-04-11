@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
           {{--  <form action="" method="post">
                <div class="form-group">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description"  class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit" style="width:100%">
                </div>
            </form> --}}
            {!!Form::open(['action'=>'PostsController@store', 'method'=>'post'])!!}
            <div class="form-group">
                {!!Form::label('title','Title',['class'=>'form-label'])!!}
                {!!Form::text('title','',['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('description','Description')!!}
                {!!Form::textarea('description','',['class'=>'form-control'])!!}

            </div>
            <div class="form-group">
                {!!Form::submit('Submit',['class'=>'btn btn-primary','style'=>'width:100%'])!!}
            </div>
            {!!Form::close()!!}
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection