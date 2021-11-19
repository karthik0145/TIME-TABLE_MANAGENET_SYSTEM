<?php 

    require_once("connection.php");
    
    //$result = mysqli_query($con,$query);
    if(isset($_POST['submit']))
    {
        if(empty($_POST['Faculty_id']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {  
            $Faculty_id = $_POST['Faculty_id'];
          

            $query = " select * from class where Faculty_id= $Faculty_id";
            $result = mysqli_query($con,$query);

            
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr style="background-color:yellow;font-weight: bold;">
                                <td> Class_id </td>
                                <td> Day </td>
                                <td> Hour </td>
                                <td> Faculty_id </td>
                                <td> Course_id </td>
                               
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {$UserID = $row['Id'];
                                        $Class_id = $row['Class_id'];
                                        $Day = $row['Day'];
                                        $Hour = $row['Hour'];
                                        $Faculty_id = $row['Faculty_id'];
                                        $Course_id = $row['Course_id'];
                            ?>
                                    <tr>
                                        <td><?php echo $Class_id ?></td>
                                        <td><?php echo $Day ?></td>
                                        <td><?php echo $Hour ?></td>
                                        <td><?php echo $Faculty_id ?></td>
                                        <td><?php echo $Course_id ?></td>
                                        
                                        <td><a href="edit.php?GetID=<?php echo $UserID  ?>">Edit</a></td>
                                        <td><a href="deleteclass.php?Del=<?php echo $UserID ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>