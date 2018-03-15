<?php

class MoneyAdmin
{
		public static function getAllTransactions() 
		{
				$db = Db::getConnection();

				$result = $db->query('SELECT * FROM money order by money.date');		
				
				$transList = array();

				$i = 0;
				while ($row = $result->fetch()) {
				  $transList[$i]['date'] = $row['date'];
				  $transList[$i]['sum_minus'] = $row['sum_minus'];
				  $transList[$i]['sum_plus'] = $row['sum_plus'];
				  $transList[$i]['comment'] = $row['comment'];
				  $transList[$i]['id'] = $row['id'];
				  $i++;
				}
				
				return $transList;
		}


		public static function getAllFinals() 
		{
				$db = Db::getConnection();

				$result = $db->query("SELECT ROUND(SUM(sum_minus)) as sum_minus, ROUND(SUM(sum_plus)) as sum_plus from money");				
			
				return $result->fetch();
		}


		public static function addMoney($date, $gotMoneyAdmin, $gaveMoneyAdmin, $userId, $comment) 
		{
		  	$db = Db::getConnection();

		  	$sql = 'INSERT INTO money (date, sum_minus, sum_plus, comment, user_id) '
		  	        . 'VALUES (:date, :sum_minus, :sum_plus, :comment, :user_id)';

		  	$result = $db->prepare($sql);
		  	$result->bindParam(':date', $date, PDO::PARAM_STR);
		  	$result->bindParam(':sum_minus', $gotMoneyAdmin, PDO::PARAM_STR);
		  	$result->bindParam(':sum_plus', $gaveMoneyAdmin, PDO::PARAM_STR);
		  	$result->bindParam(':user_id', $userId, PDO::PARAM_STR);
		  	$result->bindParam(':comment', $comment, PDO::PARAM_STR);

		  	return $result->execute();
		}
}
