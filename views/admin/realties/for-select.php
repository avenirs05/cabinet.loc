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

