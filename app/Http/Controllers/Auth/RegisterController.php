<?php

namespace App\Http\Controllers\Auth;

use App\EmailToken;
use App\Helper;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, Helper::getUserValidationRules());
    }

    public function showRegistrationForm($code = null)
    {
        return view('auth.register', compact('code'));
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $data['password'] = Hash::make($data['password']);

        $sponsor = null;

        if (!empty($data['ref'])) {
            $sponsor = User::where('ref_code', $data['ref'])->first();
        }

        $user = new User($data);
        $user['referrer_id'] = !is_null($sponsor) ? $sponsor->id : null;

        $token = new EmailToken([
            'token' => str_random(8),
            'expires_at' => Carbon::today()->addHour(24)
        ]);

        DB::transaction(function () use ($user, $token, $sponsor){

            $user->save();
            $token->id = $user->id;
            $token->save();
        });

        $user->sendEmailVerification($token->token);

        return $user;
    }
}
