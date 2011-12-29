<?php


class GetGets {
    
    var $gets = null;
    
    function read($key = null) {
        $instance = GetGets::getInstance();
        $gets = $instance->_getAll();
        if(empty($key)) {
            $return = $gets;
        } else {
            $return = isset($gets[$key]) ? $gets[$key] : null;
        }
        return $return;
    }
    
    function write($key, $value = null) {
        $instance = GetGets::getInstance();
        if(empty($instance->gets)) {
            $instance->gets = $instance->_getAll();
        }
        $instance->gets[$key] = $value;
        return true;
    }
    
    function remove($key = null) {
    	$instance = GetGets::getInstance();
    	if(empty($instance->gets)) {
            $instance->gets = $instance->_getAll();
        }
        if(isset($instance->gets[$key])) {
        	unset($instance->gets[$key]);
        }
        return true;
    }
    
    function encrypt($url = true) {
        $instance = GetGets::getInstance();
        $encripted = base64_encode(serialize($instance->gets));
        if($url) {
            $retorno = substr(md5(uniqid()), 0, 5) . "=" . $encripted;
        } else {
            $retorno = $encripted;
        }
        return $retorno;
    }
    
	function &getInstance() {
		static $instance = array();
		if (!$instance) {
			$instance[0] =& new GetGets();
		}
		return $instance[0];
	}
    
    function _getAll() {
        $get = @unserialize(base64_decode(current($_GET)));
        if(empty($get)) {
            return array();
        }
        return $get;
    }
    
}

?>