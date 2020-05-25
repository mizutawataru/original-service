@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="text-center">
            <h1>タイムライン</h1>
                <div class="text-sm-right">
                    <div class="search">
	                    {{ Form::open(['method' => 'GET']) }}
	                        {{ Form::input('検索する', 'q', null) }}
	                    {{ Form::close() }}
                    </div>
                    {!! link_to_route('microposts.create', '新規投稿', [], ['class' => 'btn btn-outline-primary']) !!}
                </div>
            <hr class="my-4">
        </div>
        <div class="row">
            <div class="col-sm-7">
                @if (count($microposts) > 0)
                    @include('microposts.microposts', ['microposts' => $microposts])
                @endif
            </div>
        </div>
    
    @else
        <div class="jumbotron center" style="heigt:80rem;">
            <div class="text-center">
                <h1>Maga!</h1>
                <hr class="my-4">
                <h2><p>{!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-outline-primary']) !!}</p></h2>
                <h2><p>{!! link_to_route('signup.get', '新規作成', [], ['class' => 'btn btn-lg btn-outline-primary']) !!}</p></h2>
            </div>
        </div>
    @endif
    </div>  
@endsection