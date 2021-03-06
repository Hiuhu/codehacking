@extends('layouts.admin')


@section('content')

        <h1><span class="glyphicon glyphicon-menu-hamburger"></span> Posts</h1>

    <table class="table table-striped">
        <thead>
            <tr class="btn-info">
              <th>Id</th>
                <th>Photo</th>
              <th>User</th>
              <th>Category</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)

            <tr>
                <td>{{$post->id}}</td>
                <td><img src="{{$post->photo ? $post->photo->file : '/images/man.jpg'}}" alt="" height="50" width="70"></td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category ? $post->category->name : 'None'}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>

            @endforeach

        @endif

        </tbody>
    </table>

    @endsection