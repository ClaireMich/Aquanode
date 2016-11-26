@extends('layouts.main')

@section('content')

    <div class="page-header text-center">
          <h1>Sign Up with Landing</h1>
    </div>
    <div class="center-block gray row">
        {!! Form::open(['url'=>'createUser', 'class'=>'form-horizontal', 'id'=>'formCreateUser']) !!}
            
                <div class="form-group ">
                    {!! Form::label('name', 'Name: ', ['class'=>' col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label']) !!}
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                      {!!Form::text('name', ['class'=>'form-control', 'id' => 'name', 
                      'placeholder'=>'Name'])!!}
                    </div>
                </div>
                <div class="form-group ">
                    {!! Form::label('phone', 'Phone: ', ['class'=>' col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label']) !!}
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                      {!!Form::text('phone', ['class'=>'form-control', 'id' => 'phone', 
                      'placeholder'=>'Phone'])!!}
                    </div>
                </div>
                <div class="form-group ">
                    {!! Form::label('address', 'Address: ', ['class'=>' col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label']) !!}
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                      {!!Form::text('address', ['class'=>'form-control', 'id' => 'address', 
                      'placeholder'=>'Address'])!!}
                    </div>
                </div>
                <div class="form-group ">
                    {!! Form::label('email', 'Email: ', ['class'=>' col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label']) !!}
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                      {!!Form::text('email', ['class'=>'form-control', 'id' => 'email', 
                      'placeholder'=>'Email'])!!}
                    </div>
                </div>
                <div class="form-group ">
                    {!! Form::label('password', 'Password: ', ['class'=>' col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label']) !!}
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                      {!!Form::password('password', ['class'=>'form-control', 'id' => 'password', 
                      'placeholder'=>'Password'])!!}
                    </div>
                </div>
                <div class="form-group ">
                    {!! Form::label('comments', 'Comments: ', ['class'=>' col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label']) !!}
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                      {!!Form::textarea('comments', ['class'=>'form-control', 'id' => 'comments', 
                      'placeholder'=>'Comments'])!!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-md-offset-4  col-lg-offset-4  col-sm-8 col-md-8 col-lg-8">
                      {!! Form::submit('Create', ['id'=>'createUser', 'class'=>'btn btn-lg pull-right btn-primary']) !!}
                    </div>
                  </div>
        {!!Form::close()!!}  
    </div>
@stop