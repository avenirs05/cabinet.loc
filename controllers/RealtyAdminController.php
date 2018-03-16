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


		public function actionGetRealtiesForSelect() 
		{		   
				$realties = RealtyAdmin::getAllRealties();				
				
				require_once(ROOT . '/views/admin/realties/for-select.php');
				return true;
		}


		public function actionDelRealty() 
		{		   
				$realtyId = $_POST['realtyId']; 
				
				$result = Realty::delRealtyById($realtyId);	

				return true;
		}

}
