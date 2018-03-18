<div class="row table-wrap income-table-wrap">
	<div class="col">
		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
		    	<th scope="col">Id</th>
			    <th scope="col">Объект</th>
			    <th scope="col">Заезд</th>		      
		      <th scope="col">Выезд</th>
		      <th scope="col">Цена, €</th>
		      <th scope="col">Дней</th>
		      <th nowrap scope="col">Сумма, €</th>
		      <th scope="col">Комментарий</th>
		      <th scope="col"></th>
		      <th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php foreach ($incomes as $item): ?>
			  	  <tr id="<?php echo $item['id']; ?>">	
			  	  	<td class="income-id"><?php echo $item['id']; ?></td>
			  		  <td class="income-realty-name"><?php echo $item['name']; ?></td>
			  		  <td class="income-date-arr" nowrap><?php echo $item['date_arr']; ?></td>
			  		  <td class="income-date-dep" nowrap><?php echo $item['date_dep']; ?></td>
			  		  <td class="income-price"><?php echo $item['price']; ?></td>
			  		  <td class="income-days"><?php echo $item['days']; ?></td>
			  		  <td class="income-sum"><?php echo $item['sum']; ?></td>
			  		  <td class="income-comment"><?php echo $item['comment']; ?></td>
			  		  <td class="img-del-edit-wrap"><img src="/template/imgs/edit.png" width="20" alt="" class="close edit"></td>
			  		  <td class="img-del-edit-wrap"><img src="/template/imgs/close.png" width="20" alt="" class="close delete"></td>
			  	  </tr>					
		    <?php endforeach; ?>
	    	    	<tr class="final-row">	
	    	    		<td colspan="4" class="final-text text-right text-itogo">Итого, €:</td>
	    	    		<td id="avg-price" class="final-text"></td>
	    	    		<td id="income-sum-days" class="final-text"><?php echo $finals['sum_days']; ?></td>
	    	    		<td id="income-sum-amount" class="final-text text-success"><?php echo $finals['sum_sum']; ?></td>
	    	    		<td></td>
	    	    		<td></td>
	    	    		<td></td>
	        	  </tr>
		  </tbody>
		</table>
	</div>
</div>








