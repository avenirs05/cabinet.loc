<div class="row table-wrap">
	<div class="col">
		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
			  <th scope="col">Объект</th>
		      <th scope="col">Заезд</th>
		      <th scope="col">Выезд</th>
		      <th scope="col">Цена</th>
		      <th scope="col">Дней</th>
		      <th scope="col">Сумма</th>
		      <th scope="col">Комментарий</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php foreach ($incomes as $item): ?>
		  	  <tr>	
		  		  <td><?php echo $item['name']; ?></td>
		  		  <td><?php echo $item['date_arr']; ?></td>
		  		  <td><?php echo $item['date_dep']; ?></td>
		  		  <td><?php echo $item['price']; ?></td>
		  		  <td><?php echo $item['days']; ?></td>
		  		  <td><?php echo $item['sum']; ?></td>
		  		  <td><?php echo $item['comment']; ?></td>
		  	  </tr>					
		    <?php endforeach; ?>
			    	<tr class="final-row">	
			    		<td colspan="3" class="final-text text-right text-itogo">Итого:</td>
			    		<td class="final-text"><?php echo $finals['avg_price']; ?></td>
			    		<td class="final-text"><?php echo $finals['sum_days']; ?></td>
			    		<td class="final-text text-success"><?php echo $finals['sum_sum']; ?></td>
			    		<td></td>
		    	  </tr>
		  </tbody>
		</table>
	</div>
</div>
