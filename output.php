<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $Username = $_POST["username"];
        $Email = $_POST["email"];
        $Password = $_POST["password"];
        $ConfirmPassword = $_POST["confirm_password"];
/*
        if($Username =="" || $Email =="" || $Password =="" || $ConfirmPassword)
        {
            echo "One or more input is Empty";
        }
        else{
            echo "The username is" . $_POST["username"]. "The email is" .$_POST["email"];
        }
*/
/*
        echo "Username:".$_POST["username"]."<br>";
        echo "Email:".$_POST["email"]."<br>";
        echo "Password:".$_POST["password"]."<br>";
        echo "Confirm Password:".$_POST["confirm_password"]."<br>";
*/


/*
    if(trim($Username) =="" || empty($Username))
    {
        echo "username is Empty";
    }
    else{
        echo "The username is" . $_POST["username"]."<br>";
    }

    if($Email =="")
    {
        echo "email is Empty";
    }
    else{
        echo "The email is" . $_POST["email"]."<br>";
    }

    if($Password=="")
    {
        echo "password is Empty";
    }
    else{
        echo "The password is" . $_POST["password"]."<br>";
    }

    if($ConfirmPassword =="")
    {
        echo "Confirm password is Empty";
    }
    else{
        echo "The confirm password is" . $_POST["confirm_password"]."<br>";
    }

     }
    else{
        echo "Invalid Method Type";
    }

*/

    if(trim($Password) == trim($ConfirmPassword))
    {
        header("location: demo.php?success=Registration Successful");
    }
    else{
        header("location: demo.php?error=Mali ka nanaman");
    }

}
   

?>