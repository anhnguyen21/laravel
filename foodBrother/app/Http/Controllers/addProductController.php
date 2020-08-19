<?php

namespace App\Http\Controllers;
use App\order_item;
use App\customer;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class addProductController extends Controller
{
    public function postAdd(Request $request,$id){
        if(!(DB::select('select product_id from order_items where product_id='.$id.' and user_id ='.session()->get('customer')))==null){
            $quan=order_item::where('product_id',$id)->first()->quantity;
            DB::table('order_items')
              ->where('product_id', $id)
              ->update(['quantity' =>$quan+1]);

        }else{
            $order= new order_item();
            $order->product_id=$id;

            $order->user_id=session()->get('customer');
            $order->quantity=1;
            $order->save();
        }
        return redirect()->route('food.show');
    }
}
