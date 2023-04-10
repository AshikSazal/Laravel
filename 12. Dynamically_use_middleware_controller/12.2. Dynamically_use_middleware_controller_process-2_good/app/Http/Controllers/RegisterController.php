<?php

namespace App\Models;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Exception;

class RegisterController extends Controller
{
    public function register(Request $req, $modelName)
    {
        $model = "App\\Models\\" . ucfirst($modelName);
        // $data = $request->all();
        // $model::create($data);
        try {
            $user = $model::create([
                'name' => $req->input('name'),
                'email' => $req->input('email'),
                'password' => Hash::make($req->input('password')),
            ]);
            $token = $user->createToken('user_token')->plainTextToken;
            return response(['model'=>$model,'user' => $user, 'token' => $token], 200);
        } catch (Exception $exp) {
            return response()->json([
                'error' => $exp->getMessage(),
                'message' => 'Something went wrong in AuthController.register',
            ]);
        }
    }
}
