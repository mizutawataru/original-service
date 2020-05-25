@extends('layouts.app')

@section('content')

    <h1>投稿ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($micropost, ['route' => 'microposts.store']) !!}
        
                <div class="form-group">
                    {!! Form::label('title', '作品名') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    {!! Form::label('story', 'あらすじ') !!}
                    {!! Form::text('story', null, ['class' => 'form-control']) !!}
                    {!! Form::label('iinee', 'ここがいいねえ') !!}
                    {!! Form::text('iinee', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('投稿する', ['class' => 'btn btn-primary btn-lg']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
@endsection