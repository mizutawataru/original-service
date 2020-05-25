@if (count($users) > 0)
    <ul class="list-unstyled">
        @foreach ($users as $user)
            <li class="card">
                <div class="row no-gutters">
                <div class="col-sm-4">
                    <img class="mr-2 rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
                </div>
                <div class="col-sm-8">
                    <div>
                        {{ $user->name }}
                    </div>
                    <div>
                        <p>{!! link_to_route('users.show', 'プロフィールを見る', ['id' => $user->id]) !!}</p>
                    </div>
                </div>
                
                </div>
            </li>
        @endforeach
    </ul>
    {{ $users->links('pagination::bootstrap-4') }}
@endif