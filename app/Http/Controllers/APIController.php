<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SocialAuth;
use Hash;
use Auth;
use Mail;
use Redirect;
use App\User;
use App\Http\Requests;

class APIController extends Controller
{
    public function ghlogin()
    {
        return SocialAuth::authorize('github');
    }
    public function ghcallback()
    {
        try {
        SocialAuth::login('github',function($user, $details) {
            $user->name = $details->full_name;
            $user->email= $details->email;
            $emailtosend = $details->email;
            $user->avatar = $details->avatar;
            $user->API = "github";
            $user->role = "user";
            $user->password=Hash::make('github123');
            
            Mail::send('mailconf',['email'=> $emailtosend], function($message) use ($emailtosend) 
            {
                $message->from('mohanrajan1996@gmail.com','Mohan Rajan');
                $message->to($emailtosend);
                $message->subject('Confirmation Email from Github API');
            });
            
            $user->save();
        });
        } catch (ApplicationRejectedException $e) {
            // User rejected application
        } catch (InvalidAuthorizationCodeException $e) {
            // Authorization was attempted with invalid
            // code,likely forgery attempt
        }
        // Current user is now available via Auth facade
        $user = Auth::user();

        return Redirect::intended();
    }
    public function fblogin()
    {
        return SocialAuth::authorize('facebook');
    }
    public function fbcallback()
    {
        try {
        SocialAuth::login('facebook',function($user, $details) {
            $user->name = $details->full_name;
            $user->email= $details->email;
            $user->avatar = $details->avatar;
            $user->API = "facebook";
            $user->role = "user";
            $user->password = Hash::make('facebook123');
            $user->save();
        });
        } catch (ApplicationRejectedException $e) {
            // User rejected application
        } catch (InvalidAuthorizationCodeException $e) {
            // Authorization was attempted with invalid
            // code,likely forgery attempt
        }
        // Current user is now available via Auth facade
        $user = Auth::user();

        return Redirect::intended();
    }

    public function gllogin()
    {
        return SocialAuth::authorize('google');
    }
    public function glcallback()
    {
        try {
        SocialAuth::login('google',function($user, $details) {
            $user->name = $details->full_name;
            $user->email= $details->email;
            $user->avatar = $details->avatar;
            $user->API = "google";
            $user->role = "user";
            $user->password = Hash::make('google123');
            $user->save();
        });
        } catch (ApplicationRejectedException $e) {
            // User rejected application
        } catch (InvalidAuthorizationCodeException $e) {
            // Authorization was attempted with invalid
            // code,likely forgery attempt
        }
        // Current user is now available via Auth facade
        $user = Auth::user();

        return Redirect::intended();
    }
    public function lilogin()
    {
        return SocialAuth::authorize('linkedin');
    }
    public function licallback()
    {
        try {
        SocialAuth::login('linkedin',function($user, $details) {
            $user->name = $details->full_name;
            $user->email= $details->email;
            $user->avatar = $details->avatar;
            $user->API = "linkedin";
            $user->role = "user";
            $user->password = Hash::make('linkedin123');
            $user->save();
        });
        } catch (ApplicationRejectedException $e) {
            // User rejected application
        } catch (InvalidAuthorizationCodeException $e) {
            // Authorization was attempted with invalid
            // code,likely forgery attempt
        }
        // Current user is now available via Auth facade
        $user = Auth::user();

        return Redirect::intended();
    }
    public function inlogin()
    {
        return SocialAuth::authorize('instagram');
    }
    public function incallback()
    {
        try {
        SocialAuth::login('instagram',function($user, $details) {
            $user->name = $details->full_name;
            $user->email= $details->email;
            $user->avatar = $details->avatar;
            $user->API = "instagram";
            $user->role = "user";
            $user->password = Hash::make('instagram123');
            dd($details);
            //$user->save();
        });
        } catch (ApplicationRejectedException $e) {
            // User rejected application
        } catch (InvalidAuthorizationCodeException $e) {
            // Authorization was attempted with invalid
            // code,likely forgery attempt
        }
        // Current user is now available via Auth facade
        //$user = Auth::user();

        //return Redirect::intended();
    }
}
