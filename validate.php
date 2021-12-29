<?php
  session_start();
  $Email = $_POST['Email'];
  $Password =$_POST['Password'];
  $remember = $_POST['remember'];

  if($Email == 'kjivrajani728@rku.ac.in' and $Password == '123456')
  {
      $_SESSION['Email'] = $Email;
      $_SESSION['Password'] = $Password;
      
      if($remember)
      {
          setcookie("username_cookie",$Email,time()+120);
          setcookie("Password_cookie",$Password,time()+120);
      }
      else
      {
        setcookie("username_cookie",$Email,time());
        setcookie("Password_cookie",$Password,time());
      }
        header('Location: index.php');
  }  
 else
    {
        header('Location: login.php');
     }

      
  
  
?>