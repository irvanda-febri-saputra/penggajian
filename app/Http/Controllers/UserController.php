<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Alert;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all(); //select * from users
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Alert::success('Success', 'User Created Successfully');
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Alert::success('Success', 'User Updated Successfully');
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete($user->id);
        Alert::success('Success', 'User Deleted Successfully');
        return redirect()->route('users.index');
    }

   
}
