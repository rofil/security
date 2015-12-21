@extends("RofilFTIK::one-column")

@section("content")

<h2>Form Login</h2>

<hr>

{!! Form::open(array('url' => 'foo/bar')) !!}
    <div class="form-group">
        <label for="username">Username</label>
        {!! Form::text('username', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        
        {!! Form::submit('Login', ['class'=>'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}

@stop