{"filter":false,"title":"edit.blade.php","tooltip":"/tasklist/resources/views/tasks/edit.blade.php","undoManager":{"mark":13,"position":13,"stack":[[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":17},{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":4,"column":0},"end":{"row":19,"column":10},"action":"insert","lines":["<h1>id: {{ $message->id }} のメッセージ編集ページ</h1>","","    <div class=\"row\">","        <div class=\"col-6\">","            {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","        ","                <div class=\"form-group\">","                    {!! Form::label('content', 'メッセージ:') !!}","                    {!! Form::text('content', null, ['class' => 'form-control']) !!}","                </div>","        ","                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}","        ","            {!! Form::close() !!}","        </div>","    </div>"],"id":18}],[{"start":{"row":4,"column":32},"end":{"row":4,"column":33},"action":"remove","lines":["ジ"],"id":19},{"start":{"row":4,"column":31},"end":{"row":4,"column":32},"action":"remove","lines":["ー"]},{"start":{"row":4,"column":30},"end":{"row":4,"column":31},"action":"remove","lines":["セ"]},{"start":{"row":4,"column":29},"end":{"row":4,"column":30},"action":"remove","lines":["ッ"]},{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"remove","lines":["メ"]}],[{"start":{"row":4,"column":28},"end":{"row":4,"column":31},"action":"insert","lines":["タスク"],"id":20}],[{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"remove","lines":["e"],"id":21},{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"remove","lines":["g"]},{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":["a"]},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"remove","lines":["s"]},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"remove","lines":["s"]},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"remove","lines":["e"]},{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"remove","lines":["m"]}],[{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"insert","lines":["t"],"id":22},{"start":{"row":4,"column":13},"end":{"row":4,"column":14},"action":"insert","lines":["a"]},{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"insert","lines":["s"]},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["k"]}],[{"start":{"row":8,"column":35},"end":{"row":8,"column":36},"action":"remove","lines":["e"],"id":23},{"start":{"row":8,"column":34},"end":{"row":8,"column":35},"action":"remove","lines":["g"]},{"start":{"row":8,"column":33},"end":{"row":8,"column":34},"action":"remove","lines":["a"]},{"start":{"row":8,"column":32},"end":{"row":8,"column":33},"action":"remove","lines":["s"]},{"start":{"row":8,"column":31},"end":{"row":8,"column":32},"action":"remove","lines":["s"]},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"remove","lines":["e"]},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"remove","lines":["m"]}],[{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"insert","lines":["t"],"id":24},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"insert","lines":["a"]},{"start":{"row":8,"column":31},"end":{"row":8,"column":32},"action":"insert","lines":["s"]},{"start":{"row":8,"column":32},"end":{"row":8,"column":33},"action":"insert","lines":["k"]}],[{"start":{"row":8,"column":55},"end":{"row":8,"column":56},"action":"remove","lines":["e"],"id":25},{"start":{"row":8,"column":54},"end":{"row":8,"column":55},"action":"remove","lines":["g"]},{"start":{"row":8,"column":53},"end":{"row":8,"column":54},"action":"remove","lines":["a"]},{"start":{"row":8,"column":52},"end":{"row":8,"column":53},"action":"remove","lines":["s"]},{"start":{"row":8,"column":51},"end":{"row":8,"column":52},"action":"remove","lines":["s"]},{"start":{"row":8,"column":50},"end":{"row":8,"column":51},"action":"remove","lines":["e"]},{"start":{"row":8,"column":49},"end":{"row":8,"column":50},"action":"remove","lines":["m"]}],[{"start":{"row":8,"column":49},"end":{"row":8,"column":50},"action":"insert","lines":["t"],"id":26},{"start":{"row":8,"column":50},"end":{"row":8,"column":51},"action":"insert","lines":["a"]},{"start":{"row":8,"column":51},"end":{"row":8,"column":52},"action":"insert","lines":["s"]},{"start":{"row":8,"column":52},"end":{"row":8,"column":53},"action":"insert","lines":["k"]}],[{"start":{"row":8,"column":71},"end":{"row":8,"column":72},"action":"remove","lines":["e"],"id":27},{"start":{"row":8,"column":70},"end":{"row":8,"column":71},"action":"remove","lines":["g"]},{"start":{"row":8,"column":69},"end":{"row":8,"column":70},"action":"remove","lines":["a"]},{"start":{"row":8,"column":68},"end":{"row":8,"column":69},"action":"remove","lines":["s"]},{"start":{"row":8,"column":67},"end":{"row":8,"column":68},"action":"remove","lines":["s"]},{"start":{"row":8,"column":66},"end":{"row":8,"column":67},"action":"remove","lines":["e"]},{"start":{"row":8,"column":65},"end":{"row":8,"column":66},"action":"remove","lines":["m"]}],[{"start":{"row":8,"column":65},"end":{"row":8,"column":66},"action":"insert","lines":["t"],"id":28},{"start":{"row":8,"column":66},"end":{"row":8,"column":67},"action":"insert","lines":["a"]},{"start":{"row":8,"column":67},"end":{"row":8,"column":68},"action":"insert","lines":["s"]},{"start":{"row":8,"column":68},"end":{"row":8,"column":69},"action":"insert","lines":["k"]}],[{"start":{"row":11,"column":52},"end":{"row":11,"column":53},"action":"remove","lines":["ジ"],"id":29},{"start":{"row":11,"column":51},"end":{"row":11,"column":52},"action":"remove","lines":["ー"]},{"start":{"row":11,"column":50},"end":{"row":11,"column":51},"action":"remove","lines":["セ"]},{"start":{"row":11,"column":49},"end":{"row":11,"column":50},"action":"remove","lines":["ッ"]},{"start":{"row":11,"column":48},"end":{"row":11,"column":49},"action":"remove","lines":["メ"]}],[{"start":{"row":11,"column":48},"end":{"row":11,"column":51},"action":"insert","lines":["タスク"],"id":30}]]},"ace":{"folds":[],"scrolltop":12,"scrollleft":56.78125,"selection":{"start":{"row":14,"column":8},"end":{"row":14,"column":8},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1587713295298,"hash":"626ce6e1dcf579818841c1858128f42ca292adfe"}