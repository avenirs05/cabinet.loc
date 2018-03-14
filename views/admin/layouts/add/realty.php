<div id="add-realty-wrap" class="container-fluid add-fields-wrap" style="display: none">
	<div class="row">
		<div class="col">
			<form class="fields-content">
				<div class="form-group">
				  <label>Название объекта</label>
				  <input id="realty-name" type="text" class="form-control" placeholder="Введите название объекта недвижимости" required>
				</div>
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
			  <button type="button" id="add-realty-send" class="btn btn-info">Добавить объект</button>
			  <button type="button" class="btn btn-outline-secondary btn-cancel">Отмена</button>		
			</form>
		</div>
	</div>
</div>

