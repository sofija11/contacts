<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;


class User
{

    public function loginUser($username,$password){
        return DB::table('user')
        ->where([
            ['username', '=', $username],
            ['password', '=', md5($password)],
        ])->first();
    }

}