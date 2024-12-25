<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(request $req)
    {
        return "blog index";
    }
}
