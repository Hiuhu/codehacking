@extends('layouts.admin')

@section('content')

    <h1 class="text-center">Edit User</h1>

    <div class="col-md-3">

        <img src="{{$user->photo ? $user->photo->file : '/images/man.jpg'}}" alt="" class="img-responsive img-rounded">

    </div>

    <div class="col-md-6 col-md-offset-0 well">

        @include('includes.form-error')

        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>'true']) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('role_id', 'Role') !!}
            {!! Form::select('role_id', [''=>'Select One'] + $roles, null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('is_active', 'Status') !!}
            {!! Form::select('is_active', array(1 =>'Active', 0 => 'Not Active'), null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('photo_id', 'Photo') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">
            {!! Form::submit('Save', ['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>

@endsection