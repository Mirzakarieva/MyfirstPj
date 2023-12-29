<?php

use App\Http\Controllers\testController;
use App\Http\Controllers\ForController;
use App\Http\Controllers\BooleanController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

Route::get('/', function () {
    return view('welcome');
});
// if1
Route::get('/if1/{num}', function($num){
    if($num>0)
        echo $num+1 ;
    else
        echo $num ;
});



// if2
Route::get('/if2/{num}', function($num){
    if($num>0)
        echo $num+1 ;
    else
        echo $num-2 ;
});



// if3
Route::get('/if3/{num}', function($num){
    if($num>0)
        $num += 1 ;
    elseif($num<0)
        $num -= 2 ;
    else
        $num = 10 ;
    echo $num ;
});


// if4
Route::get('/if4/{num1}/{num2}', function($num1, $num2, $num3){
    $res = 0 ;
    if($num1>0)
        $res += 1 ;
    if($num2>0)
        $res += 1 ;
    if($num3>0)
        $res += 1 ;
    echo $res ;
});


// if5
Route::get('/if5/{num1}/{num2}', function($num1, $num2, $num3){
    $pos = 0 ;
    $neg = 0 ;
    if($num1>0)
        $pos += 1 ;
    else
        $neg += 1 ;
    if($num2>0)
        $pos += 1 ;
    else
        $neg += 1 ;
    if($num3>0)
        $pos += 1 ;
    else
        $neg += 1 ;
    echo "Positive:$pos<br>Negative:$neg" ;
});

// if6
Route::get('/if6/{num1}/{num2}', function($num1, $num2,){
    if($num1 > $num2)
        $res = $num1 ;
    else
        $res = $num2 ;
        echo "$res" ;
});



// if7
Route::get('/if7/{num1}/{num2}', function($num1, $num2, ){
    if($num1 > $num2)
        $res = 2 ;
    else
        $res = 1 ;
    echo "$res" ;
});




// if8
Route::get('/if8/{num1}/{num2}', function($num1, $num2, ){
    if($num1 > $num2){
        $res1 = $num1 ;
        $res2 = $num2 ;
    }else{
        $res1 = $num2 ;
        $res2 = $num1 ;
    }
    echo "$res1<br>$res2" ;

});



// if9
Route::get('/if9/{num1}/{num2}', function($num1, $num2, ){
    if($num1 > $num2){
        $res1 = $num1 ;
        $res2 = $num2 ;
    }else{
        $res1 = $num2 ;
        $res2 = $num1 ;
    }
    echo "A:$res2<br>B:$res1" ;

});

// if10
Route::get('/if10/{num1}/{num2}', function($num1, $num2 ){
    if($num1 != $num2){
        $res1 = $num1+$num2 ;
        $res2 = $num1+$num2 ;
    }else{
        $res1 = 0 ;
        $res2 = 0 ;
    }
    echo "A:$res2<br>B:$res1" ;
   
});

//************beginning of the integer part ********************
Route::get('/data1/{sm}', function ($sm,){

    $fullmeters = floor($sm / 100) ;


    echo "There is $fullmeters full metres in $sm santimeters ." ;
    
});

//***** integer 2 *********
Route::get('/data2/{kg}', function ($kg,){
 
$fulltonn = floor($kg / 1000) ;


echo "There is $fulltonn full tons in $kg kilogramms ." ;
});

//***** integer 3 *********
Route::get('/data3/{hajm}', function ($hajm,){
   $kilobayt = floor($hajm / 1024) ;

    return $kilobayt;
});

//***** integer 4 *********
Route::get('/data4/{a}/{b}', function ($a, $b,){
    $times = floor($a / $b) ;


echo "There is $times B in A." ;
 });

 //***** integer 5 *********
Route::get('/data5/{a}/{b}', function ($a, $b,){
    $d = $a % $b ;
 
     return "Joylashmagan qismi: $d ";
 });

 //***** integer 6 *********
Route::get('/data6/{num}', function ($num,){
    $des = floor($num / 10) ;
    $ed = $num % 10 ;
    
    echo "Десятки-$des <br>";
    echo "Единицы-$ed <br>";
 });

 //***** integer 7 *********
Route::get('/data7/{num}', function ($num,){
    $des = floor($num / 10) ;
    $ed = $num % 10 ;
    $sum = $des + $ed ;
    
    echo "Сумма цифр-$sum <br>";
   
 });

 //***** integer 8 *********
Route::get('/data8/{num}', function ($num,){

 
$changed = ($num % 10)* 10 + floor($num / 10);

echo $changed ;
 });

 //***** integer 9 *********
Route::get('/data9/{a}', function ($a,){

    $result = floor($a / 100) ;
    return "Yuzlar xonasidagi son: $result ga teng: " ;
 
 });

 //***** integer 10 *********
Route::get('/data10/{m}', function ($m,){

    $num2 = floor($m / 10) ;

    $num3 = $m % 10;
 
     return " O'nliklar xonasi:$num2 ga teng <br> 
     Birliklar xonasi: $num3 ga teng";
 });


Route::get('/admin/about', [testController::class, 'adminAbout']) ;
Route::get('/admin/service', [testController::class, 'adminService']) ;
Route::get('/admin/product', [testController::class, 'adminProduct']) ;


Route::get('/client/about', [testController::class, 'clientAbout']) ;
Route::get('/client/service', [testController::class, 'clientService']) ;
Route::get('/client/product', [testController::class, 'clientProduct']) ;


Route::get('/for1/{n}/{k}', [ForController::class, 'for1']) ;
Route::get('/for2/{a}/{b}', [ForController::class, 'for2']) ;
Route::get('/for3/{a}/{b}/{amount}', [ForController::class, 'for3']) ;
Route::get('/for4/{a}/{cost}', [ForController::class, 'for4']) ;
Route::get('/for5/{a}/{cost}', [ForController::class, 'for5']) ;
Route::get('/for6/{a}', [ForController::class, 'for6']) ;
Route::get('/for7/{a}/{b}/{amount}', [ForController::class, 'for7']) ;
Route::get('/for8/{a}/{b}/{amount}', [ForController::class, 'for8']) ;
Route::get('/for9/{a}/{b}/{amount}', [ForController::class, 'for9']) ;
Route::get('/for10/{n}/{s}', [ForController::class, 'for10']) ;
Route::get('/for11/{n}/{s}', [ForController::class, 'for11']) ;
Route::get('/for12/{n}/{s}/{p}', [ForController::class, 'for12']) ;


Route::get('/boolean1/{a}', [BooleanController::class, 'boolean1']) ;
Route::get('/boolean2/{a}', [BooleanController::class, 'boolean2']) ;
Route::get('/boolean3/{a}', [BooleanController::class, 'boolean3']) ;
Route::get('/boolean4/{a}/{b}', [BooleanController::class, 'boolean4']) ;
Route::get('/boolean5/{a}/{b}', [BooleanController::class, 'boolean5']) ;
Route::get('/boolean6/{a}/{b}/{c}', [BooleanController::class, 'boolean6']) ;
Route::get('/boolean7/{a}/{b}/{c}', [BooleanController::class, 'boolean7']) ;
Route::get('/boolean8/{a}/{b}', [BooleanController::class, 'boolean8']) ;
Route::get('/boolean9/{a}/{b}', [BooleanController::class, 'boolean9']) ;
Route::get('/boolean10/{a}/{b}', [BooleanController::class, 'boolean10']) ;
Route::get('/boolean11/{a}/{b}', [BooleanController::class, 'boolean11']) ;
Route::get('/boolean12/{a}/{b}/{c}', [BooleanController::class, 'boolean12']) ;
Route::get('/boolean13/{a}/{b}/{c}', [BooleanController::class, 'boolean13']) ;
Route::get('/boolean14/{a}/{b}/{c}', [BooleanController::class, 'boolean14']) ;
Route::get('/boolean15/{a}/{b}/{c}', [BooleanController::class, 'boolean15']) ;


// Route::prefix('admin')->name('admin.')->group(function(){

//     Route::get('/about', function(){
//         return view('admin.about');
//     })->name('about');

//     Route::view('service', 'admin.service')->name('service');
//     Route::view('product', 'admin.product')->name('product');
//     Route::view('page1', 'admin.page1')->name('page1');
//     Route::view('page2', 'admin.page2')->name('page2');
//     Route::view('page3', 'admin.page3')->name('page3');
//     Route::view('page4', 'admin.page4')->name('page4');
//     Route::view('page5', 'admin.page5')->name('page5');
//     Route::view('page6', 'admin.page6')->name('page6');
//     Route::view('page7', 'admin.page7')->name('page7');
    
// }) ;

// Route::prefix('client')->name('client.')->group(function(){

//     Route::get('/about', function(){
//         return view('client.about');
//     })->name('about');

//     Route::view('service', 'client.service')->name('service');
//     Route::view('product', 'client.product')->name('product');
//     Route::view('page1', 'client.page1')->name('page1');
//     Route::view('page2', 'client.page2')->name('page2');
//     Route::view('page3', 'client.page3')->name('page3');
//     Route::view('page4', 'client.page4')->name('page4');
//     Route::view('page5', 'client.page5')->name('page5');
//     Route::view('page6', 'client.page6')->name('page6');
//     Route::view('page7', 'client.page7')->name('page7');
    
// }) ;


Route::prefix('prog')->name('prog.')->group(function(){

    Route::get('/about', function(){
        return view('prog.about');
    })->name('about');

    Route::view('service', 'prog.service')->name('service');
    Route::view('product', 'prog.product')->name('product');
    Route::view('page1', 'prog.page1')->name('page1');
    Route::view('page2', 'prog.page2')->name('page2');
    Route::view('page3', 'prog.page3')->name('page3');
    Route::view('page4', 'prog.page4')->name('page4');
    Route::view('page5', 'prog.page5')->name('page5');
    Route::view('page6', 'prog.page6')->name('page6');
    Route::view('page7', 'prog.page7')->name('page7');
    
}) ;



?>