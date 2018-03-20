<?php
	class Model{

		static $host = '';
		static $user = '';
		static $password = '';
		static $database = '';
		
		function __construct(){
			Session::init();
		}
	}