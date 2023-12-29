<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooleanController extends Controller
{
    public function boolean1($a){
        echo var_dump($a > 0) ;
    }
    
    public function boolean2($a){
        echo var_dump($a % 2 != 0) ;
    }

    public function boolean3($a){
        echo var_dump($a % 2 == 0) ;
    }

    public function boolean4($a, $b){
        echo var_dump(($a > 2) && ($b<=3)) ;
    }

    public function boolean5($a, $b){
        echo var_dump(($a >= 0) || ($b < -2)) ;
    }

    public function boolean6($a, $b, $c){
        echo var_dump($a<=$b && $b<=$c) ;
    }

    public function boolean7($a, $b, $c){
        echo var_dump(($a<=$b && $b<=$c) || ($a>=$b && $b>=$c)) ;
    }

    public function boolean8($a, $b){
        echo var_dump(($a * $b) % 2!=0) ;
    }

    public function boolean9($a, $b){
        echo var_dump(($a% 2!=0) || ($b% 2!=0)) ;
    }

    public function boolean10($a, $b){
        echo var_dump(($a + $b) % 2!=0) ;
    }

    public function boolean11($a, $b){
        echo var_dump(($a + $b) % 2 == 0) ;
    }

    
    public function boolean12($a, $b, $c){
        echo var_dump(($a > 0) && ($b > 0) && ($c > 0) ) ;
    }    

        
    public function boolean13($a, $b, $c){
        echo var_dump(($a > 0) || ($b > 0) || ($c > 0) ) ;
    } 

    public function boolean14($a, $b, $c){
        echo var_dump(($a * $b * $c) >0 && !(($a > 0) && ($b > 0) && ($c > 0) )) ;
    } 

    public function boolean15($a, $b, $c){
        echo var_dump(($a * $b * $c) < 0 && !(($a < 0) && ($b < 0) && ($c < 0) )) ;
    } 
}


