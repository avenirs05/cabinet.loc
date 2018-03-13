<?php

class RealtyAdmin 
{
		public static function getAllRealties() {
		    // Соединение с БД
		    $db = Db::getConnection();

		    // Получение и возврат результатов
		    $result = $db->query('SELECT * FROM realty');

		    $realtiesList = array();

		    $i = 0;
		    while ($row = $result->fetch()) {
		        $realtiesList[$i]['id'] = $row['id'];
		        $realtiesList[$i]['name'] = $row['name'];
		        $i++;
		    }

		    return $realtiesList;
		}

		public static function getAllRealtiesWithOwners() {
		    // Соединение с БД
		    $db = Db::getConnection();

		    // Получение и возврат результатов
		    $result = $db->query('SELECT realty.name as realty_name, user.name as user_name from realty INNER JOIN user ON realty.user_id=user.id');

		    $realtiesList = array();

		    $i = 0;
		    while ($row = $result->fetch()) {
				        $realtiesList[$i]['realty_name'] = $row['realty_name'];
				        $realtiesList[$i]['user_name'] = $row['user_name'];
				        $i++;
		    }

		    return $realtiesList;
		}
}
