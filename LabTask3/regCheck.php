<?php
    session_start();

    if(isset($_POST['submit']))
    {
        $name= $_POST['name'];
        $email= $_POST['email'];
        $username= $_POST['username'];
        $password= $_POST['password'];
        $confirmPass= $_POST['confirmPass'];
        $gender= $_POST['gender'];
        $dob= $_POST['dob'];

        if($name=="" || $email=="" || $username=="" || $password=="" || $confirmPass=="" || $gender=="" || $dob=="")
        {
            echo "Must input details";
        }
        else
        {
            if($password==$confirmPass)
            {
                $_SESSION['username']= $username;
                $_SESSION['password']= $password;
                echo "Login Successful";
            }
            else
            {
                echo "Password and Confirm Password do not match";
            }
        }

    }

?>