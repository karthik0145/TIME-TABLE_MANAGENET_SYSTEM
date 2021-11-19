n<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $UserID = $_GET['Del'];
            $query = " delete from class where Id = '".$UserID."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:viewclass.php");
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