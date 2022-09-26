<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $message = 'メッセージ';
        return view('test', compact('message'));
    }
}
