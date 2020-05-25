@extends('layouts.app')

@section('content')

    <h1>編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($micropost, ['route' => ['microposts.update', $micropost->id], 'method' => 'put']) !!}
        
                <div class="form-group">
                    {!! Form::label('title', '作品名') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    {!! Form::label('story', 'あらすじ') !!}
                    {!! Form::text('story', null, ['class' => 'form-control']) !!}
                    {!! Form::label('iinee', 'ここがいいねえ') !!}
                    {!! Form::text('iinee', null, ['class' => 'form-control']) !!}
                </div>
                <div class="text-sm-right">
                    {!! Form::submit('編集を完了する', ['class' => 'btn btn-outline-primary btn-lg']) !!}
                </div>
            {!! Form::close() !!}
            
            <div class="text-sm-right">
                <p>{!! Form::open(['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete']) !!}
                     {!! Form::submit('削除する', ['class' => 'btn btn-outline-danger btn-lg']) !!}
                    {!! Form::close() !!}</p>
            </div>
        </div>
    </div>

@endsection