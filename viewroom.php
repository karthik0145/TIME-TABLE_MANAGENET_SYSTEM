<?php 

    require_once("connection.php");
    $query = " select * from room order by Room_id ";
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
                                <td> Room_id </td>
                                <td> Day </td>
                                <td> Hour </td>
                                <td> Class_id </td>
                                <td> Status </td>
                                <td> id </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {$UserID = $row['Id'];
                                        $Room_id = $row['Room_id'];
                                        $Day = $row['Day'];
                                        $Hour = $row['Hour'];
                                        $Class_id = $row['Class_id'];
                                        $Status = $row['Status'];
                            ?>
                                    <tr>
                                        <td><?php echo $Room_id ?></td>
                                        <td><?php echo $Day ?></td>
                                        <td><?php echo $Hour ?></td>
                                        <td><?php echo $Class_id ?></td>
                                        <td><?php echo $Status ?></td>
                                        <td><?php echo $UserID ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $UserID  ?>">Edit</a></td>
                                        <td><a href="deleteroom.php?Del=<?php echo $UserID ?>">Delete</a></td>
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