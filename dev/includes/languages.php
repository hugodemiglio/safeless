<?php

//Fiz um sistema de idimas (Hugo)

function __($keyword, $print = true, $info = false, $read = null){
	$system_shows = array(
		'language-info' => array(
			'pt-Br' => array('name'=>'Português','country'=>'Brasil','key'=>'pt-Br'),
			'ch-Tr' => array('name'=>'中文','country'=>'中國','key'=>'ch-Tr'),
		),
		'The Safeless not have permission to view this directory.' => array(
			'pt-Br' => 'O Safeless não tem permissão para ler este diretório.',
			'ch-Tr' => '該 Safeless沒有權限查看此目錄。',
		),
		'Open' => array(
			'pt-Br' => 'Abrir',
			'ch-Tr' => '開放',
		),
		'View' => array(
			'pt-Br' => 'Visualizar',
			'ch-Tr' => '視圖',
		),
		'Edit' => array(
			'pt-Br' => 'Editar',
			'ch-Tr' => '編輯',
		),
		'Delete' => array(
			'pt-Br' => 'Deletar',
			'ch-Tr' => '刪除',
		),
		'Home' => array(
			'pt-Br' => 'Início',
			'ch-Tr' => '家',
		),
		'Settings' => array(
			'pt-Br' => 'Configurações',
			'ch-Tr' => '設置 (settings)',
		),	
		'A new version' => array(
			'pt-Br' => 'Uma nova versão',
			'ch-Tr' => '新版本',
		),
		'of <strong>Safeless</strong> is available' => array(
			'pt-Br' => 'do <strong>Safeless</strong> está disponível, ',
			'ch-Tr' => '的 <strong>Safeless</strong> 可, ',
		),
		'click here' => array(
			'pt-Br' => 'clique aqui',
			'ch-Tr' => '點擊這裡',
		),
		'to upgrade.' => array(
			'pt-Br' => 'para atualizar.',
			'ch-Tr' => '升級。',
		),
		'The <strong>Safe Mode</strong> is ' => array(
			'pt-Br' => 'O <strong>Safe Mode</strong> deste ',
			'ch-Tr' => '該 <strong>安全模式</strong> ',
		),
		'enabled on this server, some features may not work.' => array(
			'pt-Br' => 'servidor está habilitado, alguns recursos podem deixar de funcionar.',
			'ch-Tr' => '啟用此服務器上，一些功能可能無法正常工作。',
		),
		'disabled for this server, enjoy!' => array(
			'pt-Br' => 'servidor está desabilitado, aproveite!',
			'ch-Tr' => '禁用此服務器，享受！',
		),
		'Directory Listing' => array(
			'pt-Br' => 'Listagem de diretórios',
			'ch-Tr' => '目錄列表',
		),
		'File Name' => array(
			'pt-Br' => 'Nome do Arquivo',
			'ch-Tr' => '文件名稱',
		),
		'Permissions' => array(
			'pt-Br' => 'Permissões',
			'ch-Tr' => '權限',
		),
		'Size' => array(
			'pt-Br' => 'Tamanho',
			'ch-Tr' => '大小',
		),
		'Options' => array(
			'pt-Br' => 'Opções',
			'ch-Tr' => '選項',
		),
		'Version' => array(
			'pt-Br' => 'Versão',
			'ch-Tr' => '版本',
		),
		'Define' => array(
			'pt-Br' => 'Definir',
			'ch-Tr' => '集',
		),
		'as the primary language.' => array(
			'pt-Br' => 'como o idioma principal.',
			'ch-Tr' => '作為主要語言。',
		),
		'Language' => array(
			'pt-Br' => 'Idioma',
			'ch-Tr' => '語 (language)',
		),
		'Data Bases' => array(
			'pt-Br' => 'Banco de Dados',
			'ch-Tr' => '數據庫',
		),
		'Total' => array(
			'pt-Br' => 'Total',
			'ch-Tr' => '總',
		),
		'View file contents' => array(
			'pt-Br' => 'Visualizar conteúdo do arquivo',
			'ch-Tr' => 'missing',
		),
);
	
	$default = array('name'=>'English','country'=>'United States','key'=>'en-Us','default'=>1);
	
	if($info === false){
		
		if(empty($read)){
			$read = GetGets::read('lang');
		}
		
		if(!isset($system_shows['language-info'][$read]) OR $read == $default['key']){
			$return = ($keyword);
		} else{
			if(isset($system_shows[$keyword][$read])){
				$return = ($system_shows[$keyword][$read]);
			} else {
				$return = $keyword;
			}
		}
		
		if($print === true){
			echo $return;
		} else {
			return $return;
		}
	} else {
		$system_shows['language-info'][$default['key']] = $default;
		return $system_shows['language-info'];
	}
}



?>