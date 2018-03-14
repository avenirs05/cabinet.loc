<?php

class RealtyAdminController 
{
		public function actionAddRealty() {
				$realtyName = $_POST['name'];
				$userName = $_POST['userName'];
				
				$user = User::getUserByName($userName);
				
				RealtyAdmin::addRealty($realtyName, $user['id']);

				return true;
	}

}
