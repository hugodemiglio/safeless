<?php

if(!defined('SAFELESS_VERSION')) {
    define('SAFELESS_VERSION', "1.0");
}


define('SAFELESS_URL_LAST_VERSION', "http://www.supremoalimentos.com.br/version.txt");
$lastVersion = GetGets::read('version');
if(!$lastVersion) {
   $lastVersion = ($version = getURL(SAFELESS_URL_LAST_VERSION)) ? $version : SAFELESS_VERSION;
} 

define('SAFELESS_LAST_VERSION', $lastVersion);

GetGets::write('version', $lastVersion);



function getVersion() {
    return SAFELESS_VERSION;
}

function getLastVersion() {
    return SAFELESS_LAST_VERSION;
    
}

function haveLastVersion() {
    $version_compare = version_compare(getVersion(), getLastVersion());
    if($version_compare == -1) {
        return true;
    } else {
        return false;
    }
}

?>