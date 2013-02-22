<?php
class Dashboard_controller{

	function __construct(){

	}

	function home(){

		echo Views::instance()->render('admin/dashboard.html');

	}

	function __destruct(){

	}

}
?>