<?php

/**
 * Description of RealtyMoney
 *
 * @author Lenovo_note
 */
class MoneyAdmin
{
		public static function getAllTransactions() 
		{
				$db = Db::getConnection();

				$result = $db->query('SELECT * FROM money');		
				
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


		public static function addMoney() 
		{
		  	// $db = Db::getConnection();

		  	// $sql = 'INSERT INTO user (name, email, password, phone) '
		  	//         . 'VALUES (:user_name, :user_email, :user_pass, :user_phone)';

		  	// $result = $db->prepare($sql);
		  	// $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
		  	// $result->bindParam(':user_email', $userEmail, PDO::PARAM_STR);
		  	// $result->bindParam(':user_pass', $userPass, PDO::PARAM_STR);
		  	// $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);

		  	// return $result->execute();
		}
}
