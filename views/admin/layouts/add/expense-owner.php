<div id="add-expense-owner-wrap" class="container-fluid add-fields-wrap" style="display: none">
	<div class="row">
		<div class="col">
			<form class="fields-content">
				<div class="form-group select-realties-content">
				  <label>Объект недвижимости</label>
	  			<select class="custom-select select-realties">
	  		    <option value="all">все</option>
	  		    <?php foreach ($realties as $realty): ?>
	    					<option value="<?php echo $realty['id']; ?>">
	    					  <?php echo $realty['name']; ?>
	    					</option>
	  				<?php endforeach; ?>
	  		  </select>
				</div>
				<div class="form-group">
				  <label>Дата <small>(YYYY-MM-DD)</small></label>
				  <input id="date-exp-owner" type="text" class="date-field form-control" placeholder="" value="" required>
				</div>
				<div class="form-group">
				  <label>Товар (услуга)</label>
				  <input id="good-exp-owner" type="text" class="form-control" placeholder="Наименование товара (услуги)" required>
				</div>
				<div class="form-group">
				  <label>Количество</label>
				  <input id="quantity-exp-owner" type="number" class="form-control" placeholder="Единиц товара (услуги)" value="1" required>
				</div>
				<div class="form-group">
				  <label>Цена, €</label>
				  <input id="price-exp-owner" type="number" class="form-control" placeholder="0.00" required>
				</div>
				<div class="form-group">
				  <label>Сумма, €</label>
				  <input id="sum-exp-owner" type="number" class="form-control" placeholder="0.00" required>
				</div>
				<div class="form-group">
				  <label>Источник</label>
				  <input id="source-exp-owner" type="text" class="form-control" placeholder="Название магазина, имя мастера" required>
				</div>
				<div class="form-group">
				  <label>Отчет на email <small>(YYYY-MM-DD)</small></label>
				  <input id="rep-email-exp-owner" type="text" class="date-field form-control" placeholder="" value="" required>
				</div>
				<div class="form-group">
				  <label>Комментарий</label>
				  <input id="comment-exp-owner" type="text" class="form-control" placeholder="" required>
				</div>
			  <button type="button" id="add-expense-owner-send" class="btn btn-dark">Добавить расход собственника</button>
			  <button type="button" class="btn btn-outline-secondary btn-cancel">Отмена</button>		
			</form>
		</div>
	</div>
</div>

