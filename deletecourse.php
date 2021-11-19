<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $UserID = $_GET['Del'];
            $query = " delete from course where Course_id = '".$UserID."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:viewcourse.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:view.php");
        }

?>