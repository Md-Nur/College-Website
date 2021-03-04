<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!-- My Css -->
    <link rel="stylesheet" href="css1.css">

    <style>
        .dt {
            text-align: right;
            width: 20vw;
        }

        .nb {
            text-align: justify;
        }
    </style>
    <!-- My Css -->

    <title>Notice</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="#">
            <img src="icon.png" width="50" height="50" alt="Notice" loading="lazy">
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
                    <a class="nav-link" href="club.php">Club</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="form.php">Club Registration</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="dataedit.php">Edit/Show</a>
                </li>
            </ul>

        </div>
    </nav>

    <h1 class="title" id="tap">Notice</h1>
    <?php
    //database
    $dbcon = mysqli_connect('localhost', 'root', '', 'college'); //database
    //database

    if ($dbcon = false) {
        echo 'Data base did not connected';
    }
    $sw = "SELECT * FROM `all_notice` ORDER BY `all_notice`.`time` DESC";

    //database
    $r1 = mysqli_query(mysqli_connect('localhost', 'root', '', 'college'), $sw); //database
    //database

    $c1 = mysqli_num_rows($r1);
    if ($c1 > 0) {
        while ($row = mysqli_fetch_row($r1)) {
    ?>
            <div class="htitle an9">
                <table style="width: 100%;">
                    <th>
                    <td>
                        <h3><u><?php echo "{$row[0]}"; ?></u>
                        </h3>
                    </td>
                    <td class="dt">Time: <?php echo "{$row[1]}"; ?></td>
                    </th>
                    <tr>
                        <td colspan="3" id="nt" class="nb"><?php echo "{$row[2]}"; ?></td>
                    </tr>
                </table>
            </div>
    <?php
        }
    } else {
        echo 'You have no link in your database';
    }
    ?>



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