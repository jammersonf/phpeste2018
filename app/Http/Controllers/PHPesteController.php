<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PHPesteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($ano = '', $local = '')
    {
    	$users = \App\User::find(1);
        dd($users);

    	return view('phpeste', compact('users'));
    }

    public function user($id = '')
    {
    	$users = \App\User::orderBy('name')->paginate(3);
    	if ($id) {
    		$users = \App\User::find($id);
    	}

    	return view('users', compact('users', 'id'));
    }
}
