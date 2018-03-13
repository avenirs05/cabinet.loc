<?php

class Income 
{
    public static function getIncomeAllRealties($userId) {
		$db = Db::getConnection();

		$result = $db->query('SELECT i.id, i.date_arr, i.date_dep, i.price, i.days, i.sum, i.comment, r.name, r.user_id  
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
					  $incomeList[$i]['id'] = $row['id'];
					  $i++;
		}
		
		return $incomeList;
	}
	
	
    public static function getIncomeOneRealty($userId, $realtyId) {
				$db = Db::getConnection();

				$result = $db->query('SELECT i.id, i.date_arr, i.date_dep, i.price, i.days, i.sum, i.comment, r.name, r.user_id  
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
							  $incomeList[$i]['id'] = $row['id'];
							  $i++;
				}

				return $incomeList;
		}


    public static function getFinalsAllRealties($userId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT ROUND(AVG(price), 2) as avg_price, SUM(days) as sum_days, SUM(sum) as sum_sum from income where income.realty_id IN (select realty.id from realty where realty.user_id=$userId)");				
			
				return $result->fetch();
		}


    public static function getFinalsOneRealty($userId, $realtyId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT ROUND(AVG(price), 2) as avg_price, SUM(days) as sum_days, SUM(sum) as sum_sum from income where income.realty_id IN (select realty.id from realty where realty.user_id=$userId and income.realty_id=$realtyId)");				
			
				return $result->fetch();
		}

}
