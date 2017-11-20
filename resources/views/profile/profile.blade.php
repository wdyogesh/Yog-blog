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
                    <div class="panel-heading">Add New User</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ url('AddProfile') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">designation</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="designation" id="designation">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add New User
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
