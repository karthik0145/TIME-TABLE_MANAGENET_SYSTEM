<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $UserID = $_POST['Roll_number'];
        $UserName = $_POST['Student_name'];
        $UserEmail = $_POST['Class_id'];
        $UserAge = $_POST['Phone_number'];

        $query = " update student set Student_name = '".$UserName."', Class_id='".$UserEmail."',Phone_number='".$UserAge."' where Roll_number='".$UserID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:view.php");
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