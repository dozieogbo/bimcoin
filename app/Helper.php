<?php
/**
 * Created by PhpStorm.
 * User: Dozie
 * Date: 6/2/2018
 * Time: 4:26 PM
 */

namespace App;


use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class Helper
{
    public static function getUserValidationRules(){
        $rules = [
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'religion' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'age' => 'required|numeric|max:255',
        ];

        if(!Auth::check()){
            $rules['password'] = 'required|string|min:6';
            $rules['email'] = 'required|string|email|max:255|unique:users,email';
            $rules['address'] = 'required|string|unique:users,address';
            $rules['terms'] = 'accepted';
            $rules['how_you_knew'] = 'required|string|max:255';
        }else{
            $rules['email'] = [
                'required', 'string', 'email', 'max:255',
                Rule::unique('users', 'email')->ignore(Auth::id())
            ];
            $rules['address'] = [
                'required', 'string',
                Rule::unique('users', 'address')->ignore(Auth::id())
            ];
        }

        return $rules;
    }
}