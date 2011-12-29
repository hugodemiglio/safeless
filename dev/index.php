<?php

include 'includes.php';


if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
    $action = $_POST['action'];
    switch($action) {
        case 'change_folder':
        break;
    }
}



$layouts = array();

?>
<?php
//LAYOUT - default
ob_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <title>Safeless</title>
        <link rel="stylesheet" type="text/css" href="?css" />
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div id="logo">
                    <h1>Safeless</h1>
                    <h2>Your site. Our admin.</h2>
                </div>
                <div id="search">
                </div>
                <div class="ClearFix"></div>
            </div>
            <div id="content">
                <div id="sidebar">
                    <ul id="navigation" class="NoMargin">
                        <?php foreach($navigation as $item): ?>
                        <li<?php echo $item['class'] ?>><a href="<?php echo $item['link'] ;?>"><?php echo $item['label'] ;?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php if(haveLastVersion()): ?>
                    <div class="dialog alert">
                        <?php echo __('A new version', false) . ' (' .  getLastVersion() . ') ' . __('of <strong>Safeless</strong> is available', false) . ' <a href="#">' . __('click here', false) . '</a> ' . __('to upgrade.', false); ?>
                    </div>
                    <?php endif; ?>
                    <?php if(getSafeMode()): ?>
                    <div class="dialog alert">
                        <?php echo __('The <strong>Safe Mode</strong> is ', false) . __('enabled on this server, some features may not work.', false); ?>
                    </div>
                    <?php else: ?>
                    <div class="dialog ok">
                        <?php echo __('The <strong>Safe Mode</strong> is ', false) . __('disabled for this server, enjoy!', false); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div id="pages">
                    <div class="debug">
                        <span onclick="document.getElementById('show-debug').style.display = 'block'">Code Debug</span>
                        <div id="show-debug">
                        <?php
                            include 'debug.php';
                        ?>
                        </div>
                    </div>
                    {content_for_layout}
                </div>
                <div class="ClearFix"></div>
            </div>
            <div id="footer">
                <div id="version">
                    <?php echo __('Version', false) . ' ' . getVersion(); ?>
                </div>
                <div id="copytight">
                    2010 <strong>Safeless</strong>.
                </div>
            </div>
        </div>
    </body>
</html>
<?php
$layouts['default'] = trim(ob_get_contents());
ob_end_clean();
$layouts['ajax'] = '{content_for_layout}';
$layouts['empty'] = '';



$views = array(
    'serverinformation' => 'serverinformation',
    'filemanager' => 'filemanager',
    'settings' => 'settings',
    'file' => 'file',
    'fileedit' => 'fileedit',
    'filedelete' => 'filedelete',
    'home' => 'home',
    '' => 'home',
);

ob_start();
include '' . $views[GetGets::read('page')] . '.php';
$content_for_layout = ob_get_contents();
ob_end_clean();

echo str_replace('{content_for_layout}', $content_for_layout, $layouts['default']);

//phpinfo();

?>