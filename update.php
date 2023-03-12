<?php
    include_once("./functions.php");

    $updatedata = new DB_con();

        if(isset($_POST['update'])) {
            $userID = $_GET['id'];
            $fname = $_POST["firstname"];
            $lname = $_POST["lastname"];
            $email = $_POST["email"];
            $phonenumber = $_POST["phonenumber"];
            $address = $_POST["address"];
            $sql = $updatedata->update($fname,$lname,$email,$phonenumber,$address,$userID);
            
            if ($sql === true) {
                echo "<script>
                alert('Updated Successfully!');
                </script>";
                echo "<script>
                window.location.href='./index.php'
                </script>";
            } else {
                echo "<script>
                alert('Error: Update');
                </script>";
            }
        }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>I N S E R T I N T O</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1>U D A T E P A G E</h1>
    <a href="./index.php" class="btn btn-primary mt-3">Go H O M E</a>
    <div class="container">
        <hr>
        <?php
            $userID = $_GET['id'];
            $updateuser = new DB_con();
            $sql = $updateuser->fetchonerecord($userID);
            while($row = mysqli_fetch_array($sql)) {
        ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname'];?>"
                    required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname'];?>" required>
            </div>
            <div class="mb-3 ">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>" required>
            </div>
            <div class="mb-3 ">
                <label for="phonenumber">Phone</label>
                <input type="text" class="form-control" name="phonenumber" value="<?php echo $row['phonenumber'];?>"
                    required>
            </div>
            <div class="mb-3 ">
                <label for="address">Address</label>
                <textarea name="address" cols="30" rows="10" class="form-control"
                    required><?php echo $row['address'];?></textarea>
            </div>
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </form>
    </div>

    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>