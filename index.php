<?php
 session_start();
 if(isset($_SESSION['Email']))
      {
        echo "Welcome";
      }
    else
    {
      header('Location: login.php');
    }
?>
<html>
<head>
	<title>Tutorial2</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script>
    $(document).ready(function (){
	  $(".bttn").click(function (){
	  alert("Sure Delete The Record ?");
	    $(this).closest("tr").remove();
	  });
	});
</script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tutorial2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
         
            <span class="visually-hidden">(current)</span>
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="register.php">Add New Record</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="logout.php">Logout</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
<form method="POST">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">re-password</th>
      <th scope="col">DOB</th>
      <th scope="col">Age</th>
      <th scope="col">Country</th>
      <th scope="col">State</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      <td name = "email">kjivrajani728@rku.ac.in</td>
      <td>kjivrajani728</td>
      <td>kjivrajani728</td>
      <td>15/08/2001</td>
      <td>21</td>
      <td>India</td>
      <td>Gujrat</td>
	 <td> 
	 <a href="register.php">
	 <button type="button"  id = "edit" class="btn btn-warning" >Edit</button>
	 </a>
	 </td>
	  <td><button type="button" id = "btndelete" class="btn btn-danger bttn">Delete</button></td>
    </tr>
	
	<tr class="table-active ">
      <td>mpokiya778@rku.ac.in</td>
      <td>mpokiya778</td>
      <td>mpokiya778</td>
      <td>5/0/2001</td>
      <td>21</td>
      <td>India</td>
      <td>Gujrat</td>
	 <td> 
	 <a href="register.php">
	 <button type="button" id = "edit" class="btn btn-warning" >Edit</button>
	 </a>
	 </td>
	  <td><button type="button" id = "btndelete" class="btn btn-danger bttn" id = "btndelete" >Delete</button></td>
    </tr>
	
	<tr class="table-active">
      <td>srathod406@rku.ac.in</td>
      <td>srathod406</td>
      <td>srathod406</td>
      <td>31/12/2000</td>
      <td>21</td>
      <td>India</td>
      <td>Gujrat</td>
	 <td> 
	 <a href="register.php">
	 <button type="button"  id = "edit" class="btn btn-warning" >Edit</button>
	 </a>
	 </td>
	  <td><button type="button" id = "btndelete" class="btn btn-danger bttn">Delete</button></td>
    </tr>
	
	<tr class="table-active">
      <td>dpatel449@rku.ac.in</td>
      <td>dpatel449</td>
      <td>dpatel449</td>
      <td>2/08/2001</td>
      <td>21</td>
      <td>India</td>
      <td>Gujrat</td>
	 <td> 
	 <a href="register.php">
	 <button type="button"  id = "edit" class="btn btn-warning" >Edit</button>
	 </a>
	 </td>
	  <td><button type="button" id = "btndelete" class="btn btn-danger bttn">Delete</button></td>
    </tr>
	
	<tr class="table-active">
      <td>dkapuriya634@rku.ac.in</td>
      <td>dkapuriya634</td>
      <td>dkapuriya634</td>
      <td>16/06/2001</td>
      <td>21</td>
      <td>India</td>
      <td>Gujrat</td>
	 <td> 
	 <a href="register.php">
	 <button type="button"  id = "edit" class="btn btn-warning" >Edit</button>
	 </a>
	 </td>
	  <td><button type="button" id = "btndelete" class="btn btn-danger bttn">Delete</button></td>
    </tr>
	
		<tr class="table-active">
      <td>jparmar474@rku.ac.in</td>
      <td>jparmar474</td>
      <td>jparmar474</td>
      <td>17/04/2001</td>
      <td>21</td>
      <td>India</td>
      <td>Gujrat</td>
	 <td> 
	 <a href="register.php">
	 <button type="button" id = "edit" class="btn btn-warning">Edit</button>
	 </a>
	 </td>
	  <td><button type="button" id = "btndelete" class="btn btn-danger bttn">Delete</button></td>
    </tr>
	
    
  </tbody>
</table>
</form>
</body>
</html>
