<?php

namespace App\GraphQL\Mutations;
use Illuminate\Support\Facades\Auth;


use App\Models\Movie;

class UsersMutations{

     /**
     * Handle the login mutation.
     *
     * @param  null  $_
     * @param  array  $args
     * @return string
     * @throws ValidationException
     */
    public function login($root, array $args){
        if(!Auth::attempt(['email' => $args['email'], 'password' => $args['password']])){
            throw new \Exception('Credecincials invalidos');
        }
        $user = Auth::user();
        $token = $user->createToken('Api Tken')->plainTextToken;
        return $token;
    }   
    public function logout(){}

    
}