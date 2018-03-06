<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
  <div class="row">
    <div class="col col-lg-4 ml-auto mr-auto">
    	<form class="form-enter" method="post">
            <div class="form-group">
                <?php if (isset($errors) && is_array($errors)): ?>  
                  <?php foreach ($errors as $error): ?>
                    <p class="red"><?php echo $error; ?></p>
                  <?php endforeach; ?>   
                <?php endif; ?> 
            </div>
    		<div class="form-group">
     		  <label>Email</label>
     		  <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Введите email" name="email" required>
     		</div>
     		<div class="form-group">
     		  <label>Пароль</label>
     		  <input type="password" class="form-control" placeholder="Введите пароль" name="password" required>
     		</div>
     		<button type="submit" class="btn btn-primary">
     			<img src="/template/imgs/lock-white.svg" width="14" height="14" alt=""> 
     			<span>Войти в личный кабинет</span>
     		</button>	
    	</form>
    </div>
  </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>


