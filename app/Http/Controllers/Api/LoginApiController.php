<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginApiController extends Controller
{
    public function login(Request $request){
        $credentials = $request->all(['email','password']);

        $token = auth('api')->attempt($credentials);
        
        if(!$token){
            return response()->json(["Voce nao é um usuario valido"], 401);
        }

        return response()->json([
            "token" => $token
        ]);
    }
}
