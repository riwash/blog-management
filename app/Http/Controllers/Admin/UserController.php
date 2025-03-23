<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(50);

        return view('admin.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        $userTypes = User::userTypes();
        return  view('admin.users.edit', compact('user', 'userTypes'));
    }

    public function update(User $user, UserRequest $request)
    {
        $user->update($request->validated());
        return redirect(route('users.index'))->with('success', 'User Update Successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('users.index'))->with('success', 'User Deleted Successfully');
    }
}
