<?php

use Illuminate\Support\Facades\Route;

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

?>