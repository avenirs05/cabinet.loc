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
}
