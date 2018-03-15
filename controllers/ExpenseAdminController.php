<?php


class ExpenseAdminController 
{
		public function actionAddExpenseGen() 
		{		   
				//d($_POST);

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
}
