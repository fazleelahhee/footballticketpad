<?php


$input_date = "2014-03-01";

function dateFormatter($input_date = '') {
    if (empty($input_date)){
        return $input_date;
    }

    if(preg_match('/^\d{2}\/\d{2}\/\d{4}/', $input_date, $matches)) {
        $d = explode('/',$matches[0]);
        if($d[0] <=31 && $d[1] <=12 ) {
            return "{$d[2]}-{$d[1]}-{$d[0]}";
        }
    }
    return date('d-m-Y', strtotime($input_date));
}


echo dateFormatter($input_date);