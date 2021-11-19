<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['Faculty_id']) || empty($_POST['Faculty_name'])|| empty($_POST['Faculty_id']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {  $Faculty_id = $_POST['Faculty_id'];
          
            $Faculty_name = $_POST['Faculty_name'];
            
            $query = " insert into faculty (Faculty_id, Faculty_name) values('$Faculty_id','$Faculty_name')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:viewfaculty.php");
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