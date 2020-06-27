<?php
namespace App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;

class UserController extends controller
{
    public function postSignUp(Request $request)
    {
        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user ->email = $email;
        $user -> first_name = $first_name;
        $user -> passwordd = $password;

        $user-> save();

        return redirect()->back();
    }
    public function postSignIn(Request $request)
    {

    }
}