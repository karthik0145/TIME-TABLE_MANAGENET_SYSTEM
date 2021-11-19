<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['Room_id']) || empty($_POST['Room_capacity']) || empty($_POST['Block'])|| empty($_POST['Room_id']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {  $Room_id = $_POST['Room_id'];
          
            $Room_capacity = $_POST['Room_capacity'];
            $Block = $_POST['Block'];

            $query = " insert into room_info (Room_id, Room_capacity,Block) values('$Room_id','$Room_capacity','$Block')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:viewroom_info.php");
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