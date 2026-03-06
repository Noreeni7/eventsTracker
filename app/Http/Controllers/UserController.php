<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Faker\Guesser\Name;

class UserController extends Controller
{

    public function checkUser($phone)
    {
        $user = User::where('phone_number', $phone)->first();

        if ($user) {
            return response()->json([
                'exists' => true,
                'user' => $user
            ]);
        } else {
            return response()->json([
                'exists' => false
            ]);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required | string',
            'email'=>'nullable | email',
            'phone_number'=> 'required | string | unique:users, phone_number'
        ]);

        $user = User::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email
        ]);

        return response()->json([
            'message' => 'User created successfully',
            'user' => $user
        ]);
    }

    public function index() {
        return response()->json(User::all());
    }
}
