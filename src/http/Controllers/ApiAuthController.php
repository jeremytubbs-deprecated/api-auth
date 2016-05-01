<?php

namespace Jeremytubbs\ApiAuth\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiAuthController extends Controller
{
    public function postLogin(Request $request)
    {
        return $this->login($request);
    }

    public function login(Request $request)
    {
        //
    }

    public function postRegister(Request $request)
    {
        return $this->register($request);
    }

    public function register(Request $request)
    {
        //
    }
}
