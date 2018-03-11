<?php

/**
 * Description of IncomeAdmin
 *
 * @author Lenovo_note
 */
class IncomeAdmin 
{

		public static function getIncomeAllRealtiesAllUsers() {
				$db = Db::getConnection();

				$result = $db->query('SELECT i.date_arr, i.date_dep, i.price, i.days, i.sum, i.comment, r.name, r.user_id  
										FROM income i 
											INNER JOIN realty r 
												ON i.realty_id=r.id order by i.date_dep desc');		

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

    public static function getFinalsAllRealtiesAllUsers() {
				$db = Db::getConnection();

				$result = $db->query("SELECT ROUND(AVG(price), 2) as avg_price, SUM(days) as sum_days, SUM(sum) as sum_sum from income");				
			
				return $result->fetch();
		}

 //    public static function getIncomeAllRealtiesByUser($userId) {
	// 			$db = Db::getConnection();

	// 			$result = $db->query('SELECT i.date_arr, i.date_dep, i.price, i.days, i.sum, i.comment, r.name, r.user_id  
	// 									FROM income i 
	// 										INNER JOIN realty r 
	// 											ON i.realty_id=r.id 
	// 												WHERE r.user_id=' . $userId);		
				
	// 			$incomeList = array();

	// 			$i = 0;
	// 			while ($row = $result->fetch()) {
	// 						  $incomeList[$i]['name'] = $row['name'];
	// 						  $incomeList[$i]['date_arr'] = $row['date_arr'];
	// 						  $incomeList[$i]['date_dep'] = $row['date_dep'];
	// 						  $incomeList[$i]['price'] = $row['price'];
	// 						  $incomeList[$i]['days'] = $row['days'];
	// 						  $incomeList[$i]['sum'] = $row['sum'];
	// 						  $incomeList[$i]['comment'] = $row['comment'];
	// 						  $i++;
	// 			}
				
	// 	return $incomeList;
	// }
}
