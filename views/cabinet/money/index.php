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
		  		  <td><?php echo $transaction['sum_minus']; ?></td>
		  		  <td><?php echo $transaction['sum_plus']; ?></td>
		  		  <td><?php echo $transaction['comment']; ?></td>
		  	  </tr>					
			  <?php endforeach; ?>
			    	<tr>	
			    		<td class="final-text text-right text-itogo">Итого:</td>
			    		<td></td>
			    		<td></td>			    		
			    		<td></td>
		    	  </tr>
		  </tbody>
		</table>
	</div>
</div>

