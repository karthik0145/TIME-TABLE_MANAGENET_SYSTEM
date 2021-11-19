<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['Day']) || empty($_POST['Hour']) || empty($_POST['Faculty_id'])|| empty($_POST['Class_id']) ||empty($_POST['Course_id']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {  $Class_id = $_POST['Class_id'];
            $Day = $_POST['Day'];
            $Hour = $_POST['Hour'];
            $Faculty_id = $_POST['Faculty_id'];
            $Course_id = $_POST['Course_id'];

            $query = " insert into class (Class_id,Day, Hour,Faculty_id,Course_id) values('$Class_id' ,'$Day','$Hour','$Faculty_id','$Course_id')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:viewclass.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }



?>