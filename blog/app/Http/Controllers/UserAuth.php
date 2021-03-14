<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function userlogin(Request $req)
    {
        $data= $req->input();
        $req->session()->put('user',$data['user']);
        //echo session('user');


    }
}
