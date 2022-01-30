<?php
        $myemail = "admin@admin.com";
        $mypass = "admin";
     if(isset($_POST['submit']))
     {
            $email= $_POST['email'];
            $password= $_POST['password'];
           
            if($email==$myemail and $password == $mypass)
            {
        
                  session_start();
                    $_SESSION['email']=$email;
                    header("location: welcome.php");
            }

            else
            {
                 echo "gabim";
            }
     }
     else
     {
         header("location: welcome.php");
     }
?>