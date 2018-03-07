<?php include ROOT . '/views/layouts/header.php'; ?>
 
<div class="container-fluid profile-wrap">
	<div class="row">
		<div class="col">
			<div class="text-right">
					<span>
						<img src="/template/imgs/person.svg" width="11" height="11" alt="">   
						<a href="/cabinet/" target="_blank"><?php echo $user['name']; ?></a>&nbsp;&nbsp;		
						<img src="/template/imgs/account-logout.svg" width="11" height="11" alt=""> 			
					  <a href="/user/logout/" target="_blank">Выход</a>
					</span>
			</div>
		</div>
	</div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>




