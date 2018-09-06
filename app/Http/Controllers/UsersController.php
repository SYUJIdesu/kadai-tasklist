<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
      public function index($id)
    {
        $user = User::find($id);
        $tasks = $user->tasks()->paginate(10);

        $data = [
            'user' => $user,
            'tasks' => $tasks,
        ];

        $data += $this->counts($user);

        return view('users.index', $data);
    }
    
    
    public function show($id)
    {
        $user = User::find($id);
        $tasks = $user->tasks()->paginate(1);

        $data = [
            'user' => $user,
            'tasks' => $tasks,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
    }
    
    
}    