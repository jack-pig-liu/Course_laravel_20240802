<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Entity\User;

class UserAuthController extends Controller
{
    public function Login()
    {
        return view('auth.login');
    }

    public function Profile($id)
    {
        return 'my id :' . $id;
    }

    public function SignUp()
    {
        $binding = [
            'title' => '註冊',
            'sub_title' => '測試測試',
        ];
        return view( 'auth.signup' , $binding);

    }

    public function SignUpProcess()
    {
        $form_data = request()->all();
        // dd($form_data );
        $user = User::create($form_data);
        dd($user);
    }
    

}