<?php
namespace web\controller;
use core\view;
	class index
	{
		protected $view;
		public function __construct()
		{
			$this->view=new view();
		}
		public function show()
		{
			return $this->view->make('index')->with('version','1.0');
		}
		public function login()
		{
			return $this->view->make('login');
		}
	}
