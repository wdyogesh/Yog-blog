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
                    <div class="panel-heading">Add New Category </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ url('/addCategory') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Category Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="category" placeholder="Please Enter Category Name " required >
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="CategoryDes" class="col-md-4 control-label">Category Description</label>
                                <div class="col-md-6">
                                    <textarea name="description" id="" cols="46" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
