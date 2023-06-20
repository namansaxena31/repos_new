<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmailController;
use Illuminate\Http\Request;
use App\Models\Customer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[DemoController::class,'index']);

Route::get('/form',[CustomerController::class,'view']);
Route::post('/form',[CustomerController::class,'store']);


Route::get('/get-all-session',function(){
    $session = session()->all();
    print_r($session);
});

Route::get('/set-session',function(Request $request){
    $request->session()->put('name','naman');
    $request->session()->put('email','naman@gmail.com');
    return redirect('get-all-session');
}); 

Route::get('/destroy-session',function(){
    session()->forget(['name','email']);
    return redirect('get-all-session');
}); 

Route::get('/customer',function(){
    $customers = Customer::all();
    echo "<pre>";
    print_r($customers);
}); 

Route::get('/send-email', 'EmailController@sendEmail');
Route::get('/send-email',[EmailController::class,'sendWelcomeEmail']);