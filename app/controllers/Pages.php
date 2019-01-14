<?php
	class Pages {
		public function __construct() {
			echo 'Pages loaded';
		}	
		public function index() {
			echo "<br>index func";
		}
		public function about($id) {
			echo "<br>about func id:" . $id;
		}
	}
