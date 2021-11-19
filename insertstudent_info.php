<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['Roll_number']) || empty($_POST['Course_id'])|| empty($_POST['Roll_number']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {  $Roll_number = $_POST['Roll_number'];
          
            $Course_id = $_POST['Course_id'];
            
            $query = " insert into student_info (Roll_number, Course_id) values('$Roll_number','$Course_id')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:viewstudent_info.php");
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