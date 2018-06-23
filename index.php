<?php 
	echo $_SERVER['REQUEST_URI'];
	header( 'Location: '.$_SERVER['REQUEST_URI'] ) ;  
	#include_once( ".".$_SERVER['REQUEST_URI']);
?>
