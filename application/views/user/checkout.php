<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	#submit{
  		background-color: rgba(255,255,255,0);
  		border-radius: 5px;
  		height: 50px;
  		width: 100px;
  		box-shadow: 0 0 10px rgba(255, 0, 0,0.2);
  	}
  	body{
  		background-color: rgba(255,255,255,0.2);
  	}
  </style>
</head>
<body>
	
	<pre>
	</pre>
	<form method="post" action="<?php echo site_url();?>/User/pgRedirect">
		<div style="float: left;width: 50%;padding: 50px;padding-top: 10px">
		<h1>Shopping cart</h1>
		<table class="table table-striped">
			<tbody>
				<tr>
					<th></th>
					<th>Product</th>
					<th>Price</th>
					
				</tr>
				
				<tr>
					<td><img src="../../../assets/images/products/<?php echo $q->image;?>" width="150px"></td>
					<td><?php echo $q->name;?></td>
					<td><?php echo $q->sell_price;?></td>

				</tr>
				<input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					
					<input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
					<input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
					<input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					
					<input type="hidden" title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $q->sell_price;?>">
				
			</tbody>
		</table>
		</div>

		<div style="float: right;width: 50%;padding: 50px;padding-right: 150px;padding-top: 20px;height: 600px;"><h2>Shipping info</h2>

		<div class="form-group">
			<label for="text">Name:</label>
			<input type="text" class="form-control" id="name">
		</div>
		<div class="form-group">
			<label for="Email">Email:</label>
			<input type="email" class="form-control" id="email">
		</div>
		<div class="form-group">
    		<label for="mobile">Number:</label>
    		<input type="Number" class="form-control" id="number">
  		</div>
  		<div class="form-group">
    		<label for="Address">Address:</label>
    		<textarea class="form-control" rows="5" id="comment"></textarea>
  		</div>
  			<input id="submit" style="float: right;position: relative;right: 10px;" value="CheckOut" type="submit"	onclick="">
		</div>
		
	</form>
</body>
</html>