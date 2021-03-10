<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class UserController extends Controller
{
    //
    function index()
    {
        return Http::get("https://reqres.in/api/users?page=1​");
    }
}
