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

				$result = $db->query('SELECT i.id, i.date_arr, i.date_dep, i.price, i.days, i.sum, i.comment, r.name, r.user_id  
										FROM income i 
											INNER JOIN realty r 
												ON i.realty_id=r.id order by i.date_arr');		

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


		public static function getIncomeOneRealtyAllUsers($realtyId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT i.id, i.date_arr, i.date_dep, i.price, i.days, i.sum, i.comment, r.name, r.user_id  
										FROM income i 
											INNER JOIN realty r 
												ON i.realty_id=r.id where i.realty_id=$realtyId order by i.date_arr");		

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


    public static function getFinalsAllRealtiesAllUsers() {
				$db = Db::getConnection();

				$result = $db->query("SELECT ROUND(AVG(price), 2) as avg_price, SUM(days) as sum_days, SUM(sum) as sum_sum from income");				
			
				return $result->fetch();
		}

    public static function getFinalsOneRealtyAllUsers($realtyId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT ROUND(AVG(price), 2) as avg_price, SUM(days) as sum_days, SUM(sum) as sum_sum from income where income.realty_id=$realtyId");				
			
				return $result->fetch();
		}


    public static function addIncome($dateArr, $dateDep, $price, $sum, $comment, $realtyId) {
    		$db = Db::getConnection();

    		$sql = 'INSERT INTO income (date_arr, date_dep, price, days, sum, comment, realty_id) '
    		        . 'VALUES (:date_arr, :date_dep, :price, TO_DAYS(date_dep) - TO_DAYS(date_arr), :sum, :comment, :realty_id)';    	

    		$result = $db->prepare($sql);
    		$result->bindParam(':date_arr', $dateArr, PDO::PARAM_STR);
    		$result->bindParam(':date_dep', $dateDep, PDO::PARAM_STR);
    		$result->bindParam(':price', $price, PDO::PARAM_STR);
   	  	$result->bindParam(':comment', $comment, PDO::PARAM_STR);
    		$result->bindParam(':sum', $sum, PDO::PARAM_STR);    		
    		$result->bindParam(':realty_id', $realtyId, PDO::PARAM_STR);

    		return $result->execute();
		}


		public static function delIncomeById($incomeId) 
		{
				$db = Db::getConnection();

				$sql = 'DELETE FROM income WHERE id = :id';

				$result = $db->prepare($sql);
				$result->bindParam(':id', $incomeId, PDO::PARAM_STR);

				return $result->execute();
		}


		public static function updateIncomeById($incomeId, $dateArr, $dateDep, $price, $sum, $comment, $realtyId) {				

		    $db = Db::getConnection();
		    
		    $result = $db->query("UPDATE income 
			    												SET 
					    												date_arr='$dateArr', 
					    												date_dep='$dateDep', 
					    												price=$price, 
																			sum=$sum,
																			comment='$comment',
																			days=TO_DAYS(date_dep) - TO_DAYS(date_arr),
																			realty_id=$realtyId
			    																WHERE id=$incomeId");
		}


}
