<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SearchController extends Controller
{
    public function getSearch(){
	$query = Request::get('q');

	if ($query) {
		$microposts = Micropost::where('title', 'LIKE', "%$query%")->get();
	}else{
		$microposts = Micropost::all();
	}

	return View::make('microposts.index')->with('microposts', $microposts);
}
}

