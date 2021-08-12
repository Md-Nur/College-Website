<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img\icon.png">
    <title>Checking Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!-- My Css -->
    <link rel="stylesheet" href="style/css1.css">
</head>

<body>
    <h1 class="title">Password Cheaking</h1>
    <?php
    if (isset($_REQUEST['s0'])) {
        echo "<div class='title'>";
        $app = $_REQUEST['app'];
        if ($app == '$@m!h@+@$n!m') {
    ?>
            <a href="<?php echo $app; ?>.php" class="btn btn-danger">Go to Admin Panel</a>
    <?php
        } else {
            echo "<h2>Incorrect password</h2>";
        }
        echo "</div>";
    }
    ?>

    <form id="check" action='' method='post'>
        <div class="form-group">
            <label>Give Admin Panel's Password:</label>
            <input type="password" required name='app' class="form-control" required placeholder="কোডিং এর সোর্স ফোল্ডারে password.txt নামক ফাইলে আডমিন প্যানেলের পাসওয়ার্ড পাওয়া যাবে।">
        </div>
        <input type="submit" value="Check password" name='s0' class="btn btn-outline-light">
        <input type="reset" class="btn btn-outline-danger" value='Clear'><br>
    </form>

    <p class="title an10">কোডিং এর সোর্স ফোল্ডারে password.txt নামক ফাইলে আডমিন প্যানেলের পাসওয়ার্ড পাওয়া যাবে।</p>


    <!-- Optional JavaScript -->
    <script src="jquery.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>

</body>

</html>