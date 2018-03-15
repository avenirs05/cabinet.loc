<?php

/**
 * Description of RealtyExpense
 *
 * @author Lenovo_note
 */
class ExpenseAdmin 
{
		public static function getExpensesOwnerAllRealtiesAllUsers() {
				$db = Db::getConnection();

				$result = $db->query("SELECT expense.id, expense.date, expense.name, expense.quantity, expense.price, expense.source, expense.sum, expense.comment, expense.report, realty.name as realty_name
						FROM expense
							INNER JOIN exp_type 
								ON expense.exp_type_id=exp_type.id 
									INNER JOIN realty
										ON expense.realty_id=realty.id 
											WHERE exp_type.name='owner'");

				$expenseList = array();

				$i = 0;
				while ($row = $result->fetch()) {
						$expenseList[$i]['date'] = $row['date'];
						$expenseList[$i]['realty_name'] = $row['realty_name'];
						$expenseList[$i]['name'] = $row['name'];
						$expenseList[$i]['quantity'] = $row['quantity'];
						$expenseList[$i]['price'] = $row['price'];
						$expenseList[$i]['sum'] = $row['sum'];
						$expenseList[$i]['source'] = $row['source'];
						$expenseList[$i]['report'] = $row['report'];
						$expenseList[$i]['comment'] = $row['comment'];
						$expenseList[$i]['id'] = $row['id'];
						$i++;
				}

				return $expenseList;
		}		


		public static function getExpensesOwnerOneRealtyAllUsers($realtyId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT expense.id, expense.date, expense.name, expense.quantity, expense.price, expense.source, expense.sum, expense.comment, expense.report, realty.name as realty_name
						FROM expense
							INNER JOIN exp_type 
								ON expense.exp_type_id=exp_type.id 
									INNER JOIN realty
										ON expense.realty_id=realty.id 
											WHERE exp_type.name='owner' and expense.realty_id=$realtyId");

				$expenseList = array();

				$i = 0;
				while ($row = $result->fetch()) {
						$expenseList[$i]['date'] = $row['date'];
						$expenseList[$i]['realty_name'] = $row['realty_name'];
						$expenseList[$i]['name'] = $row['name'];
						$expenseList[$i]['quantity'] = $row['quantity'];
						$expenseList[$i]['price'] = $row['price'];
						$expenseList[$i]['sum'] = $row['sum'];
						$expenseList[$i]['source'] = $row['source'];
						$expenseList[$i]['report'] = $row['report'];
						$expenseList[$i]['comment'] = $row['comment'];
						$expenseList[$i]['id'] = $row['id'];
						$i++;
				}

				return $expenseList;
		}		


    public static function getFinalsOwnerAllRealtiesAllUsers() {
				$db = Db::getConnection();

				$result = $db->query("SELECT SUM(expense.sum) as sum_sum from expense where expense.realty_id IN (select realty.id from realty where expense.exp_type_id=(select exp_type.id from exp_type where exp_type.name='owner'))");				
			
				return $result->fetch();
		}


    public static function getFinalsOwnerOneRealtyAllUsers($realtyId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT SUM(expense.sum) as sum_sum from expense where expense.realty_id IN (select realty.id from realty where expense.exp_type_id=(select exp_type.id from exp_type where exp_type.name='owner' and expense.realty_id=$realtyId))");				
			
				return $result->fetch();
		}


		public static function getExpensesGenAllRealtiesAllUsers() {
				$db = Db::getConnection();

				$result = $db->query("SELECT expense.id, expense.date, expense.name, expense.quantity, expense.price, expense.source, expense.sum, expense.comment, expense.report, realty.name as realty_name
						FROM expense
							INNER JOIN exp_type 
								ON expense.exp_type_id=exp_type.id 
									INNER JOIN realty
										ON expense.realty_id=realty.id 
											WHERE exp_type.name='general'");

				$expenseList = array();

				$i = 0;
				while ($row = $result->fetch()) {
						$expenseList[$i]['date'] = $row['date'];
						$expenseList[$i]['realty_name'] = $row['realty_name'];
						$expenseList[$i]['name'] = $row['name'];
						$expenseList[$i]['quantity'] = $row['quantity'];
						$expenseList[$i]['price'] = $row['price'];
						$expenseList[$i]['sum'] = $row['sum'];
						$expenseList[$i]['source'] = $row['source'];
						$expenseList[$i]['report'] = $row['report'];
						$expenseList[$i]['comment'] = $row['comment'];
						$expenseList[$i]['id'] = $row['id'];
						$i++;
				}

				return $expenseList;
		}		


    public static function getFinalsGenAllRealtiesAllUsers() {
				$db = Db::getConnection();

				$result = $db->query("SELECT SUM(expense.sum) as sum_sum from expense where expense.realty_id IN (select realty.id from realty where expense.exp_type_id=(select exp_type.id from exp_type where exp_type.name='general'))");				
			
				return $result->fetch();
		}


		public static function getExpensesGenOneRealtyAllUsers($realtyId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT expense.id, expense.date, expense.name, expense.quantity, expense.price, expense.source, expense.sum, expense.comment, expense.report, realty.name as realty_name
						FROM expense
							INNER JOIN exp_type 
								ON expense.exp_type_id=exp_type.id 
									INNER JOIN realty
										ON expense.realty_id=realty.id 
											WHERE exp_type.name='general' and expense.realty_id=$realtyId");

				$expenseList = array();

				$i = 0;
				while ($row = $result->fetch()) {
						$expenseList[$i]['date'] = $row['date'];
						$expenseList[$i]['realty_name'] = $row['realty_name'];
						$expenseList[$i]['name'] = $row['name'];
						$expenseList[$i]['quantity'] = $row['quantity'];
						$expenseList[$i]['price'] = $row['price'];
						$expenseList[$i]['sum'] = $row['sum'];
						$expenseList[$i]['source'] = $row['source'];
						$expenseList[$i]['report'] = $row['report'];
						$expenseList[$i]['comment'] = $row['comment'];
						$expenseList[$i]['id'] = $row['id'];
						$i++;
				}

				return $expenseList;
		}	


    public static function getFinalsGenOneRealtyAllUsers($realtyId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT SUM(expense.sum) as sum_sum from expense where expense.realty_id IN (select realty.id from realty where expense.exp_type_id=(select exp_type.id from exp_type where exp_type.name='general' and expense.realty_id=$realtyId))");				
			
				return $result->fetch();
		}


    public static function addExpenseGen($date, $good, $quantity, $price, $sum, $source, $repEmail, $comment, $realtyId) {
    		$db = Db::getConnection();

    		$exp_type_id = 1;

    		$sql = 'INSERT INTO expense (date, name, quantity, price, sum, source, comment, report, realty_id, exp_type_id) '
    		        . 'VALUES (:date, :name, :quantity, :price, :sum, :source, :comment, :report, :realty_id, :exp_type_id)';    		

    		$result = $db->prepare($sql);
    		$result->bindParam(':date', $date, PDO::PARAM_STR);
    		$result->bindParam(':name', $good, PDO::PARAM_STR);
    		$result->bindParam(':quantity', $quantity, PDO::PARAM_STR);
    		$result->bindParam(':price', $price, PDO::PARAM_STR);
    		$result->bindParam(':sum', $sum, PDO::PARAM_STR);
    		$result->bindParam(':source', $source, PDO::PARAM_STR);
    		$result->bindParam(':comment', $comment, PDO::PARAM_STR);
    		$result->bindParam(':report', $repEmail, PDO::PARAM_STR);
    		$result->bindParam(':realty_id', $realtyId, PDO::PARAM_STR);
    		$result->bindParam(':exp_type_id', $exp_type_id, PDO::PARAM_STR);

    		return $result->execute();
		}
}
