@extends('layouts.app')

@section('content')
    <div class="jumbotron center" style="height:30rem;">
        <div class="text-center">
            <h1>ログイン</h1>
            <hr class="my-4">
        </div>

        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                {!! Form::open(['route' => 'login.post']) !!}
                    <div class="form-group">
                        {!! Form::label('email', 'e-mail') !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'パスワード') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                    <div class="text-center">
                        <p>{!! Form::submit('ログイン', ['class' => 'btn btn-outline-success btn-lg']) !!}</p>
                        <p class="mt-2"> {!! link_to_route('signup.get', 'ご登録がお済みでない方はこちら') !!}</p>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection