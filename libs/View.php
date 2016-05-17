<?php 

class View {
	function __construct() {

}

	public function render($name){
		require 'views/header.php';
		require 'views/nav/index.php';
		require 'views/' . $name . '.php';
		require 'views/footer.php';

	}
	

}
