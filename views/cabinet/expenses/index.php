<div class="row table-wrap">
	<div class="col">
		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
		    	<th scope="col">Id</th>
			    <th scope="col">Дата</th>
		      <th scope="col">Объект</th>
		      <th nowrap scope="col">Товар (услуга)</th>
		      <th nowrap scope="col">Количество</th>
		      <th nowrap scope="col">Цена, €</th>
		      <th nowrap scope="col">Сумма, €</th>
		      <th scope="col">Источник</th>
		      <th nowrap scope="col">Отчет <img class="tooltip-info" width="15" height="15" data-toggle="tooltip" data-placement="top" title="Дата отправки расходного документа на ваш email" src="/template/imgs/info.svg" alt=""></th>
		      <th scope="col">Комментарий</th>
		    </tr>
		  </thead>
		  <tbody>
			  <?php foreach ($expenses as $item): ?>
		  	  <tr>	
		  	  	<td><?php echo $item['id']; ?></td>
		  		  <td nowrap><?php echo $item['date']; ?></td>
		  		  <td nowrap><?php echo $item['realty_name']; ?></td>
		  		  <td><?php echo $item['name']; ?></td>
		  		  <td><?php echo $item['quantity']; ?></td>
		  		  <td><?php echo $item['price']; ?></td>
		  		  <td><?php echo $item['sum']; ?></td>
		  		  <td><?php echo $item['source']; ?></td>
		  		  <td nowrap class="report-email"><?php echo $item['report']; ?></td>
		  		  <td><?php echo $item['comment']; ?></td>		  		  
		  	  </tr>					
			  <?php endforeach; ?>
		    	<tr class="final-row">	
		    		<td colspan="6" class="final-text text-right text-itogo">Итого, €:</td>
		    		<td class="final-text text-danger"><?php echo $finals['sum_sum']; ?></td>
		    		<td></td>
		    		<td></td>
		    		<td></td>		    		
	    	  </tr>
		  </tbody>
		</table>
	</div>
</div>

