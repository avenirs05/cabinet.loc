<div id="add-expense-gen-wrap" class="container-fluid add-fields-wrap" style="display: none">
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
				  <input id="date-exp-gen" type="text" class="form-control" placeholder="" value="2018-" required>
				</div>
				<div class="form-group">
				  <label>Товар (услуга)</label>
				  <input id="good-exp-gen" type="text" class="form-control" placeholder="Наименование товара (услуги)" required>
				</div>
				<div class="form-group">
				  <label>Количество</label>
				  <input id="quantity-exp-gen" type="number" class="form-control" placeholder="Единиц товара (услуги)" value="1" required>
				</div>
				<div class="form-group">
				  <label>Цена, €</label>
				  <input id="price-exp-gen" type="number" class="form-control" placeholder="0.00" required>
				</div>
				<div class="form-group">
				  <label>Сумма, €</label>
				  <input id="sum-exp-gen" type="number" class="form-control" placeholder="0.00" required>
				</div>
				<div class="form-group">
				  <label>Источник</label>
				  <input id="source-exp-gen" type="text" class="form-control" placeholder="Название магазина, имя мастера" required>
				</div>
				<div class="form-group">
				  <label>Отчет на email <small>(YYYY-MM-DD)</small></label>
				  <input id="rep-email-exp-gen" type="text" class="form-control" placeholder="" required>
				</div>
				<div class="form-group">
				  <label>Комментарий</label>
				  <input id="comment-exp-gen" type="text" class="form-control" placeholder="" required>
				</div>
			  <button type="button" id="add-expense-gen-send" class="btn btn-dark">Добавить общий расход</button>
			  <button type="button" class="btn btn-outline-secondary btn-cancel">Отмена</button>		
			</form>
		</div>
	</div>
</div>

