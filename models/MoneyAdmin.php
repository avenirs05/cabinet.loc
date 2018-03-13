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
}
