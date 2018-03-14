<div class="form-group select-user-content">
	<label>Собственник</label>
	<select class="custom-select select-user">
		<option value="">Выберите собственника</option>
	  <?php foreach ($users as $user): ?>
			<option value="<?php echo $user['id']; ?>">
			  <?php echo $user['name']; ?>
			</option>
		<?php endforeach; ?>
	</select>
</div>

