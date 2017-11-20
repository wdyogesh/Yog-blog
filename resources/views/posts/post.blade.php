@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger"> {{$error}}</div>
                    @endforeach
                @endif
                @if(session('response'))
                    <div class="alert alert-success">{{session('response')}}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Post</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ url('AddPost') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('post_title') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Title</label>
                                <div class="col-md-6">
                                    <input id="post_title" type="text" class="form-control" name="post_title"  placeholder="Enter Post Title" required autofocus>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('post_body') ? ' has-error' : '' }}">
                                <label for="text-area" class="col-md-4 control-label">Post Body</label>
                                <div class="col-md-6">
                                    <textarea name="post_body" id="" cols="46" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">New Blog Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
