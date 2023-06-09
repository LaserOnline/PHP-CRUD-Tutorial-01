<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Index Page</title>
</head>

<body>

    <div class="container">
        <h1 class="mt-5">Infomation Page</h1>
        <a href="./insert.php" class="btn btn-success">
            Go Insert
        </a>
        <table id='mytable' class="table table-bordered table-striped">
            <thead>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Address</th>
                <th>Posting Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                <?php
                include_once('./functions.php');
                $fetchdata = new DB_con();
                $sql = $fetchdata->fetchdata();
                while($row = mysqli_fetch_assoc($sql)) {
            ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['phonenumber'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['postingdate'];?></td>

                    <td>
                        <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-primary">
                            Edit
                        </a>
                    </td>
                    <td>
                        <a href="delete.php?del=<?php echo $row['id'];?>" class="btn btn-danger">
                            Delete
                        </a>
                    </td>
                </tr>

                <?php 
                }
            ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>