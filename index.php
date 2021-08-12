<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img\icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!-- My css -->
    <link rel="stylesheet" href="style/css2.css">

    <title>College Website</title>

    <style>
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50vw;
            font-size: 8vw;
            background-size: cover;
            color: white;
            background-position: center;
            background-image: radial-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0)), url('img/college/c0.jpg');
            padding: 50px;
            text-align: center;
            font-family: algerian;
        }

        .ytx {
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .ytx>iframe {
            padding: 1%;
            width: 48vw;
            height: 27vw;
        }

        .et {
            padding: 15px 1vw;
            width: 330px;
            height: 350px;
            text-align: center;
            color: white;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .det {
            width: 300px;
            height: 300px;
            text-align: center;
        }

        .map {
            width: 96vw;
            height: 54vw;
            margin: 1vw;
            border-radius: 5px;

        }



        @media(max-width:768px) {
            .header {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vw;
                font-size: 10vw;
                background-size: cover;
                color: white;
                background-position: center;
                background-image: radial-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0)), url('img/college/c8.jpg');
                padding: 25px;
                text-align: center;
                font-family: algerian;
            }

            .ytx>iframe {
                margin: 2vw;
                width: 96vw;
                height: 54vw;
            }

            .map {
                width: 96vw;
                height: 96vw;
                margin: 2vw;
                border-radius: 5px;
            }

        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">
            <img src="img\icon.png" width="50" height="50" alt="College Website" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#Home">Home</a>
                </li>

                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Class</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" target="_blank" href="class/hsc_1st_year_science.php">HSC 1st Year (Science)</a>
                        <a class="dropdown-item" target="_blank" href="class/hsc_1st_year_commerce.php">HSC 1st Year (Commerce)</a>
                        <a class="dropdown-item" target="_blank" href="class/hsc_1st_year_humanities.php">HSC 1st Year (Humanities)</a>
                        <a class="dropdown-item" target="_blank" href="class/hsc_2nd_year_science.php">HSC 2nd Year (Science)</a>
                        <a class="dropdown-item" target="_blank" href="class/hsc_2nd_year_commerce.php">HSC 2nd Year (Commerce)</a>
                        <a class="dropdown-item" target="_blank" href="class/hsc_2nd_year_humanities.php">HSC 2nd Year (Humanities)</a>
                    </div>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="form.php">Club Registration</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="dataedit.php">Show/Edit</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="notice.php">Notice</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="club.php">Clubs</a>
                </li>

                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#more" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#ind">Introduction</a>
                        <a class="dropdown-item" href="#ytt">Youtube Videos</a>
                        <a class="dropdown-item" href="#spc">Principal's Speech</a>
                        <a class="dropdown-item" href="#tcr">Teachers</a>
                        <a class="dropdown-item" href="#map">Location</a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>

    <div class="header" id="Home">
        <div class="an1">College Website<br><b>
                <a type="button" target='_blank' href='Admin.php' class="btn btn-outline-light">Admin Panel</a></b>
        </div>
    </div>


    <div class="notice">
        <div class="ntc">Recent Notice:</div>
        <?php
        require "_db.php"; //database

        if ($conn == false) {
            echo 'Data base did not connected';
        }

        $sw = "SELECT * FROM `news` WHERE `Batch` = 'Home'";
        $r1 = mysqli_query($conn, $sw);
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
    <br>
    <div class="con an2" id="ind">
        <h2 style="text-align: center;"><u>About Our College</u></h2>
        <hr>
        <?php

        if ($conn == false) {
            echo 'Data base did not connected';
        }
        $sw5 = "SELECT * FROM `news` WHERE `Batch` = 'Home'";
        $r5 = mysqli_query($conn, $sw5);
        $c5 = mysqli_num_rows($r5);
        if ($c5 > 0) {
            while ($row = mysqli_fetch_row($r5)) {
        ?>
                <p><?php echo "{$row[3]}"; ?></p>
        <?php
            }
        } else {
            echo 'You have no link in your database';
        }
        ?>
    </div>

    <div class="option an3" id="reg">
        <h4>Registration / Edit / See Your Information</h4>
        <p>If you want to register to any club / edit and see your information webpage then click these button.</p>
        <a class="btn btn-info" href="form.php">Registration</a>
        <a class="btn btn-info" href="dataedit.php">Show / Edit</a>
    </div>
    <br>

    <h3 class="ytt an4" id='ytt'>Youtube Videos</h3>
    <div class="ytx">

        <?php

        if ($conn  == false) {
            echo 'Data base did not connected';
        }
        $sw = "SELECT * FROM `youtube videos` ORDER BY `youtube videos`.`Serial` DESC";

        //database
        $r1 = mysqli_query($conn, $sw); //database
        //database

        $c1 = mysqli_num_rows($r1);
        if ($c1 > 0) {
            while ($row = mysqli_fetch_row($r1)) {
        ?>
                <iframe class="an5" src="https://www.youtube.com/embed/<?php echo "{$row[1]}"; ?> " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <?php

            }
        } else {
            echo 'You have no link in your database';
        }
        ?>


    </div>

    <div class="card mb-3 hc an6" id="spc">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="img/sir/sir.jpg" class="card-img an7" alt="Principal">
            </div>
            <div class="col-md-8">
                <div class="card-body an8">
                    <h3 class="card-title"><u>Principal's Speech</u> </h3>
                    <p class="card-text">Over the next five years, Trinity College Dublin's strategic plan will focus on expanding our campus to include a new Cancer Institute, a Research Collection Study Centre in the Old Library, and the E3 Learning Foundry and Research Institute. <br>
                        Our research will focus on engineering, the environment and emerging technologies. We'll increase our number of postgraduate students, take on more academic staff, and develop new programmes and study spaces to enhance research excellence. We'll encourage our students to be inquisitive, pioneering and collaborative - active citizens who are proud to belong to a globally connected community of inclusivity, equality and mutual respect.</p>
                </div>
            </div>
        </div>
    </div>



    <br>


    <h3 class="ytt an603" id="tcr">Teachers</h3>


    <br>
    <div class="ytx">
        <div class="et an401">
            <img class="det" src="img/sir/sir.jpg" alt="img/sir/sir">
            <br>
            Animesh Roy (Principal)
        </div>
        <div class="et an901">
            <img class="det" src="img/sir/sir1.jpg" alt="img/sir/sir">
            <br>
            Showkat Kabir
        </div>
        <div class="et an604">
            <img class="det" src="img/sir/sir2.jpg" alt="img/sir/sir">
            <br>
            Tamanna Tabassum
        </div>
        <div class="et an802">
            <img class="det" src="img/sir/sir3.jpg" alt="img/sir/sir">
            <br>
            Samiya Tasnim
        </div>
        <div class="et an702">
            <img class="det" src="img/sir/sir4.jpg" alt="img/sir/sir">
            <br>
            Apurbo Bishwas
        </div>
        <div class="et 601">
            <img class="det" src="img/sir/sir5.jpg" alt="img/sir/sir">
            <br>
            Shantona Jannat
        </div>
        <div class="et an402">
            <img class="det" src="img/sir/sir6.jpg" alt="img/sir/sir">
            <br>
            Shamima Nasrin
        </div>
        <div class="et an902">
            <img class="det" src="img/sir/sir7.jpg" alt="img/sir/sir">
            <br>
            Mohammad Nur
        </div>

        <br>
    </div>


    <br>


    <h3 class="ytt an9" id='map'>Location</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.169136788878!2d90.38901551450267!3d23.776990693677998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c74302a89761%3A0xd99a5c61d56e1d6d!2sBAF%20Shaheen%20College%20Dhaka!5e0!3m2!1sen!2sbd!4v1603460652352!5m2!1sen!2sbd" class="map" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

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