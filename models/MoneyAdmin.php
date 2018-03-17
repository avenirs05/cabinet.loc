<?php

class MoneyAdmin
{
		public static function getAllTransactions() 
		{
				$db = Db::getConnection();

				$result = $db->query('SELECT m.id, m.date, m.sum_minus, m.sum_plus, m.comment, u.name as user_name FROM money m INNER JOIN user u ON m.user_id=u.id order by m.date');		
				
				$transList = array();

				$i = 0;
				while ($row = $result->fetch()) {
				  $transList[$i]['date'] = $row['date'];
				  $transList[$i]['sum_minus'] = $row['sum_minus'];
				  $transList[$i]['sum_plus'] = $row['sum_plus'];
				  $transList[$i]['comment'] = $row['comment'];
				  $transList[$i]['id'] = $row['id'];
				  $transList[$i]['user_name'] = $row['user_name'];
				  $i++;
				}
				
				return $transList;
		}


    public static function getTransactionsByUserId($userId) 
    {
				$db = Db::getConnection();

				//$result = $db->query('SELECT * FROM money WHERE money.user_id=' . $userId . ' order by money.date');	

				$result = $db->query("SELECT m.id, m.date, m.sum_minus, m.sum_plus, m.comment, u.name as user_name FROM money m INNER JOIN user u ON m.user_id=u.id WHERE m.user_id=$userId order by m.date");	
				
				$transList = array();

				$i = 0;
				while ($row = $result->fetch()) {
				  $transList[$i]['date'] = $row['date'];
				  $transList[$i]['sum_minus'] = $row['sum_minus'];
				  $transList[$i]['sum_plus'] = $row['sum_plus'];
				  $transList[$i]['comment'] = $row['comment'];
				  $transList[$i]['id'] = $row['id'];
				  $transList[$i]['user_name'] = $row['user_name'];
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


		public static function delBalanceById($balanceId) 
		{
				$db = Db::getConnection();

				$sql = 'DELETE FROM money WHERE id = :id';

				$result = $db->prepare($sql);
				$result->bindParam(':id', $balanceId, PDO::PARAM_STR);

				return $result->execute();
		}
}
