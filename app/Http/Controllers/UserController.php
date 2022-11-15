<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get()->all();
        return view('users.index', compact('users'));

    }

    public function create()
    {
        return view('users.create');
    }

    public function show(string $id)
    {
        if(!$user = User::find($id))
            return redirect()->route('users.index');

        return view('users.show', compact('user'));
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = md5($request->password);

        User::create($data);

        return redirect()->route('users.index');
    }

    public function edit(int $id)
    {
        if(!$user = User::find($id))
            return redirect()->route('users.index');

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, int $id)
    {
        $data = $request->all();

        if($request->password)
            $data['password'] = md5($request->password);
        
        $user = User::find($request->id);

        $user->update($data);

        return redirect()->route('users.index');
    }

    public function destroy(int $id)
    {
        if(!$user = User::find($id))
            return redirect()->route('users.index');

        $user->delete();

        return redirect()->route('users.index');
    }
}
