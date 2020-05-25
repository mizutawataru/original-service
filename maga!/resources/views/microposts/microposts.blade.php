<ul class="list-unstyled">
    @foreach ($microposts as $micropost)
        <li class="card mb-4" style="max-width:1000px;">
            <div class="row no-gutters">
                
                <div class="col-sm-4">
                    <img class="mr-2 rounded" src="{{ Gravatar::src($micropost->user->email, 50) }}" alt="">
                </div>
                <div class="col-sm-8">
                    <p>{!! link_to_route('users.show', $micropost->user->name, ['id' => $micropost->user->id]) !!} <span class="text-muted">さんの投稿 {{ $micropost->created_at }}</span></p>
                </div>
                <div class="card-body">    
                    <div class="text-sm-left">    
                        <p class="mx-auto">作品名：{!! nl2br(e($micropost->title)) !!}</p>
                        <p class="mx-auto">あらすじ：{!! nl2br(e($micropost->story)) !!}</p>
                    </div>
                    <div class="text-sm-left">
                        <p>{!! link_to_route('microposts.show', '詳細', ['id' => $micropost->id]) !!}</p>
                    </div>
                    <div class="text-sm-right">    
                        @include('favorites_button.favorites_button', ['micropost' => $micropost])
                    </div>
                </div>
            </div>
        </li>
    @endforeach
</ul>