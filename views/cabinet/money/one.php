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
</tbody>
