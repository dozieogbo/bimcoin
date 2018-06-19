<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Subscriber;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['dashboard', 'logout', 'donate']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {
        $user = Auth::user()->toArray();

        return view('dashboard')->with($user);
    }

    public function subscribe(Request $request){
        $email = $request->input('email');

        if(!is_null($email)){
            $subscriber = Subscriber::whereEmail($email)->first();

            if(!$subscriber){
                Subscriber::create([
                    'email' => $email
                ]);

                return back()->with(['subscribed' => true]);
            }else{
                return back()->withErrors(['This email has already been subscribed. Please, try another.']);
            }
        }

        return back()->withErrors(['An error occurred while trying to subscribe. Please try again.']);
    }

    public function donate(){
        return view('donate');
    }

    public function howTo(){
        return view('howto');
    }

    public function terms(){
        return view('terms');
    }

    public function verify(){
        $email = request()->query('email');
        $token = request()->query('token');

        $user = User::whereEmail($email)->first();

        if($user){
            $emailToken = $user->emailToken;

            if($emailToken->token == $token && Carbon::now()->lessThanOrEqualTo($emailToken->expires_at)){
                $user->is_verified = true;
                $user->save();

                Auth::logout();

                return redirect()->route('login')->with(['verify_success' => true]);
            }
        }
        return redirect()->route('login')->withErrors(['An error occurred while verifying user. Please, try again.']);
    }

    public function profile(ProfileRequest $request){
        $data =  $request->validated();

        $user = Auth::user();

        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->middle_name = $data['middle_name'];
        $user->age = $data['age'];
        $user->address = $data['address'];
        $user->country = $data['country'];
        $user->profession = $data['profession'];
        $user->religion = $data['religion'];
        $user->email = $data['email'];

        $user->save();

        return back()->with([
            'success' => true
        ]);
    }

    public function report(){
        return view('refreport');
    }

    public function userReport(){
        return view('userreport');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
