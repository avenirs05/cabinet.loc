<tbody>
  <?php foreach ($expenses as $item): ?>
	  <tr>	
		  <td><?php echo $item['date']; ?></td>
		  <td><?php echo $item['realty_name']; ?></td>
		  <td><?php echo $item['name']; ?></td>
		  <td><?php echo $item['quantity']; ?></td>
		  <td><?php echo $item['price']; ?></td>
		  <td><?php echo $item['sum']; ?></td>
		  <td><?php echo $item['source']; ?></td>
		  <td><?php echo $item['report']; ?></td>
		  <td><?php echo $item['comment']; ?></td>
	  </tr>					
  <?php endforeach; ?>
</tbody>