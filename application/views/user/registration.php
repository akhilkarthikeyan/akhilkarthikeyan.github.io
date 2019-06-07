
<?php
        if(isset($_POST['register']))
        {
          $pwd=$_POST['pwd'];
          $cpwd=$_POST['cpwd'];
          if($pwd!=$cpwd)
                {
                  $msg_cpwd="Password should be same";
                  $flag=false;
                }
        }
?>
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
                    :root {
                  --input-padding-x: 1.5rem;
                  --input-padding-y: .75rem;
                }

                body {
                  background: #007bff;
                  background: linear-gradient(to right, #0062E6, #33AEFF);
                }
                .form-label-group {
                  position: relative;
                  margin-bottom: 1rem;
                }

                /*input[type=number]::-webkit-inner-spin-button, 
                input[type=number]::-webkit-outer-spin-button { 
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none;
                    margin: 0; 
                }*/

                /*.card-signin {
                  border: 0;
                  border-radius: 1rem;
                  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
                }

                .card-signin .card-title {
                  margin-bottom: 2rem;
                  font-weight: 300;
                  font-size: 1.5rem;
                }

                .card-signin .card-body {
                  padding: 2rem;
                }

                .form-signin {
                  width: 100%;
                }

                .form-signin .btn {
                  font-size: 80%;
                  border-radius: 5rem;
                  letter-spacing: .1rem;
                  font-weight: bold;
                  padding: 1rem;
                  transition: all 0.2s;
                }

                .form-label-group {
                  position: relative;
                  margin-bottom: 1rem;
                }

                .form-label-group input {
                  height: auto;
                  border-radius: 2rem;
                }

                .form-label-group>input,
                .form-label-group>label {
                  padding: var(--input-padding-y) var(--input-padding-x);
                }

                .form-label-group>label {
                  position: absolute;
                  top: 0;
                  left: 0;
                  display: block;
                  width: 100%;
                  margin-bottom: 0;
                  /* Override default `<label>` margin */
                  /*line-height: 1.5;
                  color: #495057;
                  border: 1px solid transparent;
                  border-radius: .25rem;
                  transition: all .1s ease-in-out;
                }*/
/*/
                /*.form-label-group input::-webkit-input-placeholder {
                  color: transparent;
                }

                .form-label-group input:-ms-input-placeholder {
                  color: transparent;
                }

                .form-label-group input::-ms-input-placeholder {
                  color: transparent;
                }

                .form-label-group input::-moz-placeholder {
                  color: transparent;
                }

                .form-label-group input::placeholder {
                  color: transparent;
                }

                .form-label-group input:not(:placeholder-shown) {
                  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
                  padding-bottom: calc(var(--input-padding-y) / 3);
                }

                .form-label-group input:not(:placeholder-shown)~label {
                  padding-top: calc(var(--input-padding-y) / 3);
                  padding-bottom: calc(var(--input-padding-y) / 3);
                  font-size: 12px;
                  color: #777;
                }

                .btn-google {
                  color: white;
                  background-color: #ea4335;
                }

                .btn-facebook {
                  color: white;
                  background-color: #3b5998;
                }
                #button{
                  border-radius: 25px;
                }*/
                
</style>
<script type="text/javascript">
  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Registration Form</h5>
            <form class="form-signin" method="post">
              <div class="form-label-group">
                <label for="inputFirstname">Name</label>
                <input type="text" id="inputName" class="form-control" placeholder="Name" name="name" required>
              </div>
              <div class="form-label-group">
                <label for="inputEmail">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required>
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" pattern="^.{8,}$" placeholder="Password" name="pwd" required oninvalid="setCustomValidity('Atleast 8 characters ')" onchange="try{setCustomValidity('')}catch(e){}">
              </div>
              <div class="form-label-group">
                <label for="inputCpassword">Confirm Password</label>
                <input type="password" id="inputCpassword" class="form-control" placeholder="Confirm Password" name="cpwd" required>
                <?php if(isset($msg_cpwd)){ ?>
                <label for="inputCpassword" style="color: red">
                  <?php {
                    echo $msg_cpwd;
                  } ?>
              </label><?php } ?>
              </div>
              <div class="form-label-group">
                  <label for="phonenum">Mobile</label><br/>
                  <input id="phonenum" type="tel" pattern="^\d{10}$" class="form-control" placeholder="Mobile number" name="mobile" onkeypress="return isNumber(event)" required >
              </div>


              <br>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="register">Register</button>
              
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>