<?php
/*
 * URL Format
 */
function urlFormat($str){
    //Strip out all whitespace
    $tr = preg_replace('/\s*/', '', $str);
    //Convert the string to all lowercase
    $str = strtolower($str);
    //URL Encode
    $str = urlencode($str);
    return $str;
}

/*
 * Format Date
 */

function formateDate($date){
    $date = date("F j, Y, g:i a", strtotime($date));
    return $date;
}
