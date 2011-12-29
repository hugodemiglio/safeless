<?php

if(GetGets::read('mode') == 'open'){
    $files = new Files(GetGets::read('path'));
} else{
    $files = new Files('./');
}
?>

<h2><?php __('File manager'); ?></h2>

<?php if($files->dirStatus() != 1 OR $files->dirStatus() !== true): ?>
<div class="dialog error">
    <?php __('The Safeless not have permission to view this directory.'); ?>
</div>
<?php endif; ?>

<div class="breadcrumb">
  <?php echo breadcrumb(); ?>
  <div class="ClearFix"></div>
</div>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
    <input type="hidden" name="action" value="change_folder" />
    <input type="text" name="teste" value="" /><br />
    <button type="submit">Enviar</button>
</form>
<table class="FileManager" cellpadding="0" cellspacing="0">
  <thead>
      <tr>
          <th class="FileIcon"></th>
          <th class="FileName"><?php __('File name'); ?></th>
          <th class="FileChmod"><?php __('Permissions'); ?></th>
          <th class="FileSize"><?php __('Size'); ?></th>
          <th class="FileOptions"><?php __('Options'); ?></th>
      </tr>
  </thead>
  <tbody>
      <?php

      $i = 0;
      foreach($files->readFolders() as $file):
      GetGets::write('page','filemanager');
      $path = $files->getPath() . DS . $file . DS;
      GetGets::write('path', realpath($path));
      GetGets::write('mode', 'open');
      
      
      if ($i % 2)
              $class = ' class="Zebra"';
          else
              $class = null;
      ?>
      <tr<?php echo $class; ?>>
        <?php $link = GetGets::encrypt(); ?>
        <?php

        if($files->dirStatus($path)){
            $foldericon = 'folder';    
        } else {
            $foldericon = 'folder_key';
        }
        
        ?>
          <td class="FileIcon"><a href="?<?php echo $link; ?>"><img src="?<?php echo getIcon($foldericon, true); ?>" border="0" alt="<?php __('Folder'); ?>" title="folder" /></a></td>
          <td class="FileName"><a href="?<?php echo $link; ?>"><span class="color folder"><?php echo $file; ?></span></a></td>
          <td class="FileChmod"><span class="color folder"><?php echo substr(sprintf('%o', @fileperms($files->getPath() . '/' . $file)), -4); ?></span></td>
          <td class="FileSize"><span class="color folder">0 B</span></td>
          <td>
              <ul class="Options">
                  <li><a href="?<?php echo $link; ?>"><?php __('Open'); ?></a></li>
                  <li><a href="#"><?php __('Edit'); ?></a></li>
                  <li><a href="#"><?php __('Delete'); ?></a></li>
              </ul>
          </td>
      </tr>
      <?php $i++; endforeach; ?>
      
      <?php
      foreach($files->readFiles() as $file):
      
      $folderSize += $files->getSize($files->getPath() . '/' . $file);
      
          if ($i % 2)
              $class = ' class="Zebra"';
          else
              $class = null;
              
        GetGets::write('path', GetGets::read('path'));
        GetGets::write('mode', 'view');
        GetGets::write('page', 'file');
        GetGets::write('file', realpath($files->getPath() . '/' . $file));
        
        $link = GetGets::encrypt();
      ?>
      <tr<?php echo $class; ?>>
          <?php if($files->is_Safeless($file, __FILE__,true)) $color = 'safeless'; else $color = 'normal'; ?>
          <?php if($files->getExtension($file) == 'hidden') $color = 'hidden'; ?>
          <td class="FileIcon"><a href="?<?php echo $link; ?>"><img src="?<?php echo getIconExtension($files->getExtension($file), true); ?>" border="0" alt="__('File')" title="<?php echo $files->getExtension($file); ?>" /></a></td>
          <td class="FileName"><a href="?<?php echo $link; ?>"><span class="color <?php echo $color; ?>"><?php echo $file . $files->is_Safeless($file, __FILE__); ?></span></a></td>
          <td class="FileChmod"><span class="color <?php echo $color; ?>"><?php echo substr(sprintf('%o', @fileperms($files->getPath() . '/' . $file)), -4); ?></span></td>
          <td class="FileSize"><span class="color <?php echo $color; ?>"><?php echo $files->getShowSize($files->getPath() . '/' . $file); ?></span></td>
          <td>
              <ul class="Options">
                  <li><a href="?<?php echo $link; ?>"><?php __('View'); ?></a></li>
                  <?php GetGets::write('page', 'fileedit'); ?>
                  <li><a href="?<?php echo GetGets::encrypt(); ?>"><?php __('Edit'); ?></a></li>
                  <?php GetGets::write('page', 'filedelete'); ?>
                  <li><a href="?<?php echo GetGets::encrypt(); ?>"><?php __('Delete'); ?></a></li>
              </ul>
          </td>
      </tr>
      <?php $i++; endforeach; ?>
  </tbody>
  <tfoot>
      <tr>
          <td class="FileIcon"></td>
          <th class="FileName"></th>
          <th class="FileChmod"></th>
          <th class="FileSize"><?php echo __('Total', false) . ': ' . $files->showSize($folderSize); ?></th>
          <th class="FileOptions"></th>
      </tr>
  </tfoot>
</table>