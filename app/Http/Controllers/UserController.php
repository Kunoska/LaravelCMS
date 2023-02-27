<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $data = ["users" => $users];
        return view('dashboard.users.index')->with($data);
    }

    public function show($id)
    {
        $user = User::FindOrFail($id);
        $data = ['user' => $user];
        return view('dashboard.users.show')->with($data);
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required|max:20',
            'email' => 'email|unique:users,email',
        ]);

        if ($validator->fails()) {
            return redirect('products/create')
                ->withErrors($validator)
                ->withInput();
        }

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);

        return redirect(route('users.index'));
    }

    public function edit($id)
    {
        $user = User::FindOrFail($id);
        $data = ['user' => $user];
        return view('dashboard.users.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $user = User::FindOrFail($id);
        $user->fill($request->all())->save();
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = User::FindOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }


}
