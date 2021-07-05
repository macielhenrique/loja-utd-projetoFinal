<?php  

	include_once dirname(__DIR__)."/models/config.php";
	session_start();
	session_destroy();
	header("location: $project_index?success=session_ending");

?>