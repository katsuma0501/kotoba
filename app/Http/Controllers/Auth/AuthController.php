<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Socialite;

class AuthController extends Controller
{
    
    protected $redirectPath = '/home';

    /**
     * ユーザーをTwitterの認証ページにリダイレクトする
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }
    /**
     * Twitterからユーザー情報を取得する
     *
     * @return Response
     */
    // public function handleProviderCallback()
    // {
    //     $user = Socialite::driver('twitter')->user();
    //     $response =
    //         "id: ".$user->id
    //         ."<br/>Nickname: ".$user->nickname
    //         ."<br/>name: ".$user->name
    //         ."<br/>Email: ".$user->email
    //         ."<br/>Avater: <img src='".$user->avatar."'>"
    //         . "<br/><br/>";
    //     // OAuth Two Providers
    //     $response .= print_r($user, true);
    //     return $response;
    // }
    public function handleProviderCallback(){
        try {
            $user = Socialite::driver('twitter')->user();
        } catch (Exception $e) {
            return redirect('auth/twitter');
        }
        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser, true);
        return redirect()->route('home');
    }

    private function findOrCreateUser($twitterUser){
        $authUser = User::where('twitter_id', $twitterUser->id)->first();
        if ($authUser){
            return $authUser;
        }

        return User::create([
            'name' => $twitterUser->name,
            'nickname' => $twitterUser->nickname,
            'twitter_id' => $twitterUser->id,
            'avatar' => $twitterUser->avatar_original
        ]);
    }
}