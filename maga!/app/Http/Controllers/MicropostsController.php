<?php

namespace App\Http\Controllers;

use Request;
use View;

use App\Micropost;

class MicropostsController extends Controller
{
    public function index()
    {
	$query = Request::get('q');
    $data = [];
    if (\Auth::check()) {
	if ($query) {
		$data = [];
		$microposts = Micropost::where('title', 'LIKE', "%$query%")->get();
		
		    $data = [
		        'microposts' => $microposts,
		    ];
	}else{
		$data = [];
		$user = \Auth::user();
            $microposts = $user->feed_microposts()->orderBy('created_at', 'desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'microposts' => $microposts,
            ];
	}
    }

	return View::make('welcome', $data);
       
        /*
        if (\Auth::check()) {
            
        }
        
        return view('welcome', $data);*/
    }
    
    public function create()
    {
        $micropost = new Micropost;
        
        return view('microposts.create', [
            'micropost' => $micropost
        ]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:191',
            'story' => 'required|max:300',
            'iinee' => 'required|max:300',
        ]);
        
        $micropost = new Micropost;
        $micropost->title = $request->title;
        $micropost->story = $request->story;
        $micropost->iinee = $request->iinee;
        $micropost->user_id = \Auth::id();
        $micropost->save();

        return redirect('/');
    }
    
    public function show($id)
    {
        $micropost = Micropost::find($id);
        
        return view('microposts.show', [
            'micropost' => $micropost,
        ]);
    }
    
    public function edit($id)
    {
        $micropost = Micropost::find($id);
        
        return view('microposts.edit', [
            'micropost' => $micropost,
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $micropost = Micropost::find($id);
        $micropost->title = $request->title;
        $micropost->story = $request->story;
        $micropost->iinee = $request->iinee;
        $micropost->user_id = \Auth::id();
        $micropost->save();
        
        return redirect('/');
    }
    
    public function destroy($id)
    {
        $micropost = \App\Micropost::find($id);

        if (\Auth::id() === $micropost->user_id) {
            $micropost->delete();
        }

        return redirect('/');
    }
}
