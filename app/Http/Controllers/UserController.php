<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

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
}
