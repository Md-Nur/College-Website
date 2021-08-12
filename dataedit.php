<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img\icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">


    <!-- My Css -->
    <link rel="stylesheet" href="style/css1.css">

    <style>

    </style>
    <!-- My Css -->

    <title>Show & Edit</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="#">
            <img src="img\icon.png" width="50" height="50" alt="Edit/Show" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#more" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Class</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" target="_blank" href="class/hsc_1st_year_science.php">HSC 1st Year (Science)</a>
                        <a class="dropdown-item" target="_blank" href="class/hsc_1st_year_commerce.php">HSC 1st Year (Commerce)</a>
                        <a class="dropdown-item" target="_blank" href="class/hsc_1st_year_humanities.php">HSC 1st Year (Humanities)</a>
                        <a class="dropdown-item" target="_blank" href="class/hsc_2nd_year_science.php">HSC 2nd Year (Science)</a>
                        <a class="dropdown-item" target="_blank" href="class/hsc_2nd_year_commerce.php">HSC 2nd Year (Commerce)</a>
                        <a class="dropdown-item" target="_blank" href="class/hsc_2nd_year_humanities">HSC 2nd Year (Humanities)</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="club.php">Clubs</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="form.php">Club Registration</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="notice.php">Notice</a>
                </li>

                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#more" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#sw">Show</a>
                        <a class="dropdown-item" href="#et">Edit</a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>

    <?php
    require "_db.php"; //database
    if (isset($_REQUEST['s0'])) {

        $rr0 = $_REQUEST['rr0'];
        $pd0 = $_REQUEST['pd0'];


        if ($conn == false) {
            echo 'Data base did not connected';
        }

        $q0 = "SELECT * FROM `club info` WHERE `Roll` = $rr0 AND `Password` = '$pd0'";

        $r0 = mysqli_query($conn, $q0);



        echo "<h5 class='htitle'>";

        $c0 = mysqli_num_rows($r0);
        if ($c0 > 0) {
            echo "Your info: <hr>";
            while ($row = mysqli_fetch_row($r0)) {


                echo "Club Id: ";
                echo "{$row[0]}";
                echo "<br>";


                echo "Name: ";
                echo "{$row[1]}";
                echo "<br>";

                echo "Phone: ";
                echo "{$row[2]}";
                echo "<br>";

                echo "Email: ";
                echo "{$row[3]}";
                echo "<br>";

                echo "Password: ";
                echo "{$row[4]}";
                echo "<br>";

                echo "Clubs: ";
                echo "{$row[5]}";
                echo "<br>";

                echo "Class: ";
                echo "{$row[6]}";
                echo "<br>";

                echo "Gender: ";
                echo "{$row[7]}";
                echo "<br>";
            }
        } else {
            echo "Your id & password did not match";
        };

        echo "</h5>";
    };

    ?>





    <form id="sw" action='' method='post'>
        <h1 style="text-align:center; color:white">Show Info</h1><br>
        <div class="form-group">
            <label>Club Id</label>
            <input type="Number" required name='rr0' class="form-control" required placeholder="Enter your club id" maxlength="11" size="11">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" required name='pd0' class="form-control" id="exampleInputPassword1" placeholder="Your password length should be 6-10" maxlength="10" size="10">
        </div>

        <input type="submit" value="Show my data" name='s0' class="btn btn-outline-light">
        <input type="reset" class="btn btn-outline-danger" value='Clear'><br>
    </form>

    <br>
    <!-- show -->



    <?php
    if (isset($_REQUEST['s2'])) {

        $rr1 = $_REQUEST['rr1'];
        $pd1 = $_REQUEST['pd1'];



        $doc = $_REQUEST['sc'];

        $nm = $_REQUEST['nm'];
        $pn = $_REQUEST['pn'];
        $el = $_REQUEST['el'];
        $psd = $_REQUEST['psd'];
        $bth = $_REQUEST['bth'];
        $sc = "";
        $gr = $_REQUEST['gr'];

        foreach ($doc as $new) {
            $sc = $sc . $new . ", ";
        }

        if ($conn == false) {
            echo 'Data base did not connected';
        }

        $q3 = "SELECT * FROM `club info` WHERE `Roll` = $rr1 AND `Password` = '$pd1'";

        $r3 = mysqli_query($conn, $q3);

        echo "<h1 class='htitle'>";

        $c3 = mysqli_num_rows($r3);
        if ($c3 > 0) {


            $q4 = "UPDATE `club info` SET `Full Name`='$nm', `Phone` = '$pn', `Email` = '$el', `password` = '$psd', `Club` ='$sc', `Batch` = '$bth', `Gender` = '$gr' WHERE `club info`.`Roll` = $rr1";

            $r4 = mysqli_query($conn, $q4);

            echo "Your data was update successfully";
        } else {
            echo "Your id & password did not match";
        }
        echo "</h1>";
    };

    ?>





    <br>







    <form id="et" action='' method='post'>
        <h1 style="text-align:center; color:white">Edit Info</h1>
        <hr>
        <h2 style="text-align:center; color:white">Give your info</h2><br>
        <div class="form-group">
            <label>Club Id</label>
            <input type="Number" name='rr1' required class="form-control" required placeholder="Enter your club id" maxlength="11" size="11">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name='pd1' required class="form-control" id="exampleInputPassword1" placeholder="Your password length should be 6-10" maxlength="10" size="10">
        </div>

        <hr>
        <h2 style="text-align:center; color:white">Give your updated info</h2><br>
        <div class="form-group">
            <label for="inputAddress">Full Name</label>
            <input type="text" required name='nm' class="form-control" required placeholder="Full Name">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="Number" required name='pn' class="form-control" required placeholder="Your phone number must be unique." maxlength="11" size="11">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name='el' required placeholder="Your phone number must be unique." class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Upadated Password</label>
            <input type="password" required name='psd' class="form-control" id="exampleInputPassword1" placeholder="Your password length should be 6-10" maxlength="10" size="10">

        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Class</label>
            <select class="form-control" required name='bth' id="exampleFormControlSelect1">
                <option>Select Your Class</option>
                <option>HSC 1st Year (Science)</option>
                <option>HSC 1st Year (Commerce)</option>
                <option>HSC 1st Year (Humanities)</option>
                <option>HSC 2nd Year (Science)</option>
                <option>HSC 2nd Year (Commerce)</option>
                <option>HSC 2nd Year (Humanities)</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Club Name </label> <br>
            <?php
            if ($conn == false) {
                echo 'Data base did not connected';
            }
            $sw = "SELECT * FROM `club` ORDER BY `club`.`S&C` ASC";
            $r1 = mysqli_query($conn, $sw);
            $c1 = mysqli_num_rows($r1);

            if ($c1 > 0) {
                while ($row = mysqli_fetch_row($r1)) {
            ?>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" require name="sc[]" id="inlineCheckbox1" value="<?php echo "{$row[1]}"; ?>">
                        <label class="form-check-label" for="inlineCheckbox1" style="color: white;">
                            <?php echo "{$row[1]}"; ?> </label>
                    </div>

            <?php
                }
            } else {
                echo 'You have no link in your database';
            }
            ?>

        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Gender</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="gr" type="radio" id="inlineRadio1" value="Male">
                <label class="form-check-label" style="color: white;" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gr" id="inlineRadio2" value="Female">
                <label class="form-check-label" style="color: white;" for="inlineRadio2">Female</label>
            </div>

        </div>
        <br>
        <input type="submit" value="Update" name='s2' class="btn btn-outline-light">
        <input type="reset" class="btn btn-outline-danger" value='Clear'><br>
    </form>

    <!-- Edit Form -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <!-- Optional JavaScript -->

    <!-- Optional JavaScript -->
    <script src="jquery.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>

</body>

</html>