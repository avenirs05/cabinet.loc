<div id="add-income-wrap" class="container-fluid add-fields-wrap" style="display: none">
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
				  <label>Дата заезда <small>(YYYY-MM-DD)</small></label>
				  <input id="date-arr-income" type="text" class="form-control" placeholder="" value="2018-" required>
				</div>
				<div class="form-group">
				  <label>Дата выезда <small>(YYYY-MM-DD)</small></label>
				  <input id="date-dep-income" type="text" class="form-control" placeholder="" value="2018-" required>
				</div>
				<div class="form-group">
				  <label>Цена в сутки, €</label>
				  <input id="price-income" type="number" class="form-control" placeholder="0.00" required>
				</div>
				<div class="form-group">
				  <label>Сумма, €</label>
				  <input id="sum-income" type="number" class="form-control" placeholder="0.00" required>
				</div>
				<div class="form-group">
				  <label>Комментарий</label>
				  <input id="comment-income" type="text" class="form-control" placeholder="" required>
				</div>
			  <button type="button" id="add-income-send" class="btn btn-dark">Добавить доход</button>
			  <button type="button" class="btn btn-outline-secondary btn-cancel">Отмена</button>		
			</form>
		</div>
	</div>
</div>



