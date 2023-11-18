<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\API\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Services\UserService;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends BaseController
{
    public $userService;
    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function Register(RegisterRequest $userValidation){

        $user=$this->userService->createUser($userValidation->all());
        $message['user']=$user;
        $message['token']=$user->createToken('myApp')->plainTextToken;
        return $this->sendResponse($message);

    }

    public function login(LoginRequest $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('token-name')->plainTextToken;

            return response()->json(['token' => $token], 200);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);

    }

}
