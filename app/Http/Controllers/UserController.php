<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.pages.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newuser = $request->validate([
            'name'=> 'required|max:255',
            'email' => 'required',
            'password' =>'required|max:8'
        ]);

        User::create($newuser);
        return to_route('admin.user.index')->with('Success','Successfully Created User');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findorFail($id);

        return view('admin.pages.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findorFail($id);
        return view('admin.pages.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = $request->validate([
            'name'=> 'required|max:255',
            'email' => 'required',
            'password' =>'required|max:8'
        ]);

        $olduser = User::findorFail($id);
        $olduser->update($user);

        return to_route('admin.user.index')->with('Success','Successfully Updated User');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findorFail($id);
        $user->delete();

         return to_route('admin.user.index')->with('Success','Successfully Created User');
    }

}
