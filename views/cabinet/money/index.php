<div class="row table-wrap">
	<div class="col">
		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
		    	<th scope="col">Id</th>
			    <th scope="col">Дата</th>
		      <th nowrap scope="col">Отдал(а), €</th>
		      <th nowrap scope="col">Получил(а), €</th>
		      <th scope="col">Комментарий</th>
		    </tr>
		  </thead>
		  <tbody>
			  <?php foreach ($money as $transaction): ?>
		  	  <tr>	
		  	  	<td nowrap><?php echo $transaction['id']; ?></td>
		  		  <td nowrap><?php echo $transaction['date']; ?></td>
		  		  <td class="text-danger gave-money">-<?php echo $transaction['sum_minus']; ?></td>
		  		  <td class="text-success got-money"><?php echo $transaction['sum_plus']; ?></td>
		  		  <td><?php echo $transaction['comment']; ?></td>
		  	  </tr>					
			  <?php endforeach; ?>
			    	<tr class="final-row">	
			    		<td colspan="2" class="final-text text-right">Итого, €:</td>
			    		<td class="final-text text-danger" id="final-sum-minus">-<?php echo $finals['sum_minus']; ?></td>
			    		<td class="final-text text-success" id="final-sum-plus"><?php echo $finals['sum_plus']; ?></td>   		
			    		<td></td>			    		
		    	  </tr>
	  	    	<tr class="final-row">	
	  	    		<td colspan="2" class="final-text text-right">Сальдо, €:</td>
	  	    		<td class="final-text text-danger" id="saldo-minus"></td>
	  	    		<td class="final-text text-success" id="saldo-plus"></td>	    		
	  	    		<td></td>	  	    		
	      	  </tr>
		  </tbody>
		</table>
	</div>
</div>

