<?php
    if (isset($_POST["forgotPass"])){
        $connection = new mysqli{"localhost", "root", };
        
        $email = $connectin->real_escape_string($_POST["email"]);
        
        $data = $connection->query("SELECT id FROM users WHERE email='$email'");
        
        if ($data->num_rows > 0){
            $str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
            $str = str_shuffle($str);
            $str = substr($str, 0, 10);
            $url ="http://domain.com/members/resetPassword.php?token=$str&email=$email";
            
            mail($email, "Reset Password", "To reset your password please visit this: $url", "From: myanotheremail@domain.com\r\n");
            
            $connection->query("UPDATE users SET token='$str' WHERE email='$email'");
            
            echo "Please check your email!";
        }else {
            echo "Please Check your inputs!";
        }
    }
?>

<html>
    <body>
    <form action="forgotPassword.php method="post">
        <input type="text" name="email" placeholder="Email"><br>
        <input type="submit" name="forgotPass" value="Request Password">
    </form>
    </body>
</html>