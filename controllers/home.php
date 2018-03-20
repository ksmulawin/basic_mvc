<?php
	Class Home extends Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			$this->view->render('views/home/home.php',false);
		}
	}