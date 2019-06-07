<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mysite</title>
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
    #nav{
      height:60px;
      background-color:blue;
      box-shadow: 0 5px 5px rgba(0,0,255,0.5);
      overflow:hidden;
  position:fixed;
  top: 0;
  width: 100%;
  z-index: 1;
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
            padding: 5px;
            border-spacing: 5px;
            z-index: 0;
    }

  </style>
</head>
<body>
<div class="navbar" id="nav">
  <form class="form-inline" action="<?php echo site_url();?>/User/search" method="get">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</div>

<!-- <div class="container-fluid"> -->
  
  
  <div class="container-fluid" id="products">
    
    
    <div class="row">
      <?php foreach($q as $row)
  {?>
  <tr>
      <div align="center" class="col-3" id="box"><a href="<?php echo site_url();?>/User/details/?id=<?php echo $row->id;?>" style="text-decoration: none">
        <?php echo $row->name;?><br>
        <div id="a">
        <img src="../../assets/images/products/<?php echo $row->image;?>" width="60%"></div><br>List Price
        <s><?php echo $row->list_price;?></s><br>
        Selling Price
        <?php echo $row->sell_price;?><br>
        <a href="<?php echo site_url();?>/User/checkout/?id=<?php echo $row->id;?>"><button class="btn btn-success">Add to cart</button></a>
</a>
      </div>
      
      <?php }
  ?>
    </div>
  </div>
<!-- </div> -->

</body>
</html>

