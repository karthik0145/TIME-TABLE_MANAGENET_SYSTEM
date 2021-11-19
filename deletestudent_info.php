<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $UserID = $_GET['Del'];
            $query = " delete from student_info where Id = '".$UserID."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:viewstudent_info.php");
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