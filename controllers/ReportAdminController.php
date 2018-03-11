<?php

/**
 * Description of ReportAdminController
 *
 * @author Lenovo_note
 */
class ReportAdminController {
		
		public function actionIncomesAllUsersAndRealties() 
		{		
				$realties = RealtyAdmin::getAllRealties();
				$users = User::getAllUsers();	 
				$incomes = IncomeAdmin::getIncomeAllRealtiesAllUsers(); 				
				$finals = IncomeAdmin::getFinalsAllRealtiesAllUsers();      

				// Подключаем вид
				require_once(ROOT . '/views/admin/income/index.php');
				return true;
		}

		
		public function actionIncomesAllRealtiesOneUser($userId) 
		{
				$incomes = Income::getIncomeAllRealties($userId);
				$finals = Income::getFinalsAllRealties($userId);      

				// Подключаем вид
				require_once(ROOT . '/views/admin/income/index.php');
				return true;
		}
}
