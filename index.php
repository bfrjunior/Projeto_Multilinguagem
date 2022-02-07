<?php
	session_start();

	if(!empty($_GET['lang'])){
		$_SESSION['lang'] = $_GET['lang'];
	}

	require_once 'language.class.php';
	$lang = new language();

	
?>

<a href="index.php?lang=en">English</a>
<a href="index.php?lang=pt">Português</a>
<hr>

Liguagem Denifida: <?php echo $lang->getLanguage(); ?>
<hr>

<button> <?php echo $lang->get('BUY');?> </button>