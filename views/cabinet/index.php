<?php include ROOT . '/views/layouts/header.php'; ?>
 
<div class="container-fluid profile-wrap">
	<div class="row">
		<div class="col">
			<div class="text-right">
					<span>
						<img src="/template/imgs/person.svg" width="11" height="11" alt="">   
						<a href="/cabinet/"><?php echo $user['name']; ?></a>&nbsp;&nbsp;
						  <a href="/user/logout/">
							<img src="/template/imgs/account-logout.svg" width="11" height="11" alt=""> 
					  	<span>Выход</span></a>
					</span>
			</div>
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
			  <select class="custom-select" id="inputGroupSelect01">
			    <option selected>Все</option>
			    <?php foreach ($realties as $realty): ?>
					<option><?php echo $realty['name']; ?></option>
				<?php endforeach; ?>
			  </select>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid reports-menu-wrap">
	<div class="row">
		<div class="col">
			<ul class="nav nav-pills nav-fill">
			  <li class="nav-item">
			    <a class="nav-link active" href="#">Доходы собственника</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Расходы собственника</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Общие расходы</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Денежные взаиморасчеты</a>
			  </li>
			</ul>
		</div>
	</div>
</div>

<div class="container-fluid report-wrap">
	<div class="row">
		<div class="col">
			<h3 class="text-center">Доходы собственника по объекту: все.</h3>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<table class="table table-bordered table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Заезд</th>
			      <th scope="col">Выезд</th>
			      <th scope="col">Цена</th>
			      <th scope="col">Дней</th>
			      <th scope="col">Сумма</th>
			      <th scope="col">Комментарий</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>			      
			      <td>26.12.2017</td>
			      <td>01.14.2018</td>
			      <td>100</td>
			      <td>15</td>
			      <td>1500</td>
			      <td>Все засрали, обблевали, ебались</td>
			    </tr>
			    <tr>			      
			      <td>26.12.2017</td>
			      <td>01.14.2018</td>
			      <td>100</td>
			      <td>15</td>
			      <td>1500</td>
			      <td>Все засрали, обблевали, ебались</td>
			    </tr>
			    <tr>			      
			      <td>26.12.2017</td>
			      <td>01.14.2018</td>
			      <td>100</td>
			      <td>15</td>
			      <td>1500</td>
			      <td>Все засрали, обблевали, ебались</td>
			    </tr>
			    <tr>			      
			      <td>26.12.2017</td>
			      <td>01.14.2018</td>
			      <td>100</td>
			      <td>15</td>
			      <td>1500</td>
			      <td>Все засрали, обблевали, ебались</td>
			    </tr>
			    <tr>			      
			      <td>26.12.2017</td>
			      <td>01.14.2018</td>
			      <td>100</td>
			      <td>15</td>
			      <td>1500</td>
			      <td>Все засрали, обблевали, ебались</td>
			    </tr>
			    <tr>			      
			      <td>26.12.2017</td>
			      <td>01.14.2018</td>
			      <td>100</td>
			      <td>15</td>
			      <td>1500</td>
			      <td>Все засрали, обблевали, ебались</td>
			    </tr>
			    <tr>			      
			      <td>26.12.2017</td>
			      <td>01.14.2018</td>
			      <td>100</td>
			      <td>15</td>
			      <td>1500</td>
			      <td>Все засрали, обблевали, ебались</td>
			    </tr>
			    <tr>			      
			      <td>26.12.2017</td>
			      <td>01.14.2018</td>
			      <td>100</td>
			      <td>15</td>
			      <td>1500</td>
			      <td>Все засрали, обблевали, ебались</td>
			    </tr>
			    <tr>			      
			      <td>26.12.2017</td>
			      <td>01.14.2018</td>
			      <td>100</td>
			      <td>15</td>
			      <td>1500</td>
			      <td>Все засрали, обблевали, ебались</td>
			    </tr>
			    <tr>			      
			      <td>26.12.2017</td>
			      <td>01.14.2018</td>
			      <td>100</td>
			      <td>15</td>
			      <td>1500</td>
			      <td>Все засрали, обблевали, ебались</td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
</div>




<?php include ROOT . '/views/layouts/footer.php'; ?>




