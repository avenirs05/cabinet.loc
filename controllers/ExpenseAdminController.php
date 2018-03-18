<?php


class ExpenseAdminController 
{
		public function actionAddExpenseGen() 
		{		   
				$date = $_POST['date'];
				$good = $_POST['good'];
				$quantity = $_POST['quantity'];
				$price = $_POST['price'];
				$sum = $_POST['sum'];
				$source = $_POST['source'];
				$repEmail = $_POST['repEmail'];
				$comment = $_POST['comment'];
				$realtyName = $_POST['realtyName'];
				
				$realty = RealtyAdmin::getRealtyByName($realtyName);				

				ExpenseAdmin::addExpenseGen($date, $good, $quantity, $price, $sum, $source, $repEmail, $comment, $realty['id']);

				return true;
		}


		public function actionAddExpenseOwner() 
		{		   
				$date = $_POST['date'];
				$good = $_POST['good'];
				$quantity = $_POST['quantity'];
				$price = $_POST['price'];
				$sum = $_POST['sum'];
				$source = $_POST['source'];
				$repEmail = $_POST['repEmail'];
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
				d($_POST);
				// $incomeId = $_POST['incomeId']; 
				// $dateArr = $_POST['dateArr']; 
				// $dateDep = $_POST['dateDep']; 
				// $price = $_POST['price']; 
				// $sum = $_POST['sum']; 
				// $comment = $_POST['comment']; 
				// $realtyId = $_POST['realtyId']; 
		
				$result = ExpenseAdmin::updateExpenseById();	

				return true;
		}

}
