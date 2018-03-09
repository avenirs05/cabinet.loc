<?php

class Income 
{
    public static function getIncomeAllRealties($userId) {
		$db = Db::getConnection();

		$result = $db->query('SELECT i.date_arr, i.date_dep, i.price, i.days, i.sum, i.comment, r.name, r.user_id  
								FROM income i 
									INNER JOIN realty r 
										ON i.realty_id=r.id 
											WHERE r.user_id=' . $userId);		
		
		$incomeList = array();

		$i = 0;
		while ($row = $result->fetch()) {
		  $incomeList[$i]['name'] = $row['name'];
		  $incomeList[$i]['date_arr'] = $row['date_arr'];
		  $incomeList[$i]['date_dep'] = $row['date_dep'];
		  $incomeList[$i]['price'] = $row['price'];
		  $incomeList[$i]['days'] = $row['days'];
		  $incomeList[$i]['sum'] = $row['sum'];
		  $incomeList[$i]['comment'] = $row['comment'];
		  $i++;
		}
		
		return $incomeList;
	}
	
	
    public static function getIncomeOneRealty($userId, $realtyId) {
				$db = Db::getConnection();

				$result = $db->query('SELECT i.date_arr, i.date_dep, i.price, i.days, i.sum, i.comment, r.name, r.user_id  
											FROM income i 
												INNER JOIN realty r 
													ON i.realty_id=r.id 
														WHERE r.user_id=' . $userId . ' and r.id=' . $realtyId);
												
				$incomeList = array();

				$i = 0;
				while ($row = $result->fetch()) {
				  $incomeList[$i]['name'] = $row['name'];
				  $incomeList[$i]['date_arr'] = $row['date_arr'];
				  $incomeList[$i]['date_dep'] = $row['date_dep'];
				  $incomeList[$i]['price'] = $row['price'];
				  $incomeList[$i]['days'] = $row['days'];
				  $incomeList[$i]['sum'] = $row['sum'];
				  $incomeList[$i]['comment'] = $row['comment'];
				  $i++;
				}

				return $incomeList;
		}

}
