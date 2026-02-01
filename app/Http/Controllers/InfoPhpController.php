<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoPhpController extends Controller
{
    //

    public function index()
    {
        echo phpinfo();
        
    }
}
