<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\category;
use App\order_item;
use Illuminate\Support\Facades\DB;
use App\message;
use Illuminate\Support\Facades\Session;

class homeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function getList(){

        $banchay= product::where('id_type',1)->paginate(8);
        $yeuthich= product::where('id_type',1)->paginate(8);
        $donggoi= product::where('id_type',8)->paginate(8);
        $cate= DB::select('select * from categories');
        $moi = DB::select ('select id, image, title, unit_price from products ORDER BY id DESC LIMIT 4');
        $giamgia = DB::select ('select id, image, title,promotion_price from products WHERE promotion_price !=0 LIMIT 4');

        $order= order_item::all();
        $full = order_item::orderBy('quantity', 'desc')->skip(0)->take(4)->get();
        $pro= product::all();
        // $arr=$this->getProduct($full,$pro);
      
        return view('page.homePage',compact('moi','yeuthich','donggoi','giamgia'));
        // if(session()->get('customer')!=null){
        //     $mess1=DB::select('select * from chatbox where id_user = 1 or id_user ='.session()->get('customer'));
        //     return view('page.homePage',compact('moi','yeuthich','donggoi','giamgia','arr','mess1'));
        // }
        // else{
        //     return view('page.homePage',compact('moi','yeuthich','donggoi','giamgia','arr'));
        // }
    }
    public function getProduct($o,$p){
        $arr=[];
        for ($j = 0; $j < count($o); $j++) {
            array_push($arr,$p[$o[$j]->product_id]);
        }
        return $arr;
    }
    public function chatbox(Request $request){
        $mess=$request->get('chatbox');
        echo $mess;
       
        $mes=new message();
        $mes->id_user=session()->get('customer');
        $mes->message=$mess;
        $mes->id_rep='';
        $mes->save();
        return redirect()->route('food.show');
    }

}
