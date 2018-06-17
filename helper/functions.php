<?php

require(__DIR__. "/../config/config.php");
require(__DIR__. "/../config/constants.php");

function getUrlPathName(){	
    echo basename("$_SERVER[REQUEST_URI]", ".php");
}

function getTitle(){
	if(basename("$_SERVER[REQUEST_URI]", ".php") == ''){
		return "Home";
	}else{
		return ucfirst(basename("$_SERVER[REQUEST_URI]", ".php"));
	}
}

function urlRewrite($url){
	include(__DIR__.'/../'. $url . '.php');
}

?>