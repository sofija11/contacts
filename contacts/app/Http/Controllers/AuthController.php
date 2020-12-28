<?php

namespace App\Http\Controllers;



use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    private $model;

    function __construct(){
        $this->model = new User(); 
    }

    public function login(LoginRequest $request){

        if($request->has('sendL')){
            $username = $_POST['usernameL'];
            $password = $_POST['passwordL'];

            $user = $this->model->loginUser($username,$password);
            
            if($user){
                
                if($user->IdRole==1){
                    $request->session()->put("user", $user);
                    $request->session()->put("admin", $user);
                    return redirect()->route('admin');
                }
                else{
                    $request->session()->put("user", $user);
                    return redirect()->route('user');
                }

            } else{
                return redirect()->back()->with('message','Wrong password');
            }
        }

    }
    public function logoutUser(Request $request){
        if($request->session()->has('user')||$request->session()->has('admin')){
          
            $request->session()->forget('user');
            $request->session()->forget('admin');
            $request->session()->flush();
            return redirect('/');
            

    }
}
}
