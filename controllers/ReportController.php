<?php

class ReportController 
{
		public function actionIncomesAll() {
				$userId = $_SESSION['userId'];

				$incomes = Income::getIncomeAllRealties($userId);
				$finals = Income::getFinalsAllRealties($userId);      

				// Подключаем вид
				require_once(ROOT . '/views/cabinet/income/index.php');
				return true;
		}
		
		
		public function actionIncomesOne($realtyId) {
				$userId = $_SESSION['userId'];

				$incomes = Income::getIncomeOneRealty($userId, $realtyId);	
				$finals = Income::getFinalsOneRealty($userId, $realtyId);     

				// Подключаем вид
				require_once(ROOT . '/views/cabinet/income/index.php');
				return true;
	  }


		public function actionExpensesOwnerAll() {
				$userId = $_SESSION['userId'];
				
				$expenses = Expense::getExpenseOwnerAllRealties($userId);
				$finals = Expense::getFinalsOwnerAllRealties($userId);
				
				// Подключаем вид
				require_once(ROOT . '/views/cabinet/expenses/index.php');
				return true;
		}


		public function actionExpensesOwnerOne($realtyId) {
				$userId = $_SESSION['userId'];

				$expenses = Expense::getExpenseOwnerOneRealty($userId, $realtyId);	    
				$finals = Expense::getFinalsOwnerOneRealty($userId, $realtyId);

				// Подключаем вид
				require_once(ROOT . '/views/cabinet/expenses/index.php');
				return true;
		}


		public function actionExpensesGenAll() {
				$userId = $_SESSION['userId'];
				
				$expenses = Expense::getExpenseGenAllRealties($userId);
				$finals = Expense::getFinalsGenAllRealties($userId);
				
				// Подключаем вид
				require_once(ROOT . '/views/cabinet/expenses/index.php');
				return true;
		}


		public function actionExpensesGenOne($realtyId) {
				$userId = $_SESSION['userId'];

				$expenses = Expense::getExpenseGenOneRealty($userId, $realtyId);	  
				$finals = Expense::getFinalsGenOneRealty($userId, $realtyId);

				// Подключаем вид
				require_once(ROOT . '/views/cabinet/expenses/index.php');
				return true;
		}


		public function actionMoneyIndex() {
				$userId = $_SESSION['userId'];
				
				$money = Money::getTransactions($userId);
				$finals = Money::getFinals($userId);
				
				// Подключаем вид
				require_once(ROOT . '/views/cabinet/money/index.php');
				return true;
		}

}
