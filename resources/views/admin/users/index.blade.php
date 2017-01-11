@extends('layouts.admin')


@section('content')

    <h1><span class="glyphicon glyphicon-user"></span> Users</h1>

    <table class="table table-striped">
        <thead class="btn-info">
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
                <th>Role</th>
                <th>Active</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)

            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>
                    @if($user->is_active == 1)

                          <span class="glyphicon glyphicon-ok"></span>

                        @else

                          <span class="glyphicon glyphicon-remove"></span>

                    @endif

                </td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>

            @endforeach

            @endif

        </tbody>
    </table>

@endsection