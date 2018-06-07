<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class UsersController extends Controller
{
    //
    public function create()
    {
    	# code...
    	return view('users.create');
    }

    public function update()
    {
    	# code...
    	$user = User::first();
    	$user->name = 'ayllyang';
    	$user->save();

    }

    public function test()
    {
    	# code...
    	var_dump(User::all());
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function store($value='')
    {
    	# code...
    }
}
