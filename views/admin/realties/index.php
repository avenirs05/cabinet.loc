<div class="row table-wrap realties-table-wrap">
	<div class="col">
		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
		    	<th scope="col">Id</th>
				  <th scope="col">Объект</th>
		      <th scope="col">Собственник</th>
		      <th scope="col"></th>
		      <th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php foreach ($realties as $item): ?>
			  	  <tr id="<?php echo $item['id']; ?>">	
			  	  	<td><?php echo $item['id']; ?></td>
			  		  <td class="name-of-realty"><?php echo $item['realty_name']; ?></td>
			  		  <td class="name-of-owner"><?php echo $item['user_name']; ?></td>
			  		  <td class="img-del-edit-wrap"><img src="/template/imgs/edit.png" width="20" alt="" class="close edit"></td>
			  		  <td class="img-del-edit-wrap"><img src="/template/imgs/close.png" width="20" alt="" class="close delete"></td>
			  	  </tr>					
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
</div>








