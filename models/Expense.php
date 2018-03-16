<?php

class Expense 
{
		public static function getExpenseOwnerAllRealties($userId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT expense.id, expense.date, expense.name, expense.quantity, expense.price, expense.source, expense.sum, expense.comment, expense.report, expense.exp_type_id, realty.name as realty_name
						FROM expense
							INNER JOIN exp_type 
								ON expense.exp_type_id=exp_type.id 
									INNER JOIN realty
										ON expense.realty_id=realty.id 
											WHERE exp_type.name='owner' and 
												    expense.realty_id IN (select realty.id from realty where realty.user_id=$userId) order by expense.date");

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
						$expenseList[$i]['exp_type_id'] = $row['exp_type_id'];
						$i++;
				}

				return $expenseList;
		}


    public static function getExpenseOwnerOneRealty($userId, $realtyId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT expense.id, expense.date, expense.name, expense.quantity, expense.price, expense.source, expense.sum, expense.comment, expense.report, expense.exp_type_id, realty.name as realty_name
				    FROM expense
				        inner join exp_type 
				            ON expense.exp_type_id=exp_type.id 
				                inner join realty
				                    ON expense.realty_id=realty.id 
				                        where exp_type.name='owner' and 
				                            expense.realty_id IN (select realty.id from realty where realty.user_id=$userId and realty.id=$realtyId) order by expense.date");
												
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
						$expenseList[$i]['exp_type_id'] = $row['exp_type_id'];
						$i++;
				}

				return $expenseList;
		}


		public static function getExpenseGenAllRealties($userId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT expense.id, expense.date, expense.name, expense.quantity, expense.price, expense.source, expense.sum, expense.comment, expense.report, expense.exp_type_id, realty.name as realty_name
							FROM expense
									INNER JOIN exp_type 
											ON expense.exp_type_id=exp_type.id 
													INNER JOIN realty
															ON expense.realty_id=realty.id 
																	WHERE exp_type.name='general' and 
												    expense.realty_id IN (select realty.id from realty where realty.user_id=$userId) order by expense.date");

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
								$expenseList[$i]['exp_type_id'] = $row['exp_type_id'];
								$i++;
				}

				return $expenseList;
		}


    public static function getExpenseGenOneRealty($userId, $realtyId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT expense.id, expense.date, expense.name, expense.quantity, expense.price, expense.source, expense.sum, expense.comment, expense.report, expense.exp_type_id, realty.name as realty_name
				    FROM expense		
				        inner join exp_type 
				            ON expense.exp_type_id=exp_type.id 
				                inner join realty
				                    ON expense.realty_id=realty.id 
				                        where exp_type.name='general' and 
				                            expense.realty_id IN (select realty.id from realty where realty.user_id=$userId and realty.id=$realtyId) order by expense.date");
												
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
								$expenseList[$i]['exp_type_id'] = $row['exp_type_id'];
								$i++;
				}

				return $expenseList;
		}


    public static function getFinalsOwnerAllRealties($userId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT SUM(expense.sum) as sum_sum from expense where expense.realty_id IN (select realty.id from realty where realty.user_id=$userId and expense.exp_type_id=(select exp_type.id from exp_type where exp_type.name='owner'))");				
			
				return $result->fetch();
		}


    public static function getFinalsOwnerOneRealty($userId, $realtyId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT SUM(expense.sum) as sum_sum from expense where expense.realty_id IN (select realty.id from realty where realty.user_id=$userId and expense.exp_type_id=(select exp_type.id from exp_type where exp_type.name='owner')) and realty_id=$realtyId");				
			
				return $result->fetch();
		}


    public static function getFinalsGenAllRealties($userId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT SUM(expense.sum) as sum_sum from expense where expense.realty_id IN (select realty.id from realty where realty.user_id=$userId and expense.exp_type_id=(select exp_type.id from exp_type where exp_type.name='general'))");				
			
				return $result->fetch();
		}


    public static function getFinalsGenOneRealty($userId, $realtyId) {
				$db = Db::getConnection();

				$result = $db->query("SELECT SUM(expense.sum) as sum_sum from expense where expense.realty_id IN (select realty.id from realty where realty.user_id=$userId and expense.exp_type_id=(select exp_type.id from exp_type where exp_type.name='general')) and realty_id=$realtyId");				
			
				return $result->fetch();
		}

}
