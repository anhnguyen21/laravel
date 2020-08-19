<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\mailForget;
use Mail;
use App\userExport;
use DB;
use session;

class sendmail extends Controller
{   
    public function index(){
        return view("sendEmail");
    }
    public function sendEmail(Request $request){
        $email=$request->input('email');
        $number=rand(100,999);
        session()->put('number',$number);
       $details=[
           'title'=>'Mã lấy lại mật khẩu',
           'body'=>$number
       ];
       \Mail::to($email)->send(new mailForget($details));
       return redirect()->route('check');
   }
    public function getCheck(){
        return view("checkEmail");
    }
    public function check(Request $request){
        $number=session()->get('number');
        $num=$request->input('check');
        // echo $number;
        if($number==$num){
            return redirect()->route('food.show');
        }else {
            return redirect()->route('check');
        }
    }
}
