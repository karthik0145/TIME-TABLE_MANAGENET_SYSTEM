<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['Day']) || empty($_POST['Hour']) || empty($_POST['Class_id'])|| empty($_POST['Room_id']) ||empty($_POST['Status']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {  $Room_id = $_POST['Room_id'];
            $Day = $_POST['Day'];
            $Hour = $_POST['Hour'];
            $Class_id = $_POST['Class_id'];
            $Status = $_POST['Status'];

            $query = " insert into room (Room_id,Day, Hour,Class_id,Status) values('$Room_id' ,'$Day','$Hour','$Class_id','$Status')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:viewroom.php");
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