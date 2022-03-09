<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function verification()
    {
        User::where('id', request('user_id'))->update(['status_id' => 2]);
        return redirect()->back();
    }
}
