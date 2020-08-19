<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'homeController@getList')->name('welcome');
//'as' the simlar name in route
Route::get('home',['as' => 'food.show','uses' => 'homeController@getList']);
Route::post('home','homeController@chatbox');
// Route::get('home','homeController@getList')->name('food.show');
// Route::post('home','addProductController@postAdd');
Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'addProductController@postAdd'
]);
Route::get('loginForm',"loginController@getLogin")->name('login.show');
Route::post('loginForm',"loginController@login");
Route::post('logout',"loginController@logout");
Route::get('regist',['as'=>'dangnhap','uses'=>'loginController@getRegist']);
Route::post('regist',"loginController@regist");
Route::get('chitiet/{id}','productController@getDetail')->name('chitietsanpham');
Route::post('chitiet/{id}','productController@addDetail')->name('themchitiet');
Route::get('delete/{id}','productController@deleteProduct')->name('xoasanpham');
Route::get('addCart/{id}','productController@addCart')->name('addcart');

Route::get('cart','cartController@getCart')->name('cart.show');
Route::post('cart','cartController@delCart');
Route::get('editPro/{id}','productController@getEdit')->name('edit.show');
Route::post('editPro/{id}','productController@posEdit');

// Route::group(['prefix' => 'admin'],function(){
    Route::get('admin','admin@getAdmin')->name('admin');
    Route::get('chart','admin@getChartAdmin')->name('chartadmin');
    Route::get('tableAdmin','admin@getTableAdmin')->name('tableadmin');
    Route::get('addProductAdmin','admin@getaddProductAdmin')->name('addProduct');
    Route::get('chat','admin@getChatAdmin')->name('chatadmin');
    // Route::post('chat','admin@disAdmin');
    // Route::post('chat','admin@addMessAdmin');
    Route::post('chat','admin@addMessFirst');

    Route::get('chatCus/{id}','admin@disAdmin')->name('chatCus');
    Route::post('chatCus/{id}','admin@addMessAdmin');
// });
Route::get('getchat','Api\chatController@getChatAdmin');

Route::get('export', 'admin@export')->name('export');
Route::get('order','cartController@getOrder');
Route::get('sendemail','sendmail@index')->name('email');
Route::post('sendemail','sendmail@sendEmail');
Route::get('checkcode','sendmail@getCheck')->name('check');
Route::post('checkcode','sendmail@check');

Route::get('dathang','cartController@getInfo')->name('dathang');
Route::post('dathang','cartController@getThanhToan');


//xóa sản phẩm 
Route::get('delete/{id}','productController@deleteProductAdmin')->name('xoasanpham');
//Thêm sản phẩm 
// Route::post('them-sp','productController@insertProduct')->name('themsanp'); 
Route::post('themsp','productController@insertProduct')->name('themsp');
// Sửa 
Route::get('sua-sp/{id}','productController@getUpdateProduct')->name('suasanp');
Route::post('sua-sp/{id}','productController@updateProduct')->name('suasanp');
?>

