<head>
	<style type="text/css">
	li{
		display: table-cell;
		padding-left: 20px;
		padding-right: 30px;
	}
	.ah{
		text-decoration: none;
		color: white;
		font-size: 25px;
	}
	ul{
		background-color: rgba(255,0,0,0.4);
	}
	</style>
</head>
<body>
<div align="center">
<ul style="display: table;">
<li><a class="ah" href="<?php echo site_url();?>/User/index">Home</a></li>
<li><a class="ah" href="<?php echo site_url();?>/User/reg">Registration</a></li>
<li><a class="ah" href="<?php echo site_url();?>/User/view">View Detailes</a></li>
</ul>
</div>
<table border="2px" align="center">
	<tr>
		<th>name</th>
		<th>category</th>
		<th>list_price</th>
		<th>sell_price</th>
		<th>description</th>
		<th>images</th>
		<th>Hobbies</th>
		<th>Image</th>
	</tr>
	<?php foreach($q as $row)
	{?>
	<tr>
		<td><?php echo $row->name;?></td>
		<td><?php echo $row->category;?></td>
		<td><?php echo $row->list_price;?></td>
		<td><?php echo $row->sell_price;?></td>
		<td><?php echo $row->description;?></td>
		
		<td><img src="../../assets/images/products/<?php echo $row->image;?>"></td>
		<td><a href="<?php echo site_url();?>/User/edit/?id=<?php echo $row->id;?>">Edit</a></td>
		<td><a href="<?php echo site_url();?>/User/delete/?id=<?php echo $row->id;?>">Delete</a></td>
	</tr>
	<?php }
	?>
</table>
</body>
</html>
<?php

?>