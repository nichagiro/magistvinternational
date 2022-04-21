<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public static function DownLoad($url)
    {
       return response()->download($url);
    }
}
