<?php 

    require_once("connection.php");
    $query = " select * from class_info  ";
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
                                <td> Class_id </td>
                                <td> Class_capacity </td>
                            
                               
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $Class_id = $row['Class_id'];
                                        $Class_capacity = $row['Class_capacity'];
                                       
                                       
                            ?>
                                    <tr>
                                        <td><?php echo $Class_id ?></td>
                                        <td><?php echo $Class_capacity ?></td>
                                    
                                       
                                        <td><a href="edit.php?GetID=<?php echo $Class_id ?>">Edit</a></td>
                                        <td><a href="deleteclass_info.php?Del=<?php echo $Class_id ?>">Delete</a></td>
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