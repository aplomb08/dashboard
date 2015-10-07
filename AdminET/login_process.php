<?php

  include 'include/db.php';

    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);

    
    
    $sql = "SELECT password FROM teacher WHERE username='$username'";
    $result = mysql_query($sql);
    if($test = mysql_fetch_array($result))
    { 
      if($password == $test['password'])
      {
        session_start();
        $_SESSION['etsu_username'] = $username;
        
        echo "<script type='text/javascript'>
          window.location.href = 'teacher/';
          </script>";
      }
      else
      {
        echo "<script type='text/javascript'>
          window.location.href = 'index.php?msg=101';
          </script>";
      }
    }
    else
    { 
      echo "<script type='text/javascript'>
          window.location.href = 'index.php?msg=101';
          </script>";
    }



?>