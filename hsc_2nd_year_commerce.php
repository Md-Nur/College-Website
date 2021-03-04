<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!-- My css -->
    <link rel="stylesheet" href="css2.css">
    <title>HSC 2nd Year (Commerce)</title>
    <style>
        .header {
            display: flex;
            align-items: flex-end;
            justify-content: flex-end;
            height: 45vw;
            font-size: 7.5vw;
            background-size: cover;
            color: white;
            background-position: center;
            background-image: linear-gradient(-50deg, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0)), url('c5.jpg');
            padding: 50px;
            text-align: right;
            font-family: algerian;

        }

        @media(max-width:768px) {
            .header {
                display: flex;
                align-items: flex-end;
                justify-content: flex-end;
                height: 90vw;
                font-size: 9 vw;
                background-size: cover;
                color: white;
                background-position: center;
                background-image: linear-gradient(-50deg, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0)), url('c4.jpg');
                padding: 25px;
                text-align: right;
                font-family: algerian;

            }

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">
            <img src="icon.png" width="50" height="50" alt="College Website" loading="lazy">
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
                        <a class="dropdown-item" target="_blank" href="hsc_1st_year_science.php">HSC 1st Year (Science)</a>

                        <a class="dropdown-item" target="_blank" href="hsc_1st_year_commerce.php">HSC 1st Year (Commerce)</a>
                        <a class="dropdown-item" target="_blank" href="hsc_1st_year_humanities.php">HSC 1st Year (Humanities)</a>
                        <a class="dropdown-item" target="_blank" href="hsc_2nd_year_science.php">HSC 2nd Year (Science)</a>
                        <a class="dropdown-item" target="_blank" href="hsc_2nd_year_commerce.php">HSC 2nd Year (Commerce)</a>
                        <a class="dropdown-item" target="_blank" href="hsc_2nd_year_humanities.php">HSC 2nd Year (Humanities)</a>

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
                        <a class="dropdown-item" href="#reg">About</a>
                        <a class="dropdown-item" href="#result">Result</a>
                        <a class="dropdown-item" href="#xm">Exam</a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>

    <div class="header" id="Home">

        <div class="an10">HSC 2nd Year (Commerce)</div>
    </div>
    <div class="notice">
        <div class="ntc">Recent Notice:</div>

        <?php
        //database
        $dbcon = mysqli_connect('localhost', 'root', '', 'college'); //database
        //database

        if ($dbcon = false) {
            echo 'Data base did not connected';
        }
        $sw = "SELECT * FROM `news` WHERE `Batch` = 'HSC 2nd Year (Commerce)'";

        //database
        $r1 = mysqli_query(mysqli_connect('localhost', 'root', '', 'college'), $sw); //database
        //database

        $c1 = mysqli_num_rows($r1);
        if ($c1 > 0) {
            while ($row = mysqli_fetch_row($r1)) {
        ?>
                <div style="text-align: right; width:100%">
                    <marquee><?php echo "{$row[1]}"; ?></marquee>
                </div>
        <?php

            }
        } else {
            echo 'You have no link in your database';
        }
        ?>

    </div>

    <div class="option an5" id="reg">
        <h4>About This Class</h4>
        <?php

        //database
        $dbcon5 = mysqli_connect('localhost', 'root', '', 'college'); //database
        //database

        if ($dbcon5 = false) {
            echo 'Data base did not connected';
        }
        $sw5 = "SELECT * FROM `news` WHERE `Batch` = 'HSC 2nd Year (Commerce)'";

        //database
        $r5 = mysqli_query(mysqli_connect('localhost', 'root', '', 'college'), $sw5); //database
        //database

        $c5 = mysqli_num_rows($r5);
        if ($c5 > 0) {
            while ($row = mysqli_fetch_row($r5)) {
        ?>
                <div>
                    <p><?php echo "{$row[3]}"; ?></p>
                </div>
        <?php
            }
        } else {
            echo 'You have no link in your database';
        }
        ?>

    </div>
    <br>
    <!--Exam-->

    <h3 class="ytt an4" id='xm'>Exam</h3>
    <div class="ytv">
        <?php

        //database
        $dbcon = mysqli_connect('localhost', 'root', '', 'college'); //database
        //database

        if ($dbcon  = false) {
            echo 'Data base did not connected';
        }
        $sw = "SELECT * FROM `news` WHERE `Batch` = 'HSC 2nd Year (Commerce)'";

        //database
        $r1 = mysqli_query(mysqli_connect('localhost', 'root', '', 'college'), $sw); //database
        //database

        $c1 = mysqli_num_rows($r1);
        if ($c1 > 0) {
            while ($row = mysqli_fetch_row($r1)) {
                echo "{$row[2]}";
            }
        } else {
            echo 'You have no link in your database';
        };
        ?>
    </div>
    <!--Exam-->
    <br>
    <!--result-->

    <h3 class="ytt an3" id='result'>Result</h3>
    <div class="ytv">


        <table class="table table-striped table-dark an4" style="margin: 3vw; background-color:#00838a;">
            <tbody>

                <?php
                //database
                $data = mysqli_connect('localhost', 'root', '', 'college'); //database
                //database

                if ($data = false) {
                    echo 'Data base did not connected';
                }
                $show = "SELECT * FROM `z_hsc_2nd_year_commerce`";

                //database
                $r2 = mysqli_query(mysqli_connect('localhost', 'root', '', 'college'), $show); //database
                //database

                $c2 = mysqli_num_rows($r2);
                if ($c2 > 0) {
                    while ($row = mysqli_fetch_row($r2)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo "{$row[0]}"; ?></th>
                            <td><?php echo "{$row[1]}"; ?></td>
                            <td><?php echo "{$row[2]}"; ?></td>
                            <td><?php echo "{$row[3]}"; ?></td>
                        </tr>

                <?php
                    }
                } else {
                    echo 'You have no link in your database';
                }
                ?>
            </tbody>
        </table>
    </div>


    <footer>
        <div class="head">Copyright &copy All right reserved by Md. Nur E Alam
            Siddiquee <br></div> <br>
        <div class="footer">
            <div class="facebook"><a class="btn btn-outline-light" target="_blank" href="https://www.facebook.com/groups/BAFSD.HSC2017.OFFICIAL/?ref=group_header" role="button">Facebook Group</a></div>

            <div class="facebook"><a class="btn btn-outline-light" target="_blank" href="https://www.facebook.com/dhakashaheen/" role="button">Facebook Page</a>
            </div>
            <div class="facebook"><a class="btn btn-outline-light" target="_blank" href="https://en.wikipedia.org/wiki/Bangladesh_Air_Force_Shaheen_College,_Dhaka" role="button">Wikipedia</a>
            </div>
            <div class="facebook"><a class="btn btn-outline-light" target="_blank" href="https://www.youtube.com/channel/UCPBNds3gVITksS3BfHZPdqQ/videos" role="button">Youtube</a>
            </div>
        </div>
    </footer>
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