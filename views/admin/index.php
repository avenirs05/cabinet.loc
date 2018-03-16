<?php include ROOT . '/views/admin/layouts/del/income.php'; ?>
<?php include ROOT . '/views/admin/layouts/del/expense.php'; ?>
<?php include ROOT . '/views/admin/layouts/del/balance.php'; ?>
<?php include ROOT . '/views/admin/layouts/del/realty.php'; ?>
<?php include ROOT . '/views/admin/layouts/del/user.php'; ?>

<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <a id="incomes-admin" class="navbar-brand reports-main" href="/incomes-admin">Доходы</a>
  <a id="expenses-owner-admin" class="navbar-brand reports-main" href="/expenses-owner-admin">Расходы собственника</a>
  <a id="expenses-gen-admin" class="navbar-brand reports-main" href="/expenses-gen-admin">Расходы общие</a>
  <a id="balance-admin" class="navbar-brand reports-main" href="/balance-admin">Баланс</a>
  <a id="realties-admin" class="navbar-brand reports-main" href="/realties-admin">Объекты</a>
  <a id="owners-admin" class="navbar-brand reports-main" href="/owners-admin">Собственники</a>
	<a class="logout-wrap" href="/logout" class="ml-auto">
		<img src="/template/imgs/account-logout-white.svg" width="11" height="11" alt=""> 
	  <span>Выход</span>
  </a>	
</nav>

<div class="container-fluid select-realty-wrap">
	<div class="row">
		<div class="col">
			<div class="input-group mb-3 select-realty-content">
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01">Объект недвижимости</label>
			  </div>
			  <select id="select-realties" class="custom-select">
			    <option value="all">все</option>
			    <?php foreach ($realties as $realty): ?>
	  					<option value="<?php echo $realty['id']; ?>">
	  					  <?php echo $realty['name']; ?>
	  					</option>
					<?php endforeach; ?>
			  </select>
			</div>
			<div class="input-group mb-3 select-owner-content">
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01">Собственник</label>
			  </div>
			  <select id="select-owners" class="custom-select">
			    <option value="all">все</option>
			    <?php foreach ($users as $user): ?>
	  					<option value="<?php echo $user['id']; ?>">
	  					  <?php echo $user['name']; ?>
	  					</option>
					<?php endforeach; ?>
			  </select>
			</div>
			<div class="btns-add-wrap">
				<button id="add-income" type="button" class="btn btn-outline-primary">+ Доход</button>
				<button id="add-expense-owner" type="button" class="btn btn-outline-dark">+ Расход собственник</button>
				<button id="add-expense-gen" type="button" class="btn btn-outline-dark">+ Расход общий</button>
				<button id="add-balance" type="button" class="btn btn-outline-danger">+ Баланс</button>
				<button id="add-realty" type="button" class="btn btn-outline-info">+ Объект</button>
				<button id="add-owner" type="button" class="btn btn-outline-secondary">+ Собственник</button>
			</div>
		</div>
	</div>
</div>

<?php include ROOT . '/views/admin/layouts/add/balance.php'; ?>

<?php include ROOT . '/views/admin/layouts/add/expense-gen.php'; ?>

<?php include ROOT . '/views/admin/layouts/add/expense-owner.php'; ?>

<?php include ROOT . '/views/admin/layouts/add/income.php'; ?>

<?php include ROOT . '/views/admin/layouts/add/realty.php'; ?>

<?php include ROOT . '/views/admin/layouts/add/user.php'; ?>

<div class="container-fluid report-wrap">
	<div class="row">
		<div class="col">
			<h3 class="text-center">
				<span id="which-report">Доходы</span>: 
				<i id="ob-nedv-text">объект недвижимости:</i> 
				<span id="which-realty">все</span><span id="zapyataya">,</span> 
				<i id="sobstv-text">собственник:</i> 
				<span id="which-owner">все</span>
			</h3>
		</div>
	</div>
	<?php include ROOT . '/views/admin/income/index.php'; ?>
</div>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>



