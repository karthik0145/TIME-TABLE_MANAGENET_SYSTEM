<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['Student_name']) || empty($_POST['Class_id']) || empty($_POST['Phone_number'])|| empty($_POST['Roll_number']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {  $Roll_number = $_POST['Roll_number'];
            $Student_name = $_POST['Student_name'];
            $Class_id = $_POST['Class_id'];
            $Phone_number = $_POST['Phone_number'];

            $query = " insert into student (Roll_number,Student_name, Class_id,Phone_number) values('$Roll_number' ,'$Student_name','$Class_id','$Phone_number')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
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