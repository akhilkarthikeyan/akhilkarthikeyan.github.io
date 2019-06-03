<?php echo $q->id;?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
    body{
      background-color:rgba(0,0,255,0.04);
    }
    #products{
      margin-top: 10%;
      width:80%;
    }
    .col
    {
      height: 200px;
      margin-left: 15px;
    }
    #a{
      
      height: 60%;
    }
    #box{
      border:2px solid rgb(255, 255, 255,0.6);
      background-color: rgba(255,0,0,0.05);
      box-shadow: 0 0 10px rgb(252, 250, 250),inset 0 0 10px rgba(225,225,225,1);
            color:rgb(255, 0, 0,0.8);
            border-radius: 5px;
            padding: 20px;
            border-spacing: 5px;
            width: 30%;
    }
    #nav{
      height:60px;
      background-color:blue;
      box-shadow: 0 5px 5px rgba(0,0,255,0.5);
      overflow: hidden;
  position:fixed;
  top: 0;
  width: 100%;
}

  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm  navbar-dark" id="nav">
  <form class="form-inline navbar-right" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav>
<div class="container-fluid">
  
  
  <div class="container-fluid" id="products">
    
    
    
    <div class="row">
  <tr>
      <div align="center" class="col-5" id="box">
      	
      	<img src="../../../assets/images/products/<?php echo $q->image;?>" width="80%"><br>
      	<?php echo $q->name;?><br>
      	<s><?php echo $q->list_price;?></s><br>
      	<?php echo $q->sell_price;?>
      </div>
      
    </div>
  </div>
</div>

</body>
</html>