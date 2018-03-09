<div class="row table-wrap">
	<div class="col">
		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
			    <th scope="col">Дата</th>
		      <th scope="col">Отдал(а)</th>
		      <th scope="col">Получил(а)</th>
		      <th scope="col">Комментарий</th>
		    </tr>
		  </thead>
		  <tbody>
			  <?php foreach ($money as $transaction): ?>
		  	  <tr>	
		  		  <td><?php echo $transaction['date']; ?></td>
		  		  <td class="text-danger"><?php echo $transaction['sum_minus']; ?></td>
		  		  <td class="text-success"><?php echo $transaction['sum_plus']; ?></td>
		  		  <td><?php echo $transaction['comment']; ?></td>
		  	  </tr>					
			  <?php endforeach; ?>
			    	<tr class="final-row">	
			    		<td class="final-text text-right">Итого:</td>
			    		<td class="final-text text-danger"><?php echo $finals['sum_minus']; ?></td>
			    		<td class="final-text text-success"><?php echo $finals['sum_plus']; ?></td>	    		
			    		<td></td>
		    	  </tr>
		  </tbody>
		</table>
	</div>
</div>

