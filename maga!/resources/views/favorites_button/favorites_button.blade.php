@if (Auth::user()->is_favorited($micropost->id))
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {{ Form::button('<i class="fas fa-hand-holding-heart"></i>', ['type' => 'submit','class' => 'btn btn-danger' ] )  }}
    {!! Form::close() !!}
@else 
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
        {{ Form::button('<i class="fas fa-hand-holding"></i>', ['type' => 'submit','class' => 'btn btn-light' ] )  }}
    {!! Form::close() !!}
@endif