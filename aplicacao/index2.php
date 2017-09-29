<?php include_once 'includes/header.php';?>
<?php include_once 'includes/sidebar.php';?>
<section class="content">
<?php
	function getGet( $key ){
		return isset( $_GET[ $key ] ) ? $_GET[ $key ] : null;
	}
	$pag = getGet('pag');
	if( is_file( 'view/'.$pag.'.php' ) )
		include 'view/'.$pag.'.php';
	else
		include 'view/dashboard.php';
?>
</section>
