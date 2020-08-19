<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\message;
use DB;
use App\order_item;
use App\product;
use Illuminate\Support\Facades\Session;

class chatController extends Controller
{
    public function getChatAdmin(){
        //lay ra tat ca gia tri khi group by
        // $mess=message::all();
        // return $mess;
        // if(session()->get('customer')!=null){
            $mess1=DB::select('select * from chatbox where id_user = 1 or id_user ='.session()->get('customer'));
           
            return $mess1;
        // }
    }
    public function chatbox(Request $request){
        $id=session()->get('customer');
        $mess=$request->get('chatbox');
        // echo $mess;
        $mes=new message();
        $mes->id_user=2;
        $mes->message=$mess;
        $mes->id_rep='';
        $mes->save();
        return $mess;
    }
    public function sanPhamBanChay(){
       
        $product=DB::table('order_items')
        ->join('products', 'products.id', '=', 'order_items.product_id')
        ->select('products.*')
        ->orderBy('order_items.quantity','DESC')
        ->skip(0)
        ->take(4)
        ->get();
        $full = order_item::orderBy('quantity', 'desc')->skip(0)->take(4)->get();
        $pro= product::all();
        $arr=$this->getProduct($full,$pro);
        return $product;
    }
    public function newPro(){
        $moi = DB::select ('select id, image, title, unit_price from products ORDER BY id DESC LIMIT 4');
        return $moi;
    }
    public function getProduct($o,$p){
        $arr=[];
        for ($j = 0; $j < count($o); $j++) {
            array_push($arr,$p[$o[$j]->product_id]);
        }
        return $arr;
    }
    public function addCard($id){
        if(!(DB::select('select product_id from order_items where product_id='.$id.' and user_id =2'))==null){
            $quan=order_item::where('product_id',$id)->first()->quantity;
            DB::table('order_items')
              ->where('product_id', $id)
              ->update(['quantity' =>$quan+1]);

        }else{
            $order= new order_item();
            $order->product_id=$id;

            $order->user_id=2;
            $order->quantity=1;
            $order->save();
        }
        // return redirect()->route('food.show');
    }
    public function getCart(){
        $cart=DB::select('select o.id ,p.title, p.unit_price, p.description, p.image, o.quantity, u.name from products as p , order_items as o , users as u where p.id =o.product_id and o.user_id=u.id and o.user_id ='.Session::get('customer'));
        return $cart;
    }
    public function getElavate($id){
        $evaluate=DB::table('evaluates')
        ->join('users','users.id','=','evaluates.id_user')
        ->select('users.name','evaluates.*')
        ->where('evaluates.id_pro',$id)
        ->get();
        return $evaluate;
    }
}
