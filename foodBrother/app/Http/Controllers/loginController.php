<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\login;
use App\Http\Requests\loginForm;
use App\customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\DB;
class loginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */

    public function getLogin(){
        return view("loginForm");
    }
    public function login(Request $Request){
        // $type_pro=customer::all();
        $password=$Request->input('Password');
        $username=$Request->input('Username');


        if(Auth::attempt(['username' => $username, 'password' => $password])){
            if (auth()->user()->role == 1) {
                return redirect()->route('admin');
            }else{

                echo var_dump(DB::table('accounts')->where('username', $username)->first()->user_id);
                session()->put('customer',DB::table('accounts')->where('username', $username)->first()->user_id);
                return redirect()->route('food.show',['name'=>Auth::user()]);
            }

        }else{
            return redirect()->route('login.show',['errors'=>'Login fail']);
         }
    }
    public function getRegist(){
        return view("components/regist");
    }
    public function logout(){
        Auth::logout();
        session()->forget('customer');
        return redirect()->back('trangchu');
    }
    public function regist(Request $Request){
        $password=$Request->input('pas');
        $name=$Request->input('name');
        $username=$Request->input('username');
        $email=$Request->input('email');
        $phone=$Request->input('phone');
        $adress=$Request->input('diachi');
        $gender=$Request->input('gender');
        $year=$Request->input('nam');

        DB::table('users')->insert(
            [
                'name'=> $name,
                'gender'=>$gender,
                'email'=> $email,
                'city'=> $adress,
                'phoneNumber'=> $phone,
                'year_of_birth'=>$year,

            ]);
        $user=DB::table('users')->where('name',$name)->first();
        DB::table('accounts')->insert(
            [
                'user_id'=>$user->id,
                'username'=> $username,
                'password'=>Hash::make($password),
                'role'=> 1
            ]);
        return redirect()->route('login.show')->with(['flash_level' => 'success','flash_message' =>'Đăng kí thành công']);
    }
}
