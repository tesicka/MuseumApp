<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthentificationController extends Controller
{
    public function register(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'name'=>'required|string|max:50',
            'email'=>'required|string|email|unique:users',
            'password'=>'required|string|min:6'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)

        ]);

        $token = $user->createToken('authentication_token')->plainTextToken;

        return response()->json([
            'data' => $user,
             'access_token' => $token,
            'token_type' => 'Bearer'

            ]);

    }


    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()
                ->json(['message' => 'Unauthorized'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('authentication_token')->plainTextToken;

        return response()->json([
            'message' => 'Logging successfull',
             'access_token' => $token,
              'token_type' => 'Bearer',
            ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json("Goodbye!");
    }
}
