<?php 

    require_once("connection.php");
    $Roll_number = $_GET['GetID'];
    $query = " select * from student where Roll_number='".$Roll_number."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $Roll_number = $row['Roll_number'];
        $Student_name = $row['Student_name'];
        $Class_id = $row['Class_id'];
        $Phone_number = $row['Phone_number'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Table Student</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?ID=<?php echo $Roll_number ?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder=" User Roll_number " name="Roll_number" value="<?php echo $Roll_number ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Name " name="Student_name" value="<?php echo $Student_name ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Email " name="Class_id" value="<?php echo $Class_id ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Age " name="Phone_number" value="<?php echo $Phone_number ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>