{"filter":false,"title":"followers.blade.php","tooltip":"/microposts/resources/views/users/followers.blade.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":12,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <aside class=\"col-sm-4\">","            @include('users.card', ['user' => $user])","        </aside>","        <div class=\"col-sm-8\">","            @include('users.navtabs', ['user' => $user])","            @include('users.users', ['users' => $users])","        </div>","    </div>","@endsection"],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":12,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <aside class=\"col-sm-4\">","            @include('users.card', ['user' => $user])","        </aside>","        <div class=\"col-sm-8\">","            @include('users.navtabs', ['user' => $user])","            @include('users.users', ['users' => $users])","        </div>","    </div>","@endsection"],"id":3}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":12,"column":11},"end":{"row":12,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1589261613819,"hash":"88282e406bd7ab4a6db9d9d059a51973b731ef08"}