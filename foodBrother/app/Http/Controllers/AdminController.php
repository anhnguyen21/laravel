<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\product;
use App\galleries;
use App\productCategories;
class AdminController extends Controller
{

    public function getIndexAdmin()
    {
        $pro = DB::select('select id,title,image, unit_price from products ');
        return view('Admin.homeAdmin', compact('pro'));
    }
    public function deleteProduct($id)
    {   
        $pro = DB::select('select id,title,image, unit_price from products');
        DB::table("product_categories")->where("product_categories.product_id", $id)->delete();
        DB::table("products")->where("products.id", $id)->delete();
        return view('Admin.homeAdmin', compact('pro'));
    
    }
    public function getInsertProduct(){
        return view("Admin.insertProduct");
    }
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

        $loai = new productCategories;
        $loai ->product_id=$request->idsp;
        $loai ->type=$request->loai;
        $loai ->save();
        $pro = DB::select('select id,title,image, unit_price from products');
        return view('Admin.homeAdmin', compact('pro'));
    }

    public function getUpdateProduct(Request $request, $id){
        $pro = product::find($id);
        return view('Admin.editProduct', compact('pro'));
    }

    public function updateProduct(Request $request, $id)
    {
        $file_name = $request->file('myFile')->getClientOriginalName();
        $request->file('myFile')->move('public/img_food/food_content/',$file_name);

        $prod = array('title' => $request->ten,'description'=>$request->mota,'unit_price'=>$request->gia
        ,'promotion_price'=>$request->giagiam,'quantity'=>$request->soluong,
        'image'=>'public/img_food/food_content/'.$file_name);

        $pcate = array('type'=>$request->loai);
        DB::table('products')->where('id', $id)->update($prod);
        DB::table('product_categories')->where('id', $id)->update($pcate);

        $pro = DB::select('select id,title,image, unit_price from products');
        return view('Admin.homeAdmin', compact('pro'));
    }
}
