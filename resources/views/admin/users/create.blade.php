@extends('layouts.admin')

@section('content')

    <h1 class="text-center">Create User</h1>

    <div class="col-md-6 col-md-offset-3 well">

        @include('includes.form-error')

     {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>'true']) !!}

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
               {!! Form::select('is_active', array(1 =>'Active', 0 => 'Not Active'), 0, ['class'=>'form-control']) !!}

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
            {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
         </div>

         {!! Form::close() !!}

    </div>

    @endsection