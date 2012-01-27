<?php
define('HACK_404', true);
define('WP_USE_THEMES', false);
require($_SERVER['DOCUMENT_ROOT'].'/wp-blog-header.php');
if($_POST['action'] == 'm4sq-getdata'){
	m4sq_getdata();
	}
?>