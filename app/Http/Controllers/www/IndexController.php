<?php

namespace App\Http\Controllers\www;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class IndexController extends Controller
{
    public function v1()
    {
        return view('index.v1');
    }
}
