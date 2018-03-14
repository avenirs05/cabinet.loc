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
}
