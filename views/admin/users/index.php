<div class="row table-wrap users-table-wrap">
	<div class="col">
		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
		    	<th scope="col">Id</th>
			    <th scope="col">Имя</th>
		      <th scope="col">Email</th>
		      <th scope="col">Пароль</th>
		      <th scope="col">Телефон</th>
		      <th scope="col"></th>
		      <th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php foreach ($users as $user): ?>
			  	  <tr id="<?php echo $user['id']; ?>">	
			  	  	<td><?php echo $user['id']; ?></td>
			  		  <td class="name-of-owner"><?php echo $user['name']; ?></td>
			  		  <td><?php echo $user['email']; ?></td>
			  		  <td><?php echo $user['password']; ?></td>
			  		  <td><?php echo $user['phone']; ?></td>
			  		  <td class="img-del-edit-wrap"><img src="/template/imgs/edit.png" width="20" alt="" class="close edit"></td>
			  		  <td class="img-del-edit-wrap"><img src="/template/imgs/close.png" width="20" alt="" class="close delete"></td>
			  	  </tr>					
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
</div>
