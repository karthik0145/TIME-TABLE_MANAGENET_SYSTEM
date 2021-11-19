<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['Course_id']) || empty($_POST['Course_name']) || empty($_POST['Credits'])|| empty($_POST['Course_id']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {  $Course_id = $_POST['Course_id'];
          
            $Course_name = $_POST['Course_name'];
            $Credits = $_POST['Credits'];

            $query = " insert into course (Course_id, Course_name,Credits) values('$Course_id','$Course_name','$Credits')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:viewcourse.php");
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