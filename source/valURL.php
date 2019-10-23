<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 10/18/2019
 * Time: 8:24 AM
 */

namespace App; // namespace prefix bên composer.json

class ValUrl {

public function __construct(){}

public function checkURRL($url){
    if (filter_var($url, FILTER_VALIDATE_URL)){
        return true;}
    else{
        return false;}
}

public function subString($url1,$url2){
    $urlSub1 = substr($url1,-1);
    $urlSub2 = substr($url2,0,1);

    $url_parse1 = parse_url($url1,PHP_URL_PATH);
    $url_rep = str_replace($url_parse1,"",$url1);

    if($urlSub1 == "/" && $urlSub2 == "/"){
        return $url_rep.$url2;
    } elseif ($urlSub1 != "/" && $urlSub2 != "/"){
        return $url1."/".$url2;
    } else {
        return $url1.$url2;
    }

}

public function protocol($url){
    return parse_url($url, PHP_URL_SCHEME);
}
public function port($url){
    return parse_url($url,PHP_URL_PORT);
}
public function domain($url){
    return parse_url($url,PHP_URL_HOST);
}

}

?>

