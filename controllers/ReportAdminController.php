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


		public function actionIncomesOneRealtyOneUser($userId, $realtyId) 
		{				
				$incomes = Income::getIncomeOneRealty($userId, $realtyId);	
				$finals = Income::getFinalsOneRealty($userId, $realtyId);     

				// Подключаем вид
				require_once(ROOT . '/views/admin/income/index.php');
				return true;
		}


		public function actionExpensesOwnerAllUsersAndRealties() 
		{		
				$expenses = ExpenseAdmin::getExpensesOwnerAllRealtiesAllUsers(); 				
				$finals = ExpenseAdmin::getFinalsOwnerAllRealtiesAllUsers();      

				// Подключаем вид
				require_once(ROOT . '/views/admin/expenses/index.php');
				return true;
		}


		public function actionExpensesOwnerAllRealtiesOneUser($userId) 
		{		
				$expenses = Expense::getExpenseOwnerAllRealties($userId); 				
				$finals = Expense::getFinalsOwnerAllRealties($userId);      

				// Подключаем вид
				require_once(ROOT . '/views/admin/expenses/index.php');
				return true;
		}

		public function actionExpensesOwnerOneRealtyOneUser() 
		{		

		}
}
