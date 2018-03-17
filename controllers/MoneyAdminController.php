<?php

class MoneyAdminController 
{
		public function actionAddMoney() 
		{		   
				$date = $_POST['date']; 
				$gotMoneyAdmin = $_POST['gotMoneyAdmin']; 
				$gaveMoneyAdmin = $_POST['gaveMoneyAdmin']; 
				$userName = $_POST['userName'];
				$comment = $_POST['comment'];

				$user = User::getUserByName($userName);

				MoneyAdmin::addMoney($date, $gotMoneyAdmin, $gaveMoneyAdmin, $user['id'], $comment);	

				return true;
		}


		public function actionDelMoney() 
		{		   
				$balanceId = $_POST['balanceId']; 
				
				$result = MoneyAdmin::delBalanceById($balanceId);	

				return true;
		}


		public function actionEditMoney() 
		{   
				$date = $_POST['date']; 
				$got = $_POST['got'];
				$gave = $_POST['gave'];
				$comment = $_POST['comment'];
				$userId = $_POST['userId'];
				$id = $_POST['id'];

				if (!$got) {
							$got = 0;
				}

				if (!$gave) {
							$gave = 0;
				}
		
				$result = MoneyAdmin::updateBalanceById($date, $got, $gave, $comment, $userId, $id);	

				return true;
		}
}
