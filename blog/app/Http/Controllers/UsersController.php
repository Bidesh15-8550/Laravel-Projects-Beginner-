<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function viewload()
    {
        $data= ['Bidesh','biswas',"locky",'bruce'];
        return view('users',['users'=>$data]);
    }
}
