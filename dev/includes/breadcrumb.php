<?php

function breadcrumb() {
    GetGets::write('mode', 'open');
    GetGets::write('page', 'filemanager');
    $path = GetGets::read('path');
    if(empty($path)) {
    	$path = '.';
    } 
    
    $paths = explode(DS, realpath($path));
    
    
    $links = array();
    
    if(!WINDOWS) {
        $pathTmp = DS;
        GetGets::write('path', realpath($pathTmp));
    	$urlEncrypted = GetGets::encrypt();
        $links[-1] = "<li><a href=\"?{$urlEncrypted}\">{$pathTmp}</a></li>";
    } else {
        $pathTmp = '';
    }
    
    
    for($i=0; $i<=count($paths); $i++) {
    	if(empty($paths[$i])) {
    		continue;
    	}
    	$pathTmp .= $paths[$i] . DS;
    	GetGets::write('path', realpath($pathTmp));
    	$urlEncrypted = GetGets::encrypt();
    	$links[$i] = "<li><a href=\"?{$urlEncrypted}\">{$paths[$i]}</a></li>";
    }
    
    
    $return = implode('', $links);
    return "<ul class=\"NoMargin\">{$return}</ul>";
}

?>