@extends('layout')

@section('title')
    Add User
@stop

@section('content')
<h2>Add user...</h2>
  {{ Form::open(array('url'=>'/users/add', 'role' => 'form')) }}

    <div class="form-group">
        <label for="user_id">User id</label>
        <input type="text" name="user_id" class="form-control" placeholder="Enter user id">
    </div>
    <div class="form-group">
        <label for="passwd">Password</label>
        <input type="password" name="passwd" class="form-control" placeholder="Enter user id">
    </div>
    <div class="form-group">
        <label for="passwd_repeat">Repeat Password</label>
        <input type="password" name="passwd_repeat" class="form-control" placeholder="Please, repeat the password">
    </div>
    <div class="form-group">
        <label for="uid">UID</label>
        <input type="number" name="uid" class="form-control" placeholder="5500">
    </div>
    <div class="form-group">
        <label for="gid">GID</label>
        <input type="number" class="form-control" placeholder="5500">
    </div>
    <div class="form-group">
        <label for="homepath">Home directory</label>
        <input type="text" name="homepath" class="form-control" placeholder="Path to home directory">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  {{ Form::close() }}
@stop