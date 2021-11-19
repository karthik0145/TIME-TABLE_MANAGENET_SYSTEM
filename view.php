<?php 

    require_once("connection.php");
    $query = " select * from student order by Roll_number ";
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
                                <td> Student_name </td>
                                <td> Class_id </td>
                                <td> Phone_number </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $Roll_number = $row['Roll_number'];
                                        $Student_name = $row['Student_name'];
                                        $Class_id = $row['Class_id'];
                                        $Phone_number = $row['Phone_number'];
                            ?>
                                    <tr>
                                        <td><?php echo $Roll_number ?></td>
                                        <td><?php echo $Student_name ?></td>
                                        <td><?php echo $Class_id ?></td>
                                        <td><?php echo $Phone_number ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $Roll_number ?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $Roll_number ?>">Delete</a></td>
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