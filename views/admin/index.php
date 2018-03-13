<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
				<button id="add-expense-owner" type="button" class="btn btn-outline-secondary">+ Расход собственник</button>
				<button id="add-expense-gen" type="button" class="btn btn-outline-secondary">+ Расход общий</button>
				<button id="add-balance" type="button" class="btn btn-outline-danger">+ Баланс</button>
				<button id="add-realty" type="button" class="btn btn-outline-info">+ Объект</button>
				<button id="add-owner" type="button" class="btn btn-outline-dark">+ Собственник</button>
			</div>
		</div>
	</div>
</div>

<div id="add-income-wrap" class="container-fluid add-fields-wrap" style="display: none">
	<div class="row">
		<div class="col">
			поля добавить доход
<button class="btn btn-outline-primary btn-cancel">Отмена</button>
		</div>
	</div>
</div>

<div id="add-expense-owner-wrap" class="container-fluid add-fields-wrap" style="display: none">
	<div class="row">
		<div class="col">
			поля добавить расход собственник
<button class="btn btn-outline-secondary btn-cancel">Отмена</button>
		</div>
	</div>
</div>

<div id="add-expense-gen-wrap" class="container-fluid add-fields-wrap" style="display: none">
	<div class="row">
		<div class="col">
			поля добавить расход общий
<button class="btn btn-outline-secondary btn-cancel">Отмена</button>			
		</div>
	</div>
</div>

<div id="add-balance-wrap" class="container-fluid add-fields-wrap" style="display: none">
	<div class="row">
		<div class="col">
			поля добавить баланс
<button class="btn btn-outline-danger btn-cancel">Отмена</button>			
		</div>
	</div>
</div>

<div id="add-realty-wrap" class="container-fluid add-fields-wrap" style="display: none">
	<div class="row">
		<div class="col">
			поля добавить объект
<button class="btn btn-outline-info btn-cancel">Отмена</button>			
		</div>
	</div>
</div>

<div id="add-owner-wrap" class="container-fluid add-fields-wrap" style="display: none">
	<div class="row">
		<div class="col">
			<div class="form-group">
			  <label>Имя</label>
			  <input type="text" class="form-control" placeholder="Имя собственника">
			</div>
		  <div class="form-group">
		    <label>Email (логин)</label>
		    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email - логин от личного кабинета собственника">
		  </div>
		  <div class="form-group">
		    <label>Пароль</label>
		    <input type="password" class="form-control" placeholder="Пароль от личного кабинета собственника">
		  </div>
		  <div class="form-group">
		    <label>Телефон</label>
		    <input type="password" class="form-control" placeholder="Телефон собственника">
		  </div>
		  <button class="btn btn-primary">Добавить собственника</button>
		  <button class="btn btn-outline-dark btn-cancel">Отмена</button>				
		</div>
	</div>
</div>

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



