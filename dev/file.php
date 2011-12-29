<h2><?php __('View file'); ?></h2>

<div class="content">
<?php
    if(GetGets::read('mode') == 'view'){
        show_source(GetGets::read('file'));
    }
?>    
</div>
