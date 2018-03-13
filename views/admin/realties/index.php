<div class="row table-wrap">
	<div class="col">
		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
				  <th scope="col">Объект</th>
		      <th scope="col">Собственник</th>
		      <th scope="col"></th>
		      <th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php foreach ($realties as $item): ?>
			  	  <tr id="<?php echo $item['id']; ?>">	
			  		  <td><?php echo $item['realty_name']; ?></td>
			  		  <td><?php echo $item['user_name']; ?></td>
			  		  <td>Edit</td>
			  		  <td>Del</td>
			  	  </tr>					
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
</div>








