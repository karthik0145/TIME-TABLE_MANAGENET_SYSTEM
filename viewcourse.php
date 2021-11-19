<?php 

    require_once("connection.php");
    $query = " select * from course  ";
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
                                <td> Course_id </td>
                                <td> Course_name </td>
                                <td> Credits </td>
                               
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $Course_id = $row['Course_id'];
                                        $Course_name = $row['Course_name'];
                                        $Credits = $row['Credits'];
                                       
                            ?>
                                    <tr>
                                        <td><?php echo $Course_id ?></td>
                                        <td><?php echo $Course_name ?></td>
                                        <td><?php echo $Credits ?></td>
                                       
                                        <td><a href="edit.php?GetID=<?php echo $Course_id ?>">Edit</a></td>
                                        <td><a href="deletecourse.php?Del=<?php echo $Course_id ?>">Delete</a></td>
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