@extends('layouts.app')

@section('content')
    <header>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                    </div>
                </div>
                @include('user_follow.follow_button', ['user' => $user])
            </div>
            <div class="col-sm-8">
                <h1>{{ $user->name }}</h1>
                @include('users.navtabs', ['user' => $user])
                @include('users.users', ['users' => $users])
            </div>
        </div>
    </header>
@endsection