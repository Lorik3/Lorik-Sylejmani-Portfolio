<?php 
    if (isset($_POST['submit'])) {
      
   
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 

$conn = new mysqli('localhost','root','','portfolio');
if ($conn->connect_error)
{
        die('Connection Faild : '.$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into contact(name,email,message)values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$message);
    $stmt->execute();
    echo "Send it ";
    $stmt->close();
    $conn->close();
    // header('welcome.php');
}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title></title>
    <link rel="stylesheet" href="./style/contact.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

</head>
<body>
                     
    
                <section class="contact">
                <div class="contact-content">
                    <h2 style="color:#00bcd4;">Me kontaktoni</h2>
                    <p ><small> Fully functional contact form</small> </p>
                 </div>

                    <div class="contact-container">
                    <div class="contact-info">
                        <div class="contact-box">
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="text">
                                <h3>Adresa</h3>
                                <p><strong>Ibrahim Popovci </strong>.</p>

                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="icon"><i class="fas fa-at"></i></div>
                            <div class="text">
                                <h3>Email</h3>
                                <p><strong>loriksylejmanii@hotmail.com </strong></p>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="icon"><i class="fas fa-phone"></i></div>
                            <div class="text">
                                <h3 >Numri i telefonit</h3>
                                <p><strong>+383 44 826 157 </strong></p>

                            </div>
                        </div>
                    </div>

                    <div class="contact-form">

                        <form action="welcome.php"method="post">
                            <h2>Dergo Email</h2>
                            <div class="input-box">
                                <input type="text" name="name"value="" require="required">
                                <span style="color:#00bcd4;">Emri</span>
                            </div>

                            <div class="input-box">
                                <input type="email" name="email"value="" require="required">
                                <span style="color:#00bcd4;">Email</span>
                            </div>

                            <div class="input-box">
                                <textarea name="message"value=""  require="required" ></textarea>
                                <span style="color:#00bcd4;">Mesazhi</span>
                            </div>

                            <div class="input-box">
                                <input type="submit"name="submit" value="Dergo">
                            </div>

                        </form>
                    </div>
                </div>


        </section>
        
</body>
</html>