<?php


class ExpenseAdminController 
{
		public function actionAddExpenseGen() 
		{		   
				$date = convertDateToSqlFormat($_POST['date']);
				$good = $_POST['good'];
				$quantity = $_POST['quantity'];
				$price = $_POST['price'];
				$sum = $_POST['sum'];
				$source = $_POST['source'];
				$repEmail =  convertDateToSqlFormat($_POST['repEmail']);
				$comment = $_POST['comment'];
				$realtyName = $_POST['realtyName'];
				echo $date;
				
				$realty = RealtyAdmin::getRealtyByName($realtyName);				

				ExpenseAdmin::addExpenseGen($date, $good, $quantity, $price, $sum, $source, $repEmail, $comment, $realty['id']);

				return true;
		}


		public function actionAddExpenseOwner() 
		{		   
				$date = convertDateToSqlFormat($_POST['date']);
				$good = $_POST['good'];
				$quantity = $_POST['quantity'];
				$price = $_POST['price'];
				$sum = $_POST['sum'];
				$source = $_POST['source'];
				$repEmail = convertDateToSqlFormat($_POST['repEmail']);
				$comment = $_POST['comment'];
				$realtyName = $_POST['realtyName'];
				
				$realty = RealtyAdmin::getRealtyByName($realtyName);				

				ExpenseAdmin::addExpenseOwner($date, $good, $quantity, $price, $sum, $source, $repEmail, $comment, $realty['id']);

				return true;
		}


		public function actionDelExpense() 
		{		   
				$expenseId = $_POST['expenseId']; 
				
				$result = ExpenseAdmin::delExpenseById($expenseId);	

				return true;
		}


		public static function actionEditExpense() 
		{
				$expId = $_POST['expId']; 
				$date = convertDateToSqlFormat($_POST['date']);
				$good = $_POST['good'];	
				$quantity = $_POST['quantity'];			
				$price = $_POST['price'];
				$sum = $_POST['sum'];
				$source = $_POST['source'];
				$report = convertDateToSqlFormat($_POST['report']);
				$comment = $_POST['comment'];
				$realtyId = $_POST['realtyId'];
		
				$result = ExpenseAdmin::updateExpenseById($expId, $date, $good, $quantity, $price, $sum, $source, $report, $comment, $realtyId);	

				return true;
		}

}
