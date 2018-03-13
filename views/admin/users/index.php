<div class="row table-wrap">
	<div class="col">
		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
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
			  	  <tr>	
			  		  <td><?php echo $user['name']; ?></td>
			  		  <td><?php echo $user['email']; ?></td>
			  		  <td><?php echo $user['password']; ?></td>
			  		  <td><?php echo $user['phone']; ?></td>
			  		  <td>Edit</td>
			  		  <td>Del</td>
			  	  </tr>					
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
</div>
