<?php

class Money 
{
    public static function getTransactions($userId) {
				$db = Db::getConnection();

				$result = $db->query('SELECT * FROM money WHERE money.user_id=' . $userId);		
				
				$transList = array();

				$i = 0;
				while ($row = $result->fetch()) {
				  $transList[$i]['date'] = $row['date'];
				  $transList[$i]['sum_minus'] = $row['sum_minus'];
				  $transList[$i]['sum_plus'] = $row['sum_plus'];
				  $transList[$i]['comment'] = $row['comment'];
				  $i++;
				}
				
				return $transList;
	}
	

    public static function getFinals($userId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT ROUND(SUM(sum_minus)) as sum_minus, ROUND(SUM(sum_plus)) as sum_plus from money where money.user_id=$userId");				
			
				return $result->fetch();
		}
}
