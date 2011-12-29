<h2><?php __('Edit file'); ?></h2>

<form action="#" method="post">
  <fieldset>
    <textarea cols="45" rows="15"><?php
if(GetGets::read('mode') == 'view'){
    echo trim(file_get_contents(GetGets::read('file')));
}
?></textarea>
    
    <div class="ClearFix"></div>
    <div class="button">
            <button type="submit"><?php echo __('Save.'); ?></button>	
    </div>
  </fieldset>
</form>

