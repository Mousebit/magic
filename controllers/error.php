<?php 

class Error extends Controller {

	function __construct(){
		parent::__construct();
		echo '404. The path you have traveled does not appear to exist.';
		

	}

	function index(){
		$this->view->msg = '404. The path you traveled does not appear to exist.';
		$this->view->render('error/index');
	}

}
