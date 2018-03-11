<?php include ROOT . '/views/layouts/header.php'; ?>
 
<div class="container-fluid profile-wrap">
	<div class="row">
		<div class="col balance-wrap">
			<span id="balance-text" class="text-muted"><i>Баланс:</i> </span>
			<span id="balance-sum-text"><?php echo $finalsMoney['sum_plus'] - $finalsMoney['sum_minus']; ?></span>
			<span id="sign-evro-text">€</span>&nbsp;
			<a id="money" href="/money">Подробнее</a>
		</div>
		<div class="col text-right">
			<img src="/template/imgs/person.svg" width="11" height="11" alt="">   
			<span><?php echo $user['name']; ?></>&nbsp;&nbsp;
			<a href="/logout">
				<img src="/template/imgs/account-logout.svg" width="11" height="11" alt=""> 
			  <span>Выход</span>
		  </a>		
		</div>
	</div>
</div>

<div class="container-fluid select-realty-wrap">
	<div class="row">
		<div class="col">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01">Объект недвижимости</label>
			  </div>
			  <select class="custom-select">
			    <option>Все</option>
			    <?php foreach ($realties as $realty): ?>
					<option value="<?php echo $realty['id']; ?>">
					  <?php echo $realty['name']; ?>
					</option>
				<?php endforeach; ?>
			  </select>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid report-menu-wrap">
	<div class="row">
		<div class="col">
			<ul class="nav nav-pills nav-fill">
			  <li class="nav-item">
			    <a id="incomes" class="nav-link" href="/incomes/all">Доходы собственника</a>
			  </li>
			  <li class="nav-item">
			    <a id="expenses-owner" class="nav-link" href="/expenses-owner/all">Расходы собственника</a>
			  </li>
			  <li class="nav-item">
			    <a id="expenses-gen" class="nav-link" href="/expenses-gen/all">Общие расходы</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container-fluid report-wrap">
	<div class="row">
		<div class="col">
			<h3 class="text-center">Доходы по всем объектам недвижимости</h3>
		</div>
	</div>
	<?php include ROOT . '/views/cabinet/income/index.php'; ?>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>




