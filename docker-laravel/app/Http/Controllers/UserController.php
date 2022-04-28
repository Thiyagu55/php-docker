<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Store a new flight in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        User::all();
        DB::query("select * from test;");
//        $user_update = new User;
//        $user_update->name = 'john';
//        $user_update->email ='assss@d.com';
//        $user_update->password ='as@d.com';
//
//        $user_update->save();
//
//        $user = User::find(1);

    }
}
