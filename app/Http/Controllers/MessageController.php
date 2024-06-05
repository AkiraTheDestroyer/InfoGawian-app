<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function admin()
    {
        return view('message.admin', [
            'title' => 'Message',
            'active' => null,
            'tabActive' => 'admin'
        ]);
    }

    public function company()
    {
        return view('message.company', [
            'title' => 'Message',
            'active' => null,
            'tabActive' => 'company'
        ]);
    }
}
