<?php

class Controller_Main extends Controller
{
	function __construct()
	{
		$this->model = new Model_Main();
		$this->view = new View('main_view.php');
		$this->view->add_style('main.css');
		$this->view->add_script('main.js');
	}

	function action_index()
	{	
		$data = $this->model->get_data();
		$this->view->render($data);
	}
}

?>