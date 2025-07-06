<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view("auth.login");
    }

    // Facebook
    public function redirectToFacebook()
    {
        //return Socialite::driver("facebook")->redirect();
    }

    public function handleFacebookCallback()
    {
        /* return $this->handleSocialCallback(
            Socialite::driver("facebook")->stateless()->user(),
            "facebook"
        ); */
        return null;
    }

    // Discord
    public function redirectToDiscord()
    {
        return Socialite::driver("discord")->redirect();
    }

    public function handleDiscordCallback()
    {
        /* return $this->handleSocialCallback(
            Socialite::driver("discord")->stateless()->user(),
            "discord"
        ); */

        return null;
    }

    private function handleSocialCallback($socialUser, $provider)
    {
        return null;
    }

    private function getSocialUserName($socialUser, $provider)
    {
        // not needed, because the players will enter their own nickname
    }

    private function getSocialUserEmail($socialUser, $provider)
    {
        // email needed to register the user.
        $email = $socialUser->getEmail();

        /* if (!$email && $provider === "apple") {
            $email = $socialUser->getId() . "@apple.generated";
        } elseif (!$email) {
            $email = $socialUser->getId() . "@" . $provider . ".generated";
        }

        return $email; */
    }
}
