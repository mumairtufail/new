<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('home');
    }

    //TO view user module 
    public function ViewUsers()
    {
         $users = User::all();
         return view('view-users', compact('users'));
    }

    //To view create user
    public function ViewCreateUser(){

        return view('view-create-user');
    }

    //To create a user
    public function CreateUser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'is_admin' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'signature' => 'nullable|string',
        ]);
    
        try {
            $user = new User();
            $user->name = $validated['name'];
            $user->email = $validated['email'];
            $user->password = Hash::make($validated['password']);
            $user->is_admin = $validated['is_admin'];
            $user->signature = $validated['signature'] ?? null;
    
            if ($request->hasFile('image')) {
                $user->image = $request->file('image')->store('profile_images', 'public');
            }
    
            $user->save();
    
            return redirect()->route('view-users')->with('success', 'User created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again.')->withInput();
        }
    }
    
    
    
    

}
