<?php

define('SIZE_KB', 1024);
define('SIZE_MB', SIZE_KB * 1024);
define('SIZE_GB', SIZE_MB * 1024);
define('SIZE_TB', SIZE_GB * 1024);

class Files {
    
    var $path = null;
    
    function Files($path = null) {
        $this->path = $path;
    }
    
    function getPath() {
        if(!empty($this->path)){
            return $this->path;
        } else{
            return '.';
        }
    }
    
    function dirStatus($path = null){
	if($path == null){
	    $path = $this->getPath();
	}
    	if(@opendir($path)){
    		return true;
    	} else {
    		return false;
    	}
    }
    
    function getExtension($file = null){
	$file = explode('.', $file);
	if(count($file) - 1 == 0){
	    return 'file';
	} else {
	    if(empty($file[0])){
		return 'hidden';
	    } else {
		return $file[count($file) - 1];
	    }
	}
    }
    
    function is_Safeless($file = null, $core = null, $bool = false){
    	if(realpath($this->getPath() . '/' . $file) == $core){
    		if($bool === true){
    			return true;
    		} else {
    			return ' (Safeless)';
    		}
    	} else {
    		if($bool === true){
    			return false;
    		} else {
    			return null;
    		}
    	}
    }
    
    function readFolders(){
    	if ($dh = @opendir($this->getPath())) {
	    $files = array();
	    while (($file = readdir($dh)) !== false){
	    	if(is_file($this->getPath() .'/'. $file) OR $file == '.'){
	    		continue;
	    	}
	        array_push($files, $file);
	    }
            @closedir($dh);
	} else{
		$files = array('..');
	}
	
        sort($files);
        
	return $files;
    }
    
    function readFiles(){
        if ($dh = @opendir($this->getPath())) {
	    $files = array();
	    while (($file = readdir($dh)) !== false){
	    	if(is_dir($this->getPath() .'/'. $file)){
	    		continue;
	    	}
	        array_push($files, $file);
	    }
            @closedir($dh);
	} else{
		$files = array();
	}
	
        sort($files);
        
	return $files;
    }
    
    function showSize($size){
    	if(empty($size)){
    		return '0 B';
    	} else if($size < SIZE_KB){
                return $size . ' B';
            } else if($size < SIZE_MB) {
                return number_format($size / SIZE_KB, 2, '.', ',') . ' KB';
            } else if($size < SIZE_GB) {
                return number_format($size / SIZE_MB, 2, '.', ',') . ' MB';
            } else if($size < SIZE_TB) {
                return number_format($size / SIZE_GB, 2, '.', ',') . ' GB';
            } else {
                return number_format($size / SIZE_TB, 2, '.', ',') . ' TB';
            }
    }
    
    function getSize($file){
    	if(file_exists($file)) {
            $size = filesize($file);
            return $size;
        } else{
            return null;
        }
    }
    
    function getShowSize($file) {
        if(file_exists($file)) {
            $size = filesize($file);
            return $this->showSize($size);
        } else{
            return null;
        }
    }
    
}

?>