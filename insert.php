<?php
  include_once('./functions.php');
  $insertdata = new DB_con();

    if (isset($_POST['insert'])) {
    
      $fname = $_POST["firstname"];
      $lname = $_POST["lastname"];
      $email = $_POST["email"];
      $phonenumber = $_POST["phonenumber"];
      $address = $_POST["address"];
      $sql = $insertdata->insert($fname,$lname,$email,$phonenumber,$address);

        if ($sql) {
            echo "<script>
            alert('Record Inserted Successfully!');
            </script>";
            echo "<script>
            window.location.href='index.php'
            </script>";
        } else {
            echo "<script>
            alert('Something Went Wrong! Please try again');
            </script>";
            echo "<script>
            window.location.href='insert.php'
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
    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
        <hr>
        <h1 class="mt-5">Insert Page</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="mb-3 ">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3 ">
                <label for="phonenumber">Phone</label>
                <input type="text" class="form-control" name="phonenumber" required>
            </div>
            <div class="mb-3 ">
                <label for="address">Address</label>
                <textarea name="address" cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <button type="submit" name="insert" class="btn btn-success">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>