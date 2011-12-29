<?php

if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
        $file_array = explode('.', $file);
        $ext = array_pop($file_array);
        $arquivo = implode('.', $file_array);
        
        if($ext == 'png') {
            $conteudo_imagem = base64_encode(file_get_contents($file));
            $name_icon = str_replace('ext', 'file', $arquivo);
            rename("./" . $file, str_replace('ext', 'file', $file));
            echo "\$icons['{$name_icon}'] = '{$conteudo_imagem}';\n";
        }
        
        
    }
    closedir($handle);
}


//echo 

?>