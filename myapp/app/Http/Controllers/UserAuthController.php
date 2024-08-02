<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserAuthController extends Controller
{
    public function Login()
    {
        return 1235456787868567;
    }

    public function Profile($id)
    {
        return 'my id :' . $id;
    }

    public function SignUp()
    {
        $binding = [
            'title' => '註冊',
        ];
        return view( 'auth.signup' , $binding);

    }
    

}