<?php 

    require_once("connection.php");
    $query = " select * from student_info order by Roll_number ";
    $result = mysqli_query($con,$query);

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
                                <td> Roll_number </td>
                               
                                <td> Course_id </td>
                                <td> id </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {$UserID = $row['Id'];
                                        $Roll_number = $row['Roll_number'];
                                    
                                        $Course_id = $row['Course_id'];
                            ?>
                                    <tr>
                                        <td><?php echo $Roll_number ?></td>
                                       
                                        <td><?php echo $Course_id ?></td>
                                        <td><?php echo $UserID ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $UserID  ?>">Edit</a></td>
                                        <td><a href="deletestudent_info.php?Del=<?php echo $UserID ?>">Delete</a></td>
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