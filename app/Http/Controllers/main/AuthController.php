<?php

namespace App\Http\Controllers\main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class AuthController extends Controller
{
    public function show_login()
    {
        // dd(Schema::getColumnListing('users'));
        return view('homepage.pages.gate.login');
    }

    public function show_register()
    {
        return view('homepage.pages.gate.register');
    }

    public function register(Request $request)
    {
        // dd($request->all());

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'password' => 'required|min:5',
        ]);

        if (User::where('email', '=', $request->email)->count() > 0) {
            $message = 'This email is already registered';
            return redirect()
                ->back()
                ->with(['message' => $message, 'type' => 'error']);
        }

        if (User::where('phone', '=', $request->phone)->count() > 0) {
            $message = 'This phone is already registered';
            return redirect()
                ->back()
                ->with(['message' => $message, 'type' => 'error']);
        }

        // $email_data = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        // ];

        // Mail::send('homepage.pages.mails.verifyemail', $email_data, function ($message) use ($email_data) {
        //     $message
        //         ->to($email_data['email'], $email_data['name'])
        //         ->subject('Welcome to Allrent')
        //         ->from('noreply@allrent.io', 'Allrent');
        // });

        $password = Hash::make($request->password);
        $uniq_id = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 20);

        $credentials = [
            'username' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $password,
            'uniq_id' => $uniq_id,
        ];

        $user = User::create($credentials);

        $message = 'Please confirm your email address to finish registration';
        return redirect()
            ->route('show_login')
            ->with(['message' => $message, 'type' => 'info']);
    }

    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $message = 'Password or Email is wrong';
            return redirect()
                ->back()
                ->with(['message' => $message, 'type' => 'error']);
        }
        $logging_user = User::where('email', $request->email)->first();

        if (!$logging_user) {
            $message = 'This email is not registered';
            return redirect()
                ->back()
                ->with(['message' => $message, 'type' => 'error']);
        } else {
<<<<<<< HEAD
            // if (!$logging_user->phone_verified_at) {
            //     $message = 'This email is not verified';
            //     return redirect()
            //         ->back()
            //         ->with(['message' => $message, 'type' => 'error']);
            // }
=======
            if (!$logging_user->email_verified_at) {
                $message = 'This email is not verified';
                return redirect()
                    ->back()
                    ->with(['message' => $message, 'type' => 'error']);
            }
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8

            if ($logging_user->is_banned == 1) {
                $message =
                    'You are banned from website, please contact with moderator';
                return redirect()
                    ->back()
                    ->with(['message' => $message, 'type' => 'banned']);
            }
        }

        if (
            Auth::attempt(
                [
                    'email' => $request->email,
                    'password' => $request->password,
                ],
                true
            )
        ) {
            $user = User::where('email', $request->email)->first();
            $username = $user->username;
            $message = 'Logged in as ' . $username . ' !';

            // return redirect()->route('mainpage');

            return redirect()
                ->route('mainpage')
                ->with(['message' => $message, 'type' => 'info']);
        } else {
            $message = 'Wrong password';
            return redirect()
                ->back()
                ->with(['message' => $message, 'type' => 'error']);
        }
    }

    public function verifyEmail($email)
    {
        $now = Carbon::now();

        User::where('email', $email)
            ->first()
            ->update([
                'email_verified_at' => $now,
            ]);

        return redirect()
            ->route('login')
            ->with(
                'message',
                $email . ' succesfully verified , you can login now'
            );
    }

    public function logout()
    {
        if (Auth::user()) {
            $username = Auth::user()->username;
            Auth::logout();

            return redirect()
                ->route('show_login')
                ->with(['message' => 'Logged out from '.$username , 'type' => 'info']);
        }else{
            return redirect()->back()->with(['message' => 'You are not logged in' , 'type' => 'warning']);
        }
    }
}
