<?php

class StringsKozena {
    
    public static function substr_Kozena() {
        $string = 'Mentální poruchy1';
        $start = -1;
        return substr($string, $start);
    }
    
    public static function substr_replace_Kozena() {
        $string = 'život';
        $replacement = 'smr';
        $start = 0;
        $end = 5; 
        return substr_replace($string, $replacement, $start, $end);
    }
    
    public static function strtr_Kozena() {
        $string = 'bububu';
        $trans = array("bu" => "12");
        return strtr($string, $trans);
    }
    
    public static function strtoupper_Kozena() {
        $string = "Dobrou noc";
        return strtoupper($string);
    }
    
    public static function strtolower_Kozena() {
        $string = "No nazdar";
        return strtolower($string);
    }
    
    public static function strrpos_Kozena() {
        $string = "strach";
        $hledanaVec = "str";
        return strrpos($string, $hledanaVec);
    }

    public static function strripos_Kozena() {
        $string = "bolest";
        $hledanaVec = "le";
        return strripos($string, $hledanaVec);
    }

    public static function strpos_Kozena() {
        $string = "smutek";
        $hledanaVec = "m";
        return strpos($string, $hledanaVec);
    }

    public static function strlen_Kozena() {
        $string = "Trest";
        return strlen($string);
    }

    public static function strchr_Kozena() {
        $string = "Co se děje?";
        $needle = "se";
        return strchr($string, $needle);
    }
 
    public static function str_replace_Kozena() {
        $search = array('Anorexie', 'Bulimie', 'Ceraunofil', 'Deprese', 'Euforie', 'Fobie');
        $replace = array('Bulimie', 'Ceraunofil', 'Deprese', 'Euforie', 'Fobie', 'Gram');
        $subject = 'Anorexie';
        return str_replace($search, $replace, $subject);
    }
 
    public static function md5_Kozena() {
        $string = 444;
        return md5($string);
    }

    public static function implode_Kozena() {
        $glue = array('jmeno', 'prijmeni', 'narozeni', 'umrti', 'epitaf');
        $doplneni = " , ";
        return implode($glue, $doplneni);
    }

    public static function explode_Kozena() {
        $delimiter = '""';
        $string = "jmeno prijmeni narozeni umrti epitaf"; 
        return explode($delimiter, $string);
    }

    public static function addcslashes_Kozena() {
        $str = "Nerozumite mi";
        $charlist = 'A..z'; 
        return addcslashes($str, $charlist);
    }

    public static function addslashes_Kozena() {
        $string = "stres, úzkost, strach a smutek"; 
        return addslashes($string);
    }

    public static function trim_Kozena() {
        $string = "Li\fe";
        $string2 = "\f";
        return trim($string, $string2);
    }

    public static function ucfirst_Kozena() {
        $string = "noční můra";  
        return ucfirst($string);
    }

    public static function ucwords_Kozena() {
        $string = "spánková paralýza mě neporazí!"; 
        return ucwords($string);
    }
}
var_dump(StringsKozena::substr_Kozena());
var_dump(StringsKozena::substr_replace_Kozena());
var_dump(StringsKozena::strtr_Kozena());
var_dump(StringsKozena::strtoupper_Kozena());
var_dump(StringsKozena::strtolower_Kozena());
var_dump(StringsKozena::strrpos_Kozena());
var_dump(StringsKozena::strripos_Kozena());
var_dump(StringsKozena::strpos_Kozena());
var_dump(StringsKozena::strlen_Kozena());
var_dump(StringsKozena::strchr_Kozena());
var_dump(StringsKozena::str_replace_Kozena());
var_dump(StringsKozena::md5_Kozena());
var_dump(StringsKozena::implode_Kozena());
var_dump(StringsKozena::explode_Kozena());
var_dump(StringsKozena::addcslashes_Kozena());
var_dump(StringsKozena::addslashes_Kozena());
var_dump(StringsKozena::trim_Kozena());
var_dump(StringsKozena::ucfirst_Kozena());
var_dump(StringsKozena::ucwords_Kozena());
?>