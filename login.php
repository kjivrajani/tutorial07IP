<?php
  $Email = isset($_COOKIE['username_cookie'])?$_COOKIE['username_cookie']:"";
  $Password = isset($_COOKIE['Password_cookie'])?$_COOKIE['Password_cookie']:"";
  $remember = isset($_COOKIE['username_cookie'])?"checked":"";
  echo $Email; 
  echo $Password;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <style>
        .user{
              font-size: 14px;
              font-family: 'Times New Roman';
              padding: auto;
              margin-bottom: 20px;
              margin-top: 20px;
              
        }
        .btn
        {
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            color:mediumspringgreen;
        }
        h1{
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
            
            
        }
        .container
        {
            
            align-content: center;        
            align-items:center;
            border: 3px solid black;
            border-radius:10px ;
            width: 604px;
            height: 300px;
            padding-top: 12px;
        
        }
        body{
            background-color: blanchedalmond;
        }
        .l1
        {
            
            font-size: 22px;
            font-family: 'Times New Roman', Times, serif;
			
        }
        
    </style>
</head>
<body>
    <h1>Login Page</h1>
    <div class="container  col-md-6">
        <div class="col">
            <form action="validate.php" method="post">
            <div class="col-md-6 offset-2 user col-lg-8">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">Enter Username : </span>
                  <input type="text" class="form-control" id="Email" name="Email" value="<?=$Email?>" aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
    
            <div class="col-md-6 offset-2 user col-lg-8">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend" >Enter Password : </span>
                  <input type="text"  class="form-control" id="Password"  name = "Password" value="<?=$Password?>" aria-describedby="inputGroupPrepend" required>
                </div>
              </div>
			  
              <div class="btn offset-4">
                <div class="col">
                    <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
            </div>
         <div class="form-group offset-4">
             <label for="Remaber Me">Remaber Me</label>
			<input type="checkbox" name="remember" <?=$remember?> id="">
        </div>
			<div class = "forget offset-4 l1">
			   <a href = "fpass.html">Forget password??</a>
			</div>
        
        <div class="l1 offset-2">
		    <p>Don't have an account?
            <a href="register.php">Register Here.</a>
			</p>
        </div>
        </form>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"
     integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
	 
</body>
</html>