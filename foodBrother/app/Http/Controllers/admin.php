<?php

namespace App\Http\Controllers;

use App\order;
use Illuminate\Http\Request;
use App\order_item;
use App\product;
use App\category;
use App\userExport;
use Illuminate\Support\Facades\DB;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\message;
use Session;

class admin extends Controller
{
    public function getAdmin(){
        $order=DB::select('select p.title, p.unit_price, o.quantity, u.name from products as p,order_items as o , users as u,accounts as a where p.id =o.product_id and o.user_id=a.id and a.user_id=u.id');
        return view('admin/pageAdmin/admin',compact('order'));
    }
    public function getChartAdmin(){
        $order=DB::select('select * from order_items');

        $full = order_item::orderBy('quantity', 'desc')->skip(0)->take(4)->get();;
        $query = DB::table('order_items')
        ->join('products', 'order_items.product_id', '=', 'products.id')
        ->orderBy(DB::raw('COUNT(order_items.quantity)'),'ASC')
        ->groupBy('order_items.product_id')
        ->select('products.id','order_items.quantity','products.title')
        ->get();
        // echo var_dump($order);
        return view('admin/pageAdmin/chart',compact('order','full','query'));
    }
    public function getTableAdmin(){
        $product=product::all();
        $use=userExport::all();
        $type=category::all();
        return view('admin/pageAdmin/tableAdmin',compact('product','use','type'));
    }
    public function getaddProductAdmin(){
        return view('admin/pageAdmin/addProduct');
    }
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function getProduct($o,$p){
        $arr=[];
        for ($j = 0; $j < count($o); $j++) {
            array_push($arr,$p[$o[$j]->product_id]);
        }
        return $arr;
    }
    public function getChatAdmin(){
        //lay ra tat ca gia tri khi group by
        $ch=message::all()->groupBy('id_user')->toArray();
        $chat=DB::table('chatbox')
        ->select('chatbox.message','users.name','chatbox.id_user')
        ->join('users', 'users.id', '=', 'chatbox.id_user')
        ->where('id_user','<>',1)
        ->groupBy('chatbox.id_user')
        ->orderBy('chatbox.time','DESC')
        ->get();
        $mess=DB::select('select * from chatbox where id_user = 2 or id_rep =2');
        session()->put('id_user',2);
        return view('admin/pageAdmin/chat',compact('chat','ch','mess'));
    }
    public function disAdmin($id){
        $ch=message::all()->groupBy('id_user')->toArray();
        $mess=DB::select('select * from chatbox where id_rep = '.$id.' or id_user ='.$id);
        session()->put('id_user',$id);
        return view('admin/pageAdmin/chat',compact('ch','mess'));
    }
    public function addMessFirst(Request $request){
        $mess=$request->input('inpmessage');
        $id=session()->get('id_user');
        $mes=new message();
        $mes->id_user= 1;
        $mes->message=$mess;
        $mes->id_rep= $id;
        $mes->save();
        return redirect()->route('chatadmin');
    }
    public function addMessAdmin(Request $request,$id){
        $mess=$request->input('inpmessage');
        $mes=new message();
        $mes->id_user=1;
        $mes->message=$mess;
        $mes->id_rep=$id;
        $mes->save();
        return redirect()->route('chatadmin');
    }
}

?>
