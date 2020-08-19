<?php

namespace App\Http\Controllers;
use App\product;
use App\order;
use App\order_item;
use App\evaluate;
use App\category;
use Illuminate\Http\Request;
use App\Http\Requests\editProduct;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function getEdit($id){
        $pro=product::find($id);
        return view("editProduct");
    }
    public function posEdit($id,editProduct $edit){
        $order=order::find($id);
        $pro=product::find($order->id_pro);
        $file_name = $edit->file('image')->getClientOriginalName();
        $pro->name=$edit->input('name');
        $pro->description=$edit->input('description');
        $pro->unit_price=$edit->input('price');
        $pro->image='public/img_food/'.$file_name;
        $edit->file('image')->move('public/img_food/',$file_name);
        echo
        $pro->save();
        return redirect()->route('cart.show')->with(['flash_level' => 'success','flash_message' =>'Thêm sản phẩm thành công']);
    }
    public function getDetail(Request $req,$id){
        $sanpham=product::where('id',$id)->first();
        $moi = DB::select ('select id, image, title, unit_price from products ORDER BY id DESC LIMIT 4');
        $evaluate=DB::table('evaluates')
        ->join('users','users.id','=','evaluates.id_user')
        ->select('users.name','evaluates.*')
        ->where('evaluates.id_pro',$id)
        ->get();
        
        return view('page/detail',compact('sanpham','moi','evaluate'));
    }
    public function addDetail(Request $request,$id){
        // $quantity=order_item::where('product_id', $id)
        // ->where('user_id',session()->get('customer'))
        // ->get;
        $quan=$request->input('quantity');
        $quantity=DB::select('select * from order_items where product_id ='.$id.' and user_id='.session()->get('customer'));
       
        if($quantity!=null){
            $total=$quantity[0]->quantity+$quan;
            DB::table('order_items')
            ->where('product_id', $id)
            ->update(['quantity' => $total]);
        }else{
            $order=new order_item();
            $order->product_id=$id;
            $order->user_id=session()->get('customer');
            $order->quantity=$quan;
            $order->save();
        }
        return redirect()->route('food.show');
    }
    public function deleteProduct(Request $req,$id){
        order_item::find($id)->delete();

        return redirect()->route('cart.show');
    }
    public function addCart(Request $request,$id){
        $quan=order_item::where('product_id',$id)->first()->quantity;
        DB::table('order_items')
            ->where('product_id', $id)
            ->update(['quantity' =>$quan+1]);
        return redirect()->route('cart.show');
    }


    //Xoa sp
    public function deleteProductAdmin($id)
   {   
       DB::table("products")->where("products.id", $id)->delete();
       return redirect()->route('tableadmin');
    //    return view('admin/pageAdmin/tableAdmin',compact('product','use','type'));
   
   }
    //them san pham
    public function insertProduct(Request $request){
        $sp= new product;
        $sp ->title=$request->ten;
        $sp ->description=$request->mota;
        $sp->unit_price=$request->gia;
        $sp->promotion_price=$request->giagiam;
        $sp->quantity=$request->soluong;
        $file_name = $request->file('myFile')->getClientOriginalName();
        $request->file('myFile')->move('public/img_food/food_content/',$file_name);
        $sp ->image= 'public/img_food/food_content/'.$file_name;
        $sp->save();
        json_encode($sp);

        $product=product::all();
        $use=userExport::all();
        $type=category::all();
        return view('admin/pageAdmin/tableAdmin',compact('product','use','type'));
    }
    //Sua sp

    public function getUpdateProduct(Request $request, $id){
    
        $product = product::find($id);
        $categories = category::all();
        return view('admin.pageAdmin.editProduct', compact('product','categories'));
    }
    public function updateProduct(Request $request, $id)
    {
        $file_name = $request->file('myFile')->getClientOriginalName();
        $request->file('myFile')->move('public/img_food/food_content/',$file_name);
        DB::table('products')
                ->where('id', $id)
                ->update(['title' => $request ->ten, 'description'=>$request->mota,'unit_price'=>$request->gia
                ,'promotion_price'=>$request->giagiam,'id_type'=>$request->loai,'quantity'=>$request->soluong,
                'image'=>'public/img_food/food_content/'.$file_name]);
        
        return redirect()->route('tableadmin');
    }
}
