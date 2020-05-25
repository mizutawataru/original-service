@extends('layouts.app')

@section('content')
    <div class="jumbotron center" style="height:40rem;">
        <div class="text-center">
            <h1>新規作成</h1>
            <hr class="my-4">
        </div>

        <div class="row">
            <div class="col-sm-6 offset-sm-3">

                {!! Form::open(['route' => 'signup.post']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'アカウント名') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'e-mail') !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'パスワード') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password_confirmation', '確認') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>

                    <div class="text-center">
                        <p>{!! Form::submit('新規作成', ['class' => 'btn btn-outline-primary btn-lg']) !!}</p>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection