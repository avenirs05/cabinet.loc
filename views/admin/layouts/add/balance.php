<div id="add-balance-wrap" class="container-fluid add-fields-wrap" style="display: none">
	<div class="row">
		<div class="col">
			<form class="fields-content">
				<div class="form-group">
				  <label>Дата <small>(YYYY-MM-DD)</small></label>
				  <input id="date-trans-admin" type="text" class="form-control" placeholder="" value="2017-" required>
				</div>
				<div class="form-group">
				  <label>Получил, €</label>
				  <input id="got-money-admin" type="number" class="form-control" placeholder="0.00" required>
				</div>
				<div class="form-group">
				  <label>Отдал, €</label>
				  <input id="gave-money-admin" type="number" class="form-control" placeholder="0.00" required>
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
				<div class="form-group comment-content">
				  <label>Комментарий</label>
				  <input id="comment-money-admin" type="text" class="form-control" placeholder="" required>
				</div>
			  <button type="button" id="add-balance-send" class="btn btn-danger">Добавить баланс</button>
			  <button type="button" class="btn btn-outline-secondary btn-cancel">Отмена</button>		
			</form>
		</div>
	</div>
</div>

