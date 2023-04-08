<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index()
    {
       $users = User::all();
       return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }


    public function store(Request $request)
    {
        $data=request()->validate([
            'name' => 'string',
            'email' => 'string',
            'password' => 'string',
           ]);

        User::create($data);
        return redirect()->route('main.index');
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(User $user)
    {
        $data=request()->validate([
            'name' => 'string',
            'email' => 'string',
            'password' => 'string',
           ]);

        $user->update($data);
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }

}
