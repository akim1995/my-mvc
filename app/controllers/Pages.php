<?php
	class Pages extends Controller{
		public function __construct() {
			//example of geting Post model
			/* $this->postModel = $this->model('Post'); */
		}	
		public function index() {
			$data = [
				'title' => 'Welcome Page',
			];
			$this->view('pages/index', $data);
		}
		public function about() {
			$data = [
				'title' => 'About Page',
			];
			$this->view('pages/about', $data);
		}
	}

