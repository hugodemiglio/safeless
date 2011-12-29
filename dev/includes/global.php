<?php

define('DS', DIRECTORY_SEPARATOR);
define('WINDOWS', (strtolower(substr(PHP_OS,0,3)) == "win"));


$navigation = array();


GetGets::write('page', 'home');
$navigation[] = array(
    'id' => '',
    'label' => __('Home', false),
    'link' => '?' . GetGets::encrypt(),
    'class' => ' class="first"', 
);

GetGets::write('page', 'serverinformation');
$navigation[] = array(
    'id' => '',
    'label' => __('Server information', false),
    'link' => '?' . GetGets::encrypt(),
    'class' => '',
);

GetGets::write('page', 'filemanager');
$navigation[] = array(
    'id' => '',
    'label' => __('File manager', false),
    'link' => '?' . GetGets::encrypt(),
    'class' => '', 
);

GetGets::write('page', 'databases');
$navigation[] = array(
    'id' => '',
    'label' => __('Databases', false),
    'link' => '?' . GetGets::encrypt(),
    'class' => '', 
);

GetGets::write('page', 'settings');
$navigation[] = array(
    'id' => '',
    'label' => __('Settings', false),
    'link' => '?' . GetGets::encrypt(),
    'class' => '',
);

?>