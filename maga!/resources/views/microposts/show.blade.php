@extends('layouts.app')

@section('content')

    <h1>詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $micropost->id }}</td>
        </tr>
        <tr>
            <th>作品名</th>
            <td>{{ $micropost->title }}</td>
        </tr>
        <tr>
            <th>あらすじ</th>
            <td>{{ $micropost->story }}</td>
        </tr>
        <tr>
            <th>ここがいいねえ</th>
            <td>{{ $micropost->iinee }}</td>
        </tr>
    </table>
    @if (Auth::id() == $micropost->user_id)
        <div class="text-right">
        <p>{!! link_to_route('microposts.edit', '編集する', ['id' => $micropost->id], ['class' => 'btn btn-light btn-lg']) !!}</p>
        
    @endif

@endsection