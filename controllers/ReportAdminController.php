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


		public function actionIncomesOneRealtyAllUsers($realtyId) 
		{				
				$incomes = IncomeAdmin::getIncomeOneRealtyAllUsers($realtyId);	
				$finals = IncomeAdmin::getFinalsOneRealtyAllUsers($realtyId);     

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


		public function actionExpensesOwnerOneRealtyOneUser($userId, $realtyId) 
		{		
				$expenses = Expense::getExpenseOwnerOneRealty($userId, $realtyId);	
				$finals = Expense::getFinalsOwnerOneRealty($userId, $realtyId);     

				// Подключаем вид
				require_once(ROOT . '/views/admin/expenses/index.php');
				return true;
		}


		public function actionExpensesOwnerOneRealtyAllUsers($realtyId) 
		{		
				$expenses = ExpenseAdmin::getExpensesOwnerOneRealtyAllUsers($realtyId); 				
				$finals = ExpenseAdmin::getFinalsOwnerOneRealtyAllUsers($realtyId);      

				// Подключаем вид
				require_once(ROOT . '/views/admin/expenses/index.php');
				return true;
		}


		public function actionExpensesGenAllUsersAndRealties() 
		{		
				$expenses = ExpenseAdmin::getExpensesGenAllRealtiesAllUsers(); 				
				$finals = ExpenseAdmin::getFinalsGenAllRealtiesAllUsers();      

				// Подключаем вид
				require_once(ROOT . '/views/admin/expenses/index.php');
				return true;
		}


		public function actionExpensesGenAllRealtiesOneUser($userId) 
		{		
				$expenses = Expense::getExpenseGenAllRealties($userId); 				
				$finals = Expense::getFinalsGenAllRealties($userId);      

				// Подключаем вид
				require_once(ROOT . '/views/admin/expenses/index.php');
				return true;
		}


		public function actionExpensesGenOneRealtyOneUser($userId, $realtyId) 
		{		
				$expenses = Expense::getExpenseGenOneRealty($userId, $realtyId);	
				$finals = Expense::getFinalsGenOneRealty($userId, $realtyId);     

				// Подключаем вид
				require_once(ROOT . '/views/admin/expenses/index.php');
				return true;
		}


		public function actionExpensesGenOneRealtyAllUsers($realtyId) 
		{		
				$expenses = ExpenseAdmin::getExpensesGenOneRealtyAllUsers($realtyId); 				
				$finals = ExpenseAdmin::getFinalsGenOneRealtyAllUsers($realtyId);      

				// Подключаем вид
				require_once(ROOT . '/views/admin/expenses/index.php');
				return true;
		}

		
		public function actionMoneyAllUsers() {			
				$money = MoneyAdmin::getAllTransactions();
				$finals = MoneyAdmin::getAllFinals();
				
				// Подключаем вид
				require_once(ROOT . '/views/admin/money/index.php');
				return true;
		}


		public function actionMoneyOneUser($userId) {			
				$money = Money::getTransactions($userId);
				$finals = Money::getFinals($userId);
				
				// Подключаем вид
				require_once(ROOT . '/views/admin/money/index.php');
				return true;
		}


		public function actionRealtiesList() 
		{		   

				$realties = RealtyAdmin::getAllRealtiesWithOwners();

				// Подключаем вид
				require_once(ROOT . '/views/admin/realties/index.php');
				return true;
		}

}
