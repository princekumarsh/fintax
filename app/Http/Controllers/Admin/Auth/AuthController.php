<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function createlogin(Request $request){

        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->passes()){
            $email = $request->email;
            $password = $request->password;
            $credentials = array("email"=>$email,"password"=>$password);
            $authSuccess = Auth::attempt($credentials);

            if($authSuccess){
                if(Auth::user()->user_type=="1"){
                    return redirect()->route('admin.dashboard');
                }else{
                    return redirect()->back();
                }
            }else{
                Session::flash('flash_message',"Invalid Username or password");
                return redirect()->back();
            }
        }else{
            Session::flash('flash_message',"Invalid Username or password");
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
