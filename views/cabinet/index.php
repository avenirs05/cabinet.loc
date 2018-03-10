<?php include ROOT . '/views/layouts/header.php'; ?>
 
<div class="container-fluid profile-wrap">
	<div class="row">
		<div class="col">
			<span id="balance-text">Баланс: </span>
			<span id="balance-sum-text">0</span>€&nbsp;
			<a id="money" href="/money">Подробнее</a>
		</div>
		<div class="col text-right">
			<img src="/template/imgs/person.svg" width="11" height="11" alt="">   
			<a href="/cabinet/"><?php echo $user['name']; ?></a>&nbsp;&nbsp;
			<a href="/logout">
			<img src="/template/imgs/account-logout.svg" width="11" height="11" alt=""> 
		  <span>Выход</span></a>		
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
<!-- 			  <li class="nav-item">
			    <a id="money" class="nav-link" href="/money">Денежные взаиморасчеты</a>
			  </li> -->
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
	<div class="row table-wrap">
		<div class="col">
			<table class="table table-bordered table-striped">
			  <thead>
			    <tr>
				  <th scope="col">Объект</th>
			      <th scope="col">Заезд</th>
			      <th scope="col">Выезд</th>
			      <th scope="col">Цена</th>
			      <th scope="col">Дней</th>
			      <th scope="col">Сумма</th>
			      <th scope="col">Комментарий</th>
			    </tr>
			  </thead>
			  <tbody>
				  <?php foreach ($incomes as $item): ?>
					  <tr>	
						  <td><?php echo $item['name']; ?></td>
						  <td><?php echo $item['date_arr']; ?></td>
						  <td><?php echo $item['date_dep']; ?></td>
						  <td><?php echo $item['price']; ?></td>
						  <td><?php echo $item['days']; ?></td>
						  <td><?php echo $item['sum']; ?></td>
						  <td><?php echo $item['comment']; ?></td>
					  </tr>					
				  <?php endforeach; ?>
  			    	<tr class="final-row">	
  			    		<td colspan="3" class="final-text text-right text-itogo">Итого:</td>
  			    		<td class="final-text"><?php echo $finals['avg_price']; ?></td>
  			    		<td class="final-text"><?php echo $finals['sum_days']; ?></td>
  			    		<td class="final-text text-success"><?php echo $finals['sum_sum']; ?></td>
  			    		<td></td>
  		    	  </tr>
			  </tbody>
			</table>
		</div>
	</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>




