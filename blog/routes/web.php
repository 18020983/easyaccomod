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


// Route::group(['middleware' => 'guest'],function (){
//     Route::match(['get','post'],'/login','App\Http\Controllers\LoginController@showLoginform');
// });
// Route::match(['get','post'],'/login','App\Http\Controllers\LoginController@showLoginform');
Route::get('/login','App\Http\Controllers\LoginController@showLoginform');
Route::post('/login','App\Http\Controllers\LoginController@login');

Route::get('/signin','App\Http\Controllers\SigninController@signin');
Route::post('/signin','App\Http\Controllers\SigninController@insertsignin');

Route::get('/home','App\Http\Controllers\Home@index');
Route::get('/logout','App\Http\Controllers\LogoutController@logout');

Route::get('/baidang/{id}','App\Http\Controllers\Home@baidang');

Route::get('/timkiemdiachi','App\Http\Controllers\Home@tinhhuyen')->name('tinhhuyen');


Route::post('/home','App\Http\Controllers\Home@timkiem');


// Route::get('/login','App\Http\Controllers\LoginController@showLoginform');
// Route::post('/login','App\Http\Controllers\LoginController@login');

// Route::get('/signin','App\Http\Controllers\SigninController@signin');
// Route::post('/signin','App\Http\Controllers\SigninController@insertsignin');

// Route::get('/home','App\Http\Controllers\Home@index');


Route::group(['prefix'=>'chutro','middleware'=>'user'],function(){

    Route::get('/chat','App\Http\Controllers\Chutro\ChatController@index');
    Route::post('/chat','App\Http\Controllers\Chutro\ChatController@postSentMessage');

    Route::get('/logout','App\Http\Controllers\Chutro\ThongkeController@thongke');

    Route::get('/thongke','App\Http\Controllers\Chutro\ThongkeController@thongke');

    Route::get('/home','App\Http\Controllers\Chutro\ChutroController@home');

    Route::get('/quanlytindang','App\Http\Controllers\Chutro\QuanlytindangController@quanlytindang');

    Route::get('/thongtincanhan','App\Http\Controllers\Chutro\ThongtinController@thongtincanhan');
    Route::post('/thongtincanhan','App\Http\Controllers\Chutro\ThongtinController@getsuathongtincanhan');

   
    Route::get('/dangtinmoi/{id}','App\Http\Controllers\Chutro\DangtinmoiController@dangtinmoi');
    Route::post('/dangtinmoi/{id}','App\Http\Controllers\Chutro\DangtinmoiController@Themtinmoi');

    Route::post('/tinhhuyen','App\Http\Controllers\Chutro\DangtinmoiController@tinhhuyen');
    Route::get('/tinhhuyen','App\Http\Controllers\Chutro\DangtinmoiController@tinhhuyen');    

    Route::get('/thongbao/{id}','App\Http\Controllers\Chutro\ThongbaoController@thongbao');

    Route::get('/doimatkhau/{id}','App\Http\Controllers\Chutro\DoimatkhauController@doimatkhauform');
    Route::post('/doimatkhau/{id}','App\Http\Controllers\Chutro\DoimatkhauController@doimatkhau');

    Route::get('/capnhatthongtin/{id}','App\Http\Controllers\Chutro\CapnhatthongtinController@thongtinform');
    Route::post('/capnhatthongtin/{id}','App\Http\Controllers\Chutro\CapnhatthongtinController@updatethongtin');

    Route::get('/baidang/{id}','App\Http\Controllers\Chutro\BaidangController@baidang');
    Route::post('/baidang/{id}','App\Http\Controllers\Chutro\BaidangController@comment');

});


Route::group(['prefix'=>'admin','middleware'=>'user'],function(){
    Route::get('/quanlycomment','App\Http\Controllers\Admin\QuanlycommentController@quanly');

    Route::get('/dschutro','App\Http\Controllers\Admin\TaikhoanchatController@index');

    Route::get('/chat','App\Http\Controllers\Admin\ChatController@index');
    Route::post('/chat','App\Http\Controllers\Admin\ChatController@postSentMessage');

    Route::get('/home','App\Http\Controllers\Admin\AdminController@home');

    Route::get('/thongtincanhan','App\Http\Controllers\Admin\ThongtinController@thongtincanhan');

    // Route::post('/thongtincanhan','App\Http\Controllers\Admin\ThongtinController@getsuathongtincanhan');

    Route::get('/doimatkhau/{id}','App\Http\Controllers\Admin\DoimatkhauController@doimatkhauform');
    Route::post('/doimatkhau/{id}','App\Http\Controllers\Admin\DoimatkhauController@doimatkhau');

    Route::get('/quanlybaidang','App\Http\Controllers\Admin\QuanlybaidangController@quanlybaidang');
    Route::post('/quanlybaidang','App\Http\Controllers\Admin\QuanlybaidangController@ql');

    Route::get('/quanlytaikhoan','App\Http\Controllers\Admin\QuanlytaikhoanController@quanlytaikhoan');

    Route::get('/thongke','App\Http\Controllers\Admin\ThongkeController@thongke');

    Route::get('/duyetbaidang/{id}','App\Http\Controllers\Admin\DuyetbaidangController@duyetbai');
    Route::post('/duyetbaidang/{id}','App\Http\Controllers\Admin\DuyetbaidangController@duyetbaidang');

    Route::get('/duyettaikhoan/{id}','App\Http\Controllers\Admin\DuyettaikhoanController@duyettaikhoanform');
    Route::post('/duyettaikhoan/{id}','App\Http\Controllers\Admin\DuyettaikhoanController@pheduyet');

    Route::get('/capnhatthongtin/{id}','App\Http\Controllers\Admin\CapnhatthongtinController@thongtinform');
    Route::post('/capnhatthongtin/{id}','App\Http\Controllers\Admin\CapnhatthongtinController@updatethongtin');


    Route::get('/duyetcomment/{id}','App\Http\Controllers\Admin\DuyetcommentController@duyetbai');
    Route::post('/duyetcomment/{id}','App\Http\Controllers\Admin\DuyetcommentController@postduyetcomment');

    Route::get('/baidang/{id}','App\Http\Controllers\Admin\BaidangController@baidang');
    Route::post('/baidang/{id}','App\Http\Controllers\Admin\BaidangController@comment');
});


Route::group(['prefix'=>'nguoithuephong','middleware'=>'user'],function(){

    Route::get('/thongtincanhan','App\Http\Controllers\Nguoithuephong\ThongtinController@thongtincanhan');
    Route::get('/home','App\Http\Controllers\Nguoithuephong\NTPController@home');

    Route::get('/baidang/{id}','App\Http\Controllers\Nguoithuephong\BaidangController@baidang');
    Route::post('/baidang/{id}','App\Http\Controllers\Nguoithuephong\BaidangController@comment');

    Route::get('/chat','App\Http\Controllers\Nguoithuephong\ChatController@index');
    Route::get('/chat','App\Http\Controllers\Nguoithuephong\ChatController@postSendMessage');

    Route::get('/doimatkhau/{id}','App\Http\Controllers\Nguoithuephong\DoimatkhauController@doimatkhauform');
    Route::post('/doimatkhau/{id}','App\Http\Controllers\Nguoithuephong\DoimatkhauController@doimatkhau');

});

// Route::get('/baidang','App\Http\Controllers\Nguoithuephong\BaidangController@bt');




Route::get('/chat','App\Http\Controllers\Admin\ChatController@index');
Route::post('/chat','App\Http\Controllers\Admin\ChatController@postSentMessage');







