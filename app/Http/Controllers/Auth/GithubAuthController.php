<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Auth;
use Laravel\Socialite\Facades\Socialite;


class GithubAuthController extends Controller
{
   /**
        * Redirect the user to the GitHub authentication page.
        *
        * @return Response
        */
       public function redirectToProvider()
       {
           return Socialite::driver('github')->redirect();
       }

       /**
        * Obtain the user information from GitHub.
        *
        * @return Response
        */
       public function handleProviderCallback()
       {
           try {
               $user = Socialite::driver('github')->user();
           } catch (Exception $e) {
               return redirect()->to('auth/github');
           }

           $authUser = $this->findOrCreateUser($user);

           Auth::login($authUser, true);

           return redirect()->to('/');
       }

       /**
        * Return user if exists; create and return if doesn't
        *
        * @param $githubUser
        * @return User
        */
       private function findOrCreateUser($githubUser)
       {
           if ($authUser = User::where('github_id', $githubUser->id)->first()) {
               return $authUser;
           }

           return User::create([
               'name' => $githubUser->name,
               'email' => $githubUser->email,
               'username' => $githubUser->nickname,
               'github_id' => $githubUser->id,
               'avatar' => $githubUser->avatar
           ]);
       }
}
