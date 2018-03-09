<?php

class ReportController 
{
		public function actionIncomesAll() {
				$userId = $_SESSION['userId'];

				$realties = Realty::getRealtiesOfUser($userId);
				$incomes = Income::getIncomeAllRealties($userId);     

				// Подключаем вид
				require_once(ROOT . '/views/cabinet/income/all.php');
				return true;
		}
		
		
		public function actionIncomesOne($realtyId) {
				$userId = $_SESSION['userId'];

				$incomes = Income::getIncomeOneRealty($userId, $realtyId);	    

				// Подключаем вид
				require_once(ROOT . '/views/cabinet/income/one.php');
				return true;
	  }

		public function actionExpensesOwnerAll() {
				$userId = $_SESSION['userId'];
				
				$expenses = Expense::getExpenseOwnerAllRealties($userId);
				
				// Подключаем вид
				require_once(ROOT . '/views/cabinet/expenses_owner/all.php');
				return true;
		}


		public function actionExpensesOwnerOne($realtyId) {
				$userId = $_SESSION['userId'];

				$expenses = Expense::getExpenseOwnerOneRealty($userId, $realtyId);	    

				// Подключаем вид
				require_once(ROOT . '/views/cabinet/expenses_owner/one.php');
				return true;
		}


		public function actionExpensesGenAll() {
				$userId = $_SESSION['userId'];
				
				$expenses = Expense::getExpenseGenAllRealties($userId);
				
				// Подключаем вид
				require_once(ROOT . '/views/cabinet/expenses_gen/all.php');
				return true;
		}


		public function actionExpensesGenOne($realtyId) {
				$userId = $_SESSION['userId'];

				$expenses = Expense::getExpenseGenOneRealty($userId, $realtyId);	    

				// Подключаем вид
				require_once(ROOT . '/views/cabinet/expenses_gen/one.php');
				return true;
		}


		public function actionMoneyIndex() {
				$userId = $_SESSION['userId'];
				
				$money = Money::getTransactions($userId);
				
				// Подключаем вид
				require_once(ROOT . '/views/cabinet/money/index.php');
				return true;
		}

}
