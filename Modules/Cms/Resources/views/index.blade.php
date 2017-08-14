@extends('cms::layouts.master')

@section('content')
    <div class="wrapper">
        {{Form::open(array('url' => 'admin/login', 'method' => 'post', 'class' => 'form-signin'))}}
            <h2 class="form-signin-heading">Please login</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required'))}}
            {{Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required'))}}
            {{Form::button('Login', array('class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit'))}}
        {{Form::close()}}
    </div>
@stop
