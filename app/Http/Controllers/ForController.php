<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForController extends Controller
{
    public function for1($n, $k){
        for($i=1; $i<=$n; $i++)
        echo "$k<br>" ;
    }

    public function for2($a, $b){
        for($i=$a; $i<=$b; $i++)

        echo "$i<br>" ;
    }

    public function for3($a, $b, $amount){
        for($i=$b-1; $i>$a; $i--){
            echo "$i<br>" ;
            $amount ++ ;
        }
         
        echo "Количество чисел : $amount" ;
    }

    public function for4($a, $cost){
        for($i=1; $i<=10; $i++){
            $cost += $a ;
            echo "$i kg of sweets costs $cost $<br>" ;
        }
    }

    public function for5($a, $cost){
        for($i=0.1; $i<=1; $i+=0.1){
            $cost += $a/10 ;
            echo "$i kg of sweets costs $cost $<br>" ;
        }
    }

    public function for6($a){
        for($i=1.2; $i<=2; $i+=0.2){
            $cost = $a*$i ;
            echo "$i kg of sweets costs $cost $<br>" ;
        }
    }


    public function for7($a, $b, $amount){
        for($i=$a; $i<=$b; $i++){
            $amount += $i ;
        }
        
        echo "Сумма чисел : $amount" ;
        
    }

    public function for8($a, $b, $amount){
        for($i=$a; $i<=$b; $i++){
            $amount *= $i ;
        }
        
        echo "Произведение чисел : $amount" ;   
    }

    
    public function for9($a, $b, $amount){
        for($i=$a; $i<=$b; $i++){
            $amount += $i**2 ;
        }
        
        echo "Сумма квадратов чисел : $amount" ;
          
    }

    public function for10($n, $s){
        for($i=1; $i<=$n; $i++)
        $s += (1/$i) ;
    
        echo $s ;
    }

    public function for11($n, $s){
        for($i=0; $i<=$n; $i++)
        $s += ($n+$i)**2 ;

        echo $s ;
    }

    public function for12($n, $s, $p){
        for($i=1; $i<=$n; $i++){
            $s += 0.1 ;
            $p *= $s ;
        }
           
        echo $p ;
    }

}
