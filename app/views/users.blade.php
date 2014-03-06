@extends('layout')

@section('title')
    Users
@stop

@section('content')
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>User id</th>
          <th>homedir</th>
          <th>Login count</th>
          <th>Last access</th>
          <th>Last updated</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $usr)
        <tr>
          <td>{{$usr->id}}</td>
          <td>{{$usr->user_id}}</td>
          <td>{{$usr->homedir}}</td>
          <td>{{$usr->count}}</td>
          <td>{{$usr->accessed}}</td>
          <td>{{$usr->modified}}</td>
          <td>
            <a href="/users/delete/{{$usr->id}}" class="btn btn-danger btn-xs">
              Delete
            </a>
            <a href="/users/edit/{{$usr->id}}" class="btn btn-warning btn-xs">
              Edit
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@stop
