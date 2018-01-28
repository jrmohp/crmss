<?php


if (require 'php/connect.php')
{
    if (isset ($_SESSION['username']) === true)
    {
        $login_message = " You're already logged in ";
        header('Location: user/index.php');
    }

    else if (( isset ( $_POST[ 'username' ] )) && ( isset ( $_POST [ 'password' ] )) && !( isset ( $_SESSION[ 'username' ] )) )
    {
        $username = $_POST ['username'];
        $password = $_POST ['password'];
        if (!(empty ($username)) && !(empty ($password)))
        {
            $query = "SELECT empid,fname,prv,position,password FROM addemployee WHERE username='$username'";
            if ($pass = $conn->query($query))
            {
                if ($row = $pass->fetch_assoc())
                {
                    if ($row['password'] == $password)
                    {

                        $_SESSION['name'] = $row['fname'];
                        $_SESSION['prv'] = $row['prv'];
                        $_SESSION['emid'] = $row['empid'];
                        $_SESSION['pos'] = $row['position'];

                        header("Location:user/index.php");

                    }
                    else
                    {
                        $login_message = "Wrong Password";
                    }
                }
                else
                {
                    $login_message = "No User Found With Such User Name";
                }
            }

        }
    }

}

?>