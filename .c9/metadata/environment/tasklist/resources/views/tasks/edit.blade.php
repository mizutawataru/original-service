{"filter":false,"title":"edit.blade.php","tooltip":"/tasklist/resources/views/tasks/edit.blade.php","undoManager":{"mark":40,"position":40,"stack":[[{"start":{"row":0,"column":0},"end":{"row":6,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","<!-- ここにページ毎のコンテンツを書く -->","","@endsection"],"id":1}],[{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"remove","lines":[">"],"id":2},{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"remove","lines":["-"]},{"start":{"row":4,"column":22},"end":{"row":4,"column":23},"action":"remove","lines":["-"]},{"start":{"row":4,"column":21},"end":{"row":4,"column":22},"action":"remove","lines":[" "]},{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"remove","lines":["く"]},{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"remove","lines":["書"]},{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"remove","lines":["を"]},{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"remove","lines":["ツ"]},{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":["ン"]},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"remove","lines":["テ"]},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"remove","lines":["ン"]},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"remove","lines":["コ"]},{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"remove","lines":["の"]},{"start":{"row":4,"column":11},"end":{"row":4,"column":12},"action":"remove","lines":["毎"]},{"start":{"row":4,"column":10},"end":{"row":4,"column":11},"action":"remove","lines":["ジ"]},{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"remove","lines":["ー"]},{"start":{"row":4,"column":8},"end":{"row":4,"column":9},"action":"remove","lines":["ペ"]},{"start":{"row":4,"column":7},"end":{"row":4,"column":8},"action":"remove","lines":["に"]},{"start":{"row":4,"column":6},"end":{"row":4,"column":7},"action":"remove","lines":["こ"]},{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"remove","lines":["こ"]},{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"remove","lines":[" "]},{"start":{"row":4,"column":3},"end":{"row":4,"column":4},"action":"remove","lines":["-"]},{"start":{"row":4,"column":2},"end":{"row":4,"column":3},"action":"remove","lines":["-"]},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"remove","lines":["!"]}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"remove","lines":["<"],"id":3}],[{"start":{"row":4,"column":0},"end":{"row":19,"column":10},"action":"insert","lines":["   <h1>id: {{ $message->id }} のメッセー���編集ページ</h1>","","    <div class=\"row\">","        <div class=\"col-6\">","            {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","        ","                <div class=\"form-group\">","                    {!! Form::label('content', 'メッセージ:') !!}","                    {!! Form::text('content', null, ['class' => 'form-control']) !!}","                </div>","        ","                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}","        ","            {!! Form::close() !!}","        </div>","    </div>"],"id":4}],[{"start":{"row":4,"column":35},"end":{"row":4,"column":36},"action":"remove","lines":["ジ"],"id":5},{"start":{"row":4,"column":34},"end":{"row":4,"column":35},"action":"remove","lines":["ー"]},{"start":{"row":4,"column":33},"end":{"row":4,"column":34},"action":"remove","lines":["セ"]},{"start":{"row":4,"column":32},"end":{"row":4,"column":33},"action":"remove","lines":["ッ"]},{"start":{"row":4,"column":31},"end":{"row":4,"column":32},"action":"remove","lines":["メ"]}],[{"start":{"row":8,"column":35},"end":{"row":8,"column":36},"action":"remove","lines":["e"],"id":6},{"start":{"row":8,"column":34},"end":{"row":8,"column":35},"action":"remove","lines":["g"]},{"start":{"row":8,"column":33},"end":{"row":8,"column":34},"action":"remove","lines":["a"]},{"start":{"row":8,"column":32},"end":{"row":8,"column":33},"action":"remove","lines":["s"]},{"start":{"row":8,"column":31},"end":{"row":8,"column":32},"action":"remove","lines":["s"]},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"remove","lines":["e"]},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"remove","lines":["m"]}],[{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"insert","lines":["t"],"id":7},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"insert","lines":["a"]},{"start":{"row":8,"column":31},"end":{"row":8,"column":32},"action":"insert","lines":["s"]},{"start":{"row":8,"column":32},"end":{"row":8,"column":33},"action":"insert","lines":["k"]}],[{"start":{"row":8,"column":55},"end":{"row":8,"column":56},"action":"remove","lines":["e"],"id":8},{"start":{"row":8,"column":54},"end":{"row":8,"column":55},"action":"remove","lines":["g"]},{"start":{"row":8,"column":53},"end":{"row":8,"column":54},"action":"remove","lines":["a"]},{"start":{"row":8,"column":52},"end":{"row":8,"column":53},"action":"remove","lines":["s"]},{"start":{"row":8,"column":51},"end":{"row":8,"column":52},"action":"remove","lines":["s"]},{"start":{"row":8,"column":50},"end":{"row":8,"column":51},"action":"remove","lines":["e"]},{"start":{"row":8,"column":49},"end":{"row":8,"column":50},"action":"remove","lines":["m"]}],[{"start":{"row":8,"column":49},"end":{"row":8,"column":50},"action":"insert","lines":["t"],"id":9},{"start":{"row":8,"column":50},"end":{"row":8,"column":51},"action":"insert","lines":["a"]},{"start":{"row":8,"column":51},"end":{"row":8,"column":52},"action":"insert","lines":["s"]},{"start":{"row":8,"column":52},"end":{"row":8,"column":53},"action":"insert","lines":["k"]}],[{"start":{"row":8,"column":71},"end":{"row":8,"column":72},"action":"remove","lines":["e"],"id":10},{"start":{"row":8,"column":70},"end":{"row":8,"column":71},"action":"remove","lines":["g"]},{"start":{"row":8,"column":69},"end":{"row":8,"column":70},"action":"remove","lines":["a"]},{"start":{"row":8,"column":68},"end":{"row":8,"column":69},"action":"remove","lines":["s"]},{"start":{"row":8,"column":67},"end":{"row":8,"column":68},"action":"remove","lines":["s"]},{"start":{"row":8,"column":66},"end":{"row":8,"column":67},"action":"remove","lines":["e"]},{"start":{"row":8,"column":65},"end":{"row":8,"column":66},"action":"remove","lines":["m"]}],[{"start":{"row":8,"column":65},"end":{"row":8,"column":66},"action":"insert","lines":["t"],"id":11},{"start":{"row":8,"column":66},"end":{"row":8,"column":67},"action":"insert","lines":["a"]},{"start":{"row":8,"column":67},"end":{"row":8,"column":68},"action":"insert","lines":["s"]},{"start":{"row":8,"column":68},"end":{"row":8,"column":69},"action":"insert","lines":["k"]}],[{"start":{"row":11,"column":52},"end":{"row":11,"column":53},"action":"remove","lines":["ジ"],"id":12},{"start":{"row":11,"column":51},"end":{"row":11,"column":52},"action":"remove","lines":["ー"]},{"start":{"row":11,"column":50},"end":{"row":11,"column":51},"action":"remove","lines":["セ"]},{"start":{"row":11,"column":49},"end":{"row":11,"column":50},"action":"remove","lines":["ッ"]},{"start":{"row":11,"column":48},"end":{"row":11,"column":49},"action":"remove","lines":["メ"]}],[{"start":{"row":11,"column":48},"end":{"row":11,"column":51},"action":"insert","lines":["タスク"],"id":13}],[{"start":{"row":4,"column":21},"end":{"row":4,"column":22},"action":"remove","lines":["e"],"id":14},{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"remove","lines":["g"]},{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"remove","lines":["a"]},{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"remove","lines":["s"]},{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"remove","lines":["s"]},{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":["e"]},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"remove","lines":["m"]}],[{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["t"],"id":15},{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"insert","lines":["a"]},{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"insert","lines":["s"]},{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"insert","lines":["k"]}],[{"start":{"row":2,"column":19},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":16},{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":[" "],"id":17},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"insert","lines":[" "]},{"start":{"row":4,"column":2},"end":{"row":4,"column":3},"action":"insert","lines":[" "]},{"start":{"row":4,"column":3},"end":{"row":4,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"remove","lines":["    "],"id":18}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":[" "],"id":19},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"insert","lines":[" "]},{"start":{"row":4,"column":2},"end":{"row":4,"column":3},"action":"insert","lines":[" "]},{"start":{"row":4,"column":3},"end":{"row":4,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"remove","lines":["    "],"id":20}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":[" "],"id":21},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"insert","lines":[" "]},{"start":{"row":4,"column":2},"end":{"row":4,"column":3},"action":"insert","lines":[" "]}],[{"start":{"row":4,"column":3},"end":{"row":4,"column":4},"action":"insert","lines":[" "],"id":22}],[{"start":{"row":4,"column":4},"end":{"row":10,"column":10},"action":"insert","lines":["@if (count($errors) > 0)","        <ul class=\"alert alert-danger\" role=\"alert\">","            @foreach ($errors->all() as $error)","                <li class=\"ml-4\">{{ $error }}</li>","            @endforeach","        </ul>","    @endif"],"id":23}],[{"start":{"row":3,"column":0},"end":{"row":10,"column":10},"action":"remove","lines":["","    @if (count($errors) > 0)","        <ul class=\"alert alert-danger\" role=\"alert\">","            @foreach ($errors->all() as $error)","                <li class=\"ml-4\">{{ $error }}</li>","            @endforeach","        </ul>","    @endif"],"id":24}],[{"start":{"row":2,"column":19},"end":{"row":3,"column":0},"action":"remove","lines":["",""],"id":25}],[{"start":{"row":9,"column":8},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":26},{"start":{"row":10,"column":0},"end":{"row":10,"column":8},"action":"insert","lines":["        "]},{"start":{"row":10,"column":8},"end":{"row":11,"column":0},"action":"insert","lines":["",""]},{"start":{"row":11,"column":0},"end":{"row":11,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":9},"action":"insert","lines":[" "],"id":27},{"start":{"row":10,"column":9},"end":{"row":10,"column":10},"action":"insert","lines":[" "]},{"start":{"row":10,"column":10},"end":{"row":10,"column":11},"action":"insert","lines":[" "]},{"start":{"row":10,"column":11},"end":{"row":10,"column":12},"action":"insert","lines":[" "]},{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"insert","lines":[" "]},{"start":{"row":10,"column":13},"end":{"row":10,"column":14},"action":"insert","lines":[" "]},{"start":{"row":10,"column":14},"end":{"row":10,"column":15},"action":"insert","lines":[" "]}],[{"start":{"row":10,"column":15},"end":{"row":10,"column":16},"action":"insert","lines":[" "],"id":28}],[{"start":{"row":10,"column":16},"end":{"row":13,"column":22},"action":"insert","lines":["<div class=\"form-group\">","                    {!! Form::label('title', 'タイトル:') !!}","                    {!! Form::text('title', null, ['class' => 'form-control']) !!}","                </div>"],"id":29}],[{"start":{"row":11,"column":41},"end":{"row":11,"column":42},"action":"remove","lines":["e"],"id":30},{"start":{"row":11,"column":40},"end":{"row":11,"column":41},"action":"remove","lines":["l"]},{"start":{"row":11,"column":39},"end":{"row":11,"column":40},"action":"remove","lines":["t"]},{"start":{"row":11,"column":38},"end":{"row":11,"column":39},"action":"remove","lines":["i"]},{"start":{"row":11,"column":37},"end":{"row":11,"column":38},"action":"remove","lines":["t"]}],[{"start":{"row":11,"column":37},"end":{"row":11,"column":38},"action":"insert","lines":["s"],"id":31},{"start":{"row":11,"column":38},"end":{"row":11,"column":39},"action":"insert","lines":["t"]},{"start":{"row":11,"column":39},"end":{"row":11,"column":40},"action":"insert","lines":["a"]},{"start":{"row":11,"column":40},"end":{"row":11,"column":41},"action":"insert","lines":["t"]},{"start":{"row":11,"column":41},"end":{"row":11,"column":42},"action":"insert","lines":["u"]},{"start":{"row":11,"column":42},"end":{"row":11,"column":43},"action":"insert","lines":["s"]}],[{"start":{"row":11,"column":50},"end":{"row":11,"column":51},"action":"remove","lines":["ル"],"id":32},{"start":{"row":11,"column":49},"end":{"row":11,"column":50},"action":"remove","lines":["ト"]},{"start":{"row":11,"column":48},"end":{"row":11,"column":49},"action":"remove","lines":["イ"]},{"start":{"row":11,"column":47},"end":{"row":11,"column":48},"action":"remove","lines":["タ"]}],[{"start":{"row":11,"column":47},"end":{"row":11,"column":48},"action":"insert","lines":["s"],"id":33},{"start":{"row":11,"column":48},"end":{"row":11,"column":49},"action":"insert","lines":["u"]},{"start":{"row":11,"column":49},"end":{"row":11,"column":50},"action":"insert","lines":["t"]},{"start":{"row":11,"column":50},"end":{"row":11,"column":51},"action":"insert","lines":["e"]},{"start":{"row":11,"column":51},"end":{"row":11,"column":52},"action":"insert","lines":["-"]}],[{"start":{"row":11,"column":52},"end":{"row":11,"column":53},"action":"insert","lines":["t"],"id":34},{"start":{"row":11,"column":53},"end":{"row":11,"column":54},"action":"insert","lines":["a"]},{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"insert","lines":["s"]},{"start":{"row":11,"column":55},"end":{"row":11,"column":56},"action":"insert","lines":["u"]}],[{"start":{"row":11,"column":56},"end":{"row":11,"column":57},"action":"insert","lines":[" "],"id":35}],[{"start":{"row":11,"column":56},"end":{"row":11,"column":57},"action":"remove","lines":[" "],"id":36},{"start":{"row":11,"column":55},"end":{"row":11,"column":56},"action":"remove","lines":["u"]},{"start":{"row":11,"column":54},"end":{"row":11,"column":55},"action":"remove","lines":["s"]},{"start":{"row":11,"column":53},"end":{"row":11,"column":54},"action":"remove","lines":["a"]},{"start":{"row":11,"column":52},"end":{"row":11,"column":53},"action":"remove","lines":["t"]},{"start":{"row":11,"column":51},"end":{"row":11,"column":52},"action":"remove","lines":["-"]},{"start":{"row":11,"column":50},"end":{"row":11,"column":51},"action":"remove","lines":["e"]},{"start":{"row":11,"column":49},"end":{"row":11,"column":50},"action":"remove","lines":["t"]},{"start":{"row":11,"column":48},"end":{"row":11,"column":49},"action":"remove","lines":["u"]},{"start":{"row":11,"column":47},"end":{"row":11,"column":48},"action":"remove","lines":["s"]}],[{"start":{"row":11,"column":47},"end":{"row":11,"column":55},"action":"insert","lines":["ステータスカラム"],"id":37}],[{"start":{"row":12,"column":40},"end":{"row":12,"column":41},"action":"remove","lines":["e"],"id":38},{"start":{"row":12,"column":39},"end":{"row":12,"column":40},"action":"remove","lines":["l"]},{"start":{"row":12,"column":38},"end":{"row":12,"column":39},"action":"remove","lines":["t"]},{"start":{"row":12,"column":37},"end":{"row":12,"column":38},"action":"remove","lines":["i"]},{"start":{"row":12,"column":36},"end":{"row":12,"column":37},"action":"remove","lines":["t"]}],[{"start":{"row":12,"column":36},"end":{"row":12,"column":37},"action":"insert","lines":["s"],"id":39},{"start":{"row":12,"column":37},"end":{"row":12,"column":38},"action":"insert","lines":["t"]},{"start":{"row":12,"column":38},"end":{"row":12,"column":39},"action":"insert","lines":["a"]},{"start":{"row":12,"column":39},"end":{"row":12,"column":40},"action":"insert","lines":["t"]},{"start":{"row":12,"column":40},"end":{"row":12,"column":41},"action":"insert","lines":["u"]},{"start":{"row":12,"column":41},"end":{"row":12,"column":42},"action":"insert","lines":["s"]}],[{"start":{"row":12,"column":36},"end":{"row":12,"column":42},"action":"remove","lines":["status"],"id":40},{"start":{"row":12,"column":36},"end":{"row":12,"column":42},"action":"insert","lines":["status"]}],[{"start":{"row":12,"column":36},"end":{"row":12,"column":42},"action":"remove","lines":["status"],"id":41},{"start":{"row":12,"column":36},"end":{"row":12,"column":42},"action":"insert","lines":["status"]}]]},"ace":{"folds":[],"scrolltop":17.5,"scrollleft":72.5,"selection":{"start":{"row":11,"column":41},"end":{"row":11,"column":41},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":32,"mode":"ace/mode/php"}},"timestamp":1588052307174,"hash":"8d677bdc3f51f2ca62003c91fe442653badb0172"}