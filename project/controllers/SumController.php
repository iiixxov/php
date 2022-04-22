<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class SumController extends Controller {
		public function sum($params){
			echo $params['var1']+$params['var2']+$params['var3'];
		}
	}
?>