<?php
    session_start ();
    $error = '';
    if (isset ($_POST['submit'])){
        if (empty ($_POST ['email']) || empty ($_POST['password']))
        {
            $error ="Email and Password is invalid";
        }
        else
        {
            //Define username and password
            $username =$_POST['email'];
            $password = $_POST ['password'];
            
            //Establishing Connection With Server By Passing server_name, user_id and password as a parameter
            $con = mysql_connect("localhost","root","");
            $db =mysql_select_db ("road",$con);
            
            /*$username = stripslashes($username);
            $password = stripslashes($password);
            $username = mysql_real_escape_string($username);
            $password = mysql_real_escape_string($password);
            */
            $query = mysql_query("select * from users where email = '$username' AND password = '$password'",$con);
            if ($query==false)
            {
                $_SESSION ['email'] = $username;
                header ("location:index.php");
                //die(mysql_error());
            }
            $row = mysql_num_rows($query);
            if ($row == 1)
            {
                   // $_SESSION ['email'] = $username;
                    //header ("location:index.php");
            }
            else
            {
                $error ="Email or Password is invalid";
            }
            mysql_close ($con);
        }
    }
?>