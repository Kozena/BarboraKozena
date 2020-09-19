<?php

class NumbersKozena {
    
    public static function round_Kozena() {
        $value = 4.321;
        return round($value);
    }
    
    public static function ceil_Kozena() {
         $value = 4.5;
        return ceil($value);
    }
    
    public static function floor_Kozena() {
        $value = 6.9;
        return floor($value);
    }
    
    public static function sqrt_Kozena() {
        $value = 4;
        return sqrt($value);
    }
    
    public static function pow_Kozena() {
        $zaklad = 4;
        $mocnitel = 2;
        return pow($zaklad, $mocnitel);
    }
    
    public static function sin_Kozena() {
        $value = 90;
        return sin($value);
    }

    public static function cos_Kozena() {
        $value = 90;
        return cos($value);
    }

    public static function tan_Kozena() {
        $value = 90;
        return tan($value);
    }
    
    public static function asin_Kozena() {
        $value = 90;
        return asin($value);
    }

    public static function acos_Kozena() {
        $value = 90;
        return acos($value);
    }
 
    public static function atan_Kozena() {
        $value = 90;
        return atan($value);
    }
    
    public static function fmod_Kozena() {
        $x = 13;
        $y = 7;
        return fmod($x, $y);
    }
    
    public static function max_Kozena() {
        $values = array('12', '23', '34');
        return max($values);
    }

    public static function min_Kozena() {
        $values = array('11', '22', '33');
        return min($values);
    }
    
    public static function abs_Kozena() {
        $value = -18;
        return abs($value);
    }
    
    public static function minus_Kozena() {
        $a = 666;
        $b = 222;
        return ($a - $b);
    }

    public static function plus_Kozena() {
        $a = 222;
        $b = 444;
        return ($a + $b);
    }

    public static function deleni_Kozena() {
        $a = 4;
        $b = 2;
        return ($a / $b);
    }

    public static function nasobeni_Kozena() {
        $a = 222;
        $b = 3;
        return ($a * $b);
    }
    
    public static function number_format_Kozena() {
        $value = 22;
        return number_format($value);
    }
}
var_dump(NumbersKozena::round_Kozena());
var_dump(NumbersKozena::ceil_Kozena());
var_dump(NumbersKozena::floor_Kozena());
var_dump(NumbersKozena::sqrt_Kozena());
var_dump(NumbersKozena::pow_Kozena());
var_dump(NumbersKozena::sin_Kozena());
var_dump(NumbersKozena::cos_Kozena());
var_dump(NumbersKozena::tan_Kozena());
var_dump(NumbersKozena::asin_Kozena());
var_dump(NumbersKozena::acos_Kozena());
var_dump(NumbersKozena::atan_Kozena());
var_dump(NumbersKozena::fmod_Kozena());
var_dump(NumbersKozena::max_Kozena());
var_dump(NumbersKozena::min_Kozena());
var_dump(NumbersKozena::abs_Kozena());
var_dump(NumbersKozena::minus_Kozena());
var_dump(NumbersKozena::plus_Kozena());
var_dump(NumbersKozena::deleni_Kozena());
var_dump(NumbersKozena::nasobeni_Kozena());
var_dump(NumbersKozena::number_format_Kozena());
?>