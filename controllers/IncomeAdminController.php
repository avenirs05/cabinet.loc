<?php


class IncomeAdminController 
{
		public function actionAddIncome() 
		{		   
				$dateArr = $_POST['date-arr'];
				$dateDep = $_POST['date-dep'];
				$price = $_POST['price'];
				$sum = $_POST['sum'];
				$comment = $_POST['comment'];
				$realtyName = $_POST['realtyName'];
				
				//d($_POST);

				$realty = RealtyAdmin::getRealtyByName($realtyName);				

				IncomeAdmin::addIncome($dateArr, $dateDep, $price, $sum, $comment, $realty['id']);

				return true;
		}
}
