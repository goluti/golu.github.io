<?php
error_reporting(1);

include 'form.php';
$q = " select * from dgs";
$query = $con->query($q);
if ($query->num_rows > 0){
	
	while ($result = $query->fetch_array()){

		?>
		<tr>
			<td> <?php echo $result['id'] ?> </td>
			<td> <?php echo $result['name'] ?> </td>
			<td> <?php echo $result['email'] ?> </td>
			<td> <?php echo $result['phone'] ?> </td>
			<td> <?php echo $result['password'] ?> </td>
			<td> <?php echo $result['photo'] ?> </td>
			<td> <button class="btn btn-danger  "  ><a href="update.php?id=<?php echo $result['id'] ?>" onclick="return confirm('Are you sure want to update this item?')" class="text-light"  >update</a> </button> </td>
			<td> <button class="btn btn-danger  "  ><a href="delete.php?id=<?php echo $result['id'] ?>" onclick="return confirm('Are you sure want to delete this item?')" class="text-light"  >delete</a> </button> </td>
			
			
			
		</tr>
        <?php
        
		}
	}
?>