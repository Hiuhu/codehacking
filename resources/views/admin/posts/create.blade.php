@extends('layouts.admin')


@section('content')

    <h1 class="text-center">Create Post</h1>

    <div class="col-md-6 col-md-offset-3 well">

        @include('includes.form-error')

        {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}

           <div class="form-group">

                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title', null, ['class'=>'form-control', 'placeholder' => 'Enter Title']) !!}

           </div>

           <div class="form-group">

                     {!! Form::label('category_id', 'Category') !!}
                     {!! Form::select('category_id', [1=>'PHP', 0=>'Javascript'], null, ['class'=>'form-control']) !!}

           </div>

           <div class="form-group">

                   {!! Form::label('photo_id', 'Photo') !!}
                   {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}

            </div>

                  <div class="form-group">

                          {!! Form::label('body', 'Description') !!}
                          {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>5, 'placeholder'=>'Enter Description']) !!}

                   </div>

            <div class="form-group">

                {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                {!! Form::button('Clear', ['class'=>'btn btn-default pull-right', 'type'=>'reset']) !!}

            </div>

        {!! Form::close() !!}

    </div>



@endsection