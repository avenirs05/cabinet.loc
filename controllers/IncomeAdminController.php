<?php


class IncomeAdminController 
{
		public function actionAddIncome() 
		{		   
				$dateArr = convertDateToSqlFormat($_POST['date-arr']);
				$dateDep = convertDateToSqlFormat($_POST['date-dep']);
				$price = $_POST['price'];
				$sum = $_POST['sum'];
				$comment = $_POST['comment'];
				$realtyName = $_POST['realtyName'];
				
				$realty = RealtyAdmin::getRealtyByName($realtyName);				

				IncomeAdmin::addIncome($dateArr, $dateDep, $price, $sum, $comment, $realty['id']);

				return true;
		}


		public function actionDelIncome() 
		{		   
				$incomeId = $_POST['incomeId']; 
				
				$result = IncomeAdmin::delIncomeById($incomeId);	

				return true;
		}


		public static function actionEditIncome() 
		{
				$incomeId = $_POST['incomeId']; 
				$dateArr = convertDateToSqlFormat($_POST['dateArr']); 
				$dateDep = convertDateToSqlFormat($_POST['dateDep']); 
				$price = $_POST['price']; 
				$sum = $_POST['sum']; 
				$comment = $_POST['comment']; 
				$realtyId = $_POST['realtyId']; 
		
				$result = IncomeAdmin::updateIncomeById($incomeId, $dateArr, $dateDep, $price, $sum, $comment, $realtyId);	

				return true;
		}
}
