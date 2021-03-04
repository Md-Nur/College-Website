<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!-- My Css -->
    <link rel="stylesheet" href="css1.css">
    <style>
        /* animation */
        .an1,
        .an2,
        .an3,
        .an4,
        .an401,
        .an402,
        .an5,
        .an501,
        .an502,
        .an503,
        .an504,
        .an505,
        .an6,
        .an601,
        .an602,
        .an603,
        .an604,
        .an605,
        .an7,
        .an8,
        .an9,
        .an701,
        .an801,
        .an901,
        .an702,
        .an802,
        .an902,
        .an10 {
            opacity: 0;
        }

        .an1.animated,
        .an2.animated,
        .an3.animated,
        .an4.animated,
        .an401.animated,
        .an402.animated,
        .an5.animated,
        .an501.animated,
        .an502.animated,
        .an503.animated,
        .an504.animated,
        .an505.animated,
        .an6.animated,
        .an601.animated,
        .an602.animated,
        .an603.animated,
        .an604.animated,
        .an605.animated,
        .an7.animated,
        .an8.animated,
        .an9.animated,
        .an701.animated,
        .an801.animated,
        .an901.animated,
        .an702.animated,
        .an802.animated,
        .an902.animated,
        .an10.animated {
            opacity: 1;
        }
    </style>
    <title>Admin panel</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="#">
            <img src="icon.png" width="50" height="50" alt="Admin Panel" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#show">Show</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#pne">All Notice</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#vo">Youtube Video</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#sc">Club</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#ne">Recent Notice</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#xm">Exam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#at">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="form.php">Club Registration</a>
                        <a class="dropdown-item" href="dataedit">Show/Edit</a>

                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!--Data-->

    <h2 class="title an5" id="show">Show data</h2><br>

    <?php
    if (isset($_REQUEST['s0'])) {
        $rr0 = $_REQUEST['rr0'];

        $dbc0 = mysqli_connect('localhost', 'root', '', 'college');

        if ($dbc0 = false) {
            echo 'Data base did not connected';
        }

        $q0 = "SELECT * FROM `club info` WHERE `Roll` = $rr0";

        $r0 = mysqli_query(mysqli_connect('localhost', 'root', '', 'college'), $q0);



        echo "<h5 class='htitle'>";

        $c0 = mysqli_num_rows($r0);
        if ($c0 > 0) {
            echo "Info: <hr>";
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

                echo "Joining Date: ";
                echo "{$row[8]}";
                echo "<br>";
            }
        } else {
            echo "There have no person with this id";
        };

        echo "</h5>";
    };

    ?>

    <form id="sw" action='' method='post'>
        <div class="form-group">
            <label>Club Id:</label>
            <input type="Number" required name='rr0' class="form-control" required placeholder="Enter Club Id" maxlength="11" size="11">
        </div>

        <input type="submit" value="Show data" name='s0' class="btn btn-outline-light">
        <input type="reset" class="btn btn-outline-danger" value='Clear'><br>
    </form>
    <br>


    <!-- parmanent notice -->

    <br>
    <h2 class="title an6" id="pne">All Notice</h2><br>

    <?php

    if (isset($_REQUEST['s08'])) {
        $iv08 = $_REQUEST['iv08'];
        $it08 = $_REQUEST['it08'];

        $c08 = mysqli_connect('localhost', 'root', '', 'college');

        if ($c08 = false) {
            echo 'Data base did not connected';
        }

        $q08 = "INSERT INTO `all_notice` (`title`, `time`, `body`) VALUES ('$iv08', current_timestamp(), '$it08')";

        $r08 = mysqli_query(mysqli_connect('localhost', 'root', '', 'college'), $q08);

        if ($r08 = true) {
            echo '<p class="result">';
            echo 'Your notice was added';
            echo '</p>';
        } else {
            echo '<p class="result">';
            echo 'Error code 184';
            echo '</p>';
        }
    }
    ?>

    <form action='' method='post'>

        <div class="form-group">
            <label for="inputAddress">Notice title</label>
            <input type="text" name='iv08' class="form-control" required>
        </div>

        <div class="form-group">
            <label for="inputAddress">Write the notice</label>
            <textarea class="form-control" name="it08" reauired id="exampleFormControlTextarea1"></textarea>
        </div>

        <input type="submit" name='s08' class="btn btn-outline-light" value="Add Notice">
        <input type="reset" class="btn btn-outline-danger" value='Clear'>
    </form>
    <?php

    if (isset($_REQUEST['s01'])) {
        $iv01 = $_REQUEST['iv01'];

        $c01 = mysqli_connect('localhost', 'root', '', 'college');

        if ($c01 = false) {
            echo 'Data base did not connected';
        }

        $q01 = "DELETE FROM `all_notice` WHERE `all_notice`.`time` = '$iv01'";

        $r01 = mysqli_query(mysqli_connect('localhost', 'root', '', 'college'), $q01);

        if ($r01 = true) {
            echo '<p class="result">';
            echo 'Your notice was deleted';
            echo '</p>';
        } else {
            echo '<p class="result">';
            echo 'Error code ';
            echo '</p>';
        }
    }
    ?>

    <form action='' method='post'>

        <div class="form-group">
            <label for="inputAddress">Give notice time (Only the numaraic sign like: 2020-10-24 14:51:21) to delete the notice from the notice page</label>
            <input type="text" name='iv01' class="form-control" required>
        </div>

        <input type="submit" name='s01' class="btn btn-outline-light" value="Delete Notice">
        <input type="reset" class="btn btn-outline-danger" value='Clear'>
    </form>
    <br>




    <!-- video -->
    <!-- Video upload -->
    <h2 class="title an501" id="vo">Youtube Video</h2><br>
    <?php

    if (isset($_REQUEST['s1'])) {
        $input = $_REQUEST['l1'];

        //Data base connection
        $c1 = mysqli_connect('localhost', 'root', '', 'college'); //database
        // data base connection

        if ($c1 = false) {
            echo 'Data base did not connected';
        }

        $q1 = "INSERT INTO `youtube videos`(`Link`) VALUES ('$input')";

        //database
        $r1 = mysqli_query(mysqli_connect('localhost', 'root', '', 'college'), $q1); //database
        //database

        if ($r1 = true) {
            echo '<p class="result">';
            echo 'Your video was uploaded';
            echo '</p>';
        } else {
            echo '<p class="result">';
            echo 'Error code 187';
            echo '</p>';
        }
    }

    ?>

    <form action='' method='post'>
        <div class="form-group">
            <label for="inputAddress">Give your new video's short link (last 11 digit of link. Example: w92uYFy3S-w )</label>
            <input type="text" name='l1' class="form-control" required>
        </div>
        <input type="submit" name='s1' class="btn btn-outline-light" value='Upload'>
        <input type="reset" class="btn btn-outline-danger" value='Clear'><br>
    </form>




    <!-- video delete -->
    <?php

    if (isset($_REQUEST['s2'])) {
        $input = $_REQUEST['l2'];

        //Data base connection
        $dbc1 = mysqli_connect('localhost', 'root', '', 'college'); //database
        // data base connection

        if ($dbc1 = false) {
            echo 'Data base did not connected';
        }

        $q1 = "DELETE FROM `youtube videos` WHERE Link='$input'";

        //database

        $r1 = mysqli_query(mysqli_connect('localhost', 'root', '', 'college'), $q1); //database

        //database

        if ($r1 = true) {
            echo '<p class="result">';
            echo 'Your video was deleted';
            echo '</p>';
        } else {
            echo '<p class="result">';
            echo 'Error code 174';
            echo '</p>';
        }
    }

    ?>

    <form action='' method='post'>
        <div class="form-group">
            <label for="inputAddress">Give your video's short link (last 11 digit of link. Example: w92uYFy3S-w )</label>
            <input type="text" name='l2' class="form-control" required>
        </div>
        <input type="submit" name='s2' class="btn btn-outline-light" value='Delete'>
        <input type="reset" class="btn btn-outline-danger" value='Clear'><br>
    </form><br><br><br>

    <!-- club name -->

    <!-- add club -->
    <h2 class="title an601" id="sc">Clubs</h2><br>
    <?php

    if (isset($_REQUEST['s3'])) {
        $input = $_REQUEST['l3'];

        //Data base connection
        $c3 = mysqli_connect('localhost', 'root', '', 'college'); //database
        // data base connection

        if ($c3 = false) {
            echo 'Data base did not connected';
        }

        $q3 = "INSERT INTO `Club`( `S&C`) VALUES ('$input')";

        //database
        $r3 = mysqli_query(mysqli_connect('localhost', 'root', '', 'college'), $q3); //database
        //database

        if ($r3 = true) {
            echo '<p class="result">';
            echo 'Your schoo/college name added';
            echo '</p>';
        } else {
            echo '<p class="result">';
            echo 'Error code 250';
            echo '</p>';
        }
    }

    ?>

    <form action='' method='post'>
        <div class="form-group">
            <label for="inputAddress">Give Club Name:</label>
            <input type="text" name='l3' class="form-control" required>
        </div>
        <input type="submit" name='s3' class="btn btn-outline-light" value='Add'>
        <input type="reset" class="btn btn-outline-danger" value='Clear'><br>
    </form>




    <!-- 4. Club Deleted -->
    <?php

    if (isset($_REQUEST['s4'])) {
        $input = $_REQUEST['l4'];

        //Data base connection
        $c4 = mysqli_connect('localhost', 'root', '', 'college'); //database
        // data base connection

        if ($c4 = false) {
            echo 'Data base did not connected';
        }

        $q4 = "DELETE FROM `Club` WHERE `S&C` = '$input'";

        //database

        $r4 = mysqli_query(mysqli_connect('localhost', 'root', '', 'college'), $q4); //database

        //database

        if ($r4 = true) {
            echo '<p class="result">';
            echo 'Your Club Removed';
            echo '</p>';
        } else {
            echo '<p class="result">';
            echo 'Error code 298';
            echo '</p>';
        }
    }

    ?>

    <form action='' method='post'>
        <div class="form-group">
            <label for="inputAddress">Give Club Name to Remove</label>
            <input type="text" name='l4' class="form-control" required>
        </div>
        <input type="submit" name='s4' class="btn btn-outline-light" value='Remove'>
        <input type="reset" class="btn btn-outline-danger" value='Clear'><br>
    </form><br><br><br>

    <!-- Recent Notice -->

    <h2 class="title an502" id="ne">Recent Notice</h2><br>

    <?php

    if (isset($_REQUEST['s5'])) {
        $input = $_REQUEST['l5'];
        $i5 = $_REQUEST['bth'];

        //Data base connection
        $c5 = mysqli_connect('localhost', 'root', '', 'college'); //database
        // data base connection

        if ($c5 = false) {
            echo 'Data base did not connected';
        }

        $q5 = "UPDATE `news` SET `Notice`='$input' WHERE batch = '$i5'";

        //database

        $r5 = mysqli_query(mysqli_connect('localhost', 'root', '', 'college'), $q5); //database

        //database

        if ($r5 = true) {
            echo '<p class="result">';
            echo 'Your notice was updated';
            echo '</p>';
        } else {
            echo '<p class="result">';
            echo 'Error code 317';
            echo '</p>';
        }
    }

    ?>

    <form action='' method='post'>
        <div class="form-group">
            <label for="inputAddress">Write Your Recent Notice</label>
            <textarea class="form-control" placeholder="Your notice must be less than 80 words" name="l5" id="exampleFormControlTextarea1"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Page</label>
            <select class="form-control" name='bth' id="exampleFormControlSelect1">
                <option>Select Your page</option>
                <option>Home</option>
                <option>HSC 1st Year (Science)</option>
                <option>HSC 1st Year (Commerce)</option>
                <option>HSC 1st Year (Humanities)</option>
                <option>HSC 2nd Year (Science)</option>
                <option>HSC 2nd Year (Commerce)</option>
                <option>HSC 2nd Year (Humanities)</option>
            </select>
        </div>
        <input type="submit" name='s5' class="btn btn-outline-light" value="Update">
        <input type="reset" class="btn btn-outline-danger" value='Clear'><br>
    </form>



    <br><br>

    <!-- Exam -->

    <h2 class="title an602" id="xm">Exam</h2><br>

    <?php

    if (isset($_REQUEST['s6'])) {
        $it = $_REQUEST['it6'];
        $i6 = $_REQUEST['bth'];

        //Data base connection
        $c6 = mysqli_connect('localhost', 'root', '', 'college'); //database
        // data base connection

        if ($c6 = false) {
            echo 'Data base did not connected';
        }

        $q6 = "UPDATE `news` SET `Exam`='$it' WHERE batch = '$i6'";

        //database

        $r6 = mysqli_query(mysqli_connect('localhost', 'root', '', 'college'), $q6); //database

        //database

        if ($r6 = true) {
            echo '<p class="result">';
            echo 'Your google form was updated';
            echo '</p>';
        } else {
            echo '<p class="result">';
            echo 'Error code 388';
            echo '</p>';
        }
    }

    ?>

    <form action='' method='post'>
        <div class="form-group">
            <label for="inputAddress">Enter your google form embed link</label>
            <textarea class="form-control" name="it6" id="exampleFormControlTextarea1"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Class</label>
            <select class="form-control" name='bth' id="exampleFormControlSelect1">
                <option>Select Your page</option>
                <option>HSC 1st Year (Science)</option>
                <option>HSC 1st Year (Commerce)</option>
                <option>HSC 1st Year (Humanities)</option>
                <option>HSC 2nd Year (Science)</option>
                <option>HSC 2nd Year (Commerce)</option>
                <option>HSC 2nd Year (Humanities)</option>
            </select>
        </div>
        <input type="submit" name='s6' class="btn btn-outline-light" value="Update">
        <input type="reset" class="btn btn-outline-danger" value='Clear'>
    </form>

    <!--About-->
    <br>
    <h2 class="title an503" id="at">About</h2><br>

    <?php

    if (isset($_REQUEST['s7'])) {
        $it = $_REQUEST['it7'];
        $i7 = $_REQUEST['bth'];

        //Data base connection
        $c7 = mysqli_connect('localhost', 'root', '', 'college'); //database
        // data base connection

        if ($c7 = false) {
            echo 'Data base did not connected';
        }

        $q7 = "UPDATE `news` SET `About`='$it' WHERE batch = '$i7'";

        //database

        $r7 = mysqli_query(mysqli_connect('localhost', 'root', '', 'college'), $q7); //database

        //database

        if ($r7 = true) {
            echo '<p class="result">';
            echo 'Your info was updated';
            echo '</p>';
        } else {
            echo '<p class="result">';
            echo 'Error code 461';
            echo '</p>';
        }
    }

    ?>

    <form action='' method='post'>
        <div class="form-group">
            <label for="inputAddress">About Class</label>
            <textarea class="form-control" name="it7" id="exampleFormControlTextarea1"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Page</label>
            <select class="form-control" name='bth' id="exampleFormControlSelect1">
                <option>Select Your page</option>
                <option>Home</option>
                <option>HSC 1st Year (Science)</option>
                <option>HSC 1st Year (Commerce)</option>
                <option>HSC 1st Year (Humanities)</option>
                <option>HSC 2nd Year (Science)</option>
                <option>HSC 2nd Year (Commerce)</option>
                <option>HSC 2nd Year (Humanities)</option>
            </select>
        </div>

        <input type="submit" name='s7' class="btn btn-outline-light" value="Update">
        <input type="reset" class="btn btn-outline-danger" value='Clear'>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

    <!-- Optional JavaScript -->
    <script src="jquery.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
</body>

</html>