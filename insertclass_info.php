<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['Class_id']) || empty($_POST['Class_capacity'])|| empty($_POST['Class_id']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {  $Class_id = $_POST['Class_id'];
          
            $Class_capacity = $_POST['Class_capacity'];
            
            $query = " insert into class_info (Class_id, Class_capacity) values('$Class_id','$Class_capacity')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:viewclass_info.php");
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