<?php

function getURL($url = null) {
    if(is_null($url)) {
        return null;
    }
    if($content = @file_get_contents($url)) {
        return $content;
    } else {
        if(function_exists('curl_init')) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1) ;
            $content = curl_exec($ch);
            curl_close($ch);
            
            return $content;
        } else {
            return null;
        }
    }
}

function pr($var){
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}

function dump($var){
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}

?>