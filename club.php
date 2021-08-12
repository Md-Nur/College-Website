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
    <title>Clubs</title>
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
            background-image: radial-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0)), url('img/college/c1.jpg');
            padding: 50px;
            font-family: algerian;
            text-align: center;
        }

        .ytx {
            display: flex;
            width: 98%;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            color: white;
            background-color: rgba(0, 0, 0, 0.6);
            margin: 1vw;
            border-radius: 5px;
        }

        .et {
            padding: 1vw;
            width: 47vw;
            text-align: justify;
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
                background-image: radial-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0)), url('img/college/c7.jpg');
                padding: 25px;
                text-align: center;
                font-family: algerian;
            }

            .et {
                padding: 1vw;
                width: 94vw;
                text-align: justify;
            }

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">
            <img src="img\icon.png" width="50" height="50" alt="Clubs" loading="lazy">
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
                    <a class="nav-link" href="form.php">Club Registration</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="notice.php">Notice</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="dataedit.php">Show/Edit</a>
                </li>

                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#more" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#it">IT</a>
                        <a class="dropdown-item" href="#le">Language</a>
                        <a class="dropdown-item" href="#da">Drama</a>
                        <a class="dropdown-item" href="#de">Debate</a>
                        <a class="dropdown-item" href="#ss">Sports</a>
                        <a class="dropdown-item" href="#se">Science</a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>

    <div class="header" id="Home">
        <div class="an10">Clubs</div>
    </div>

    <br>


    <!-- club pair -->
    <h3 class="ytt an5" id='ytt it'>It Club</h3>
    <div class="ytx an6">
        <img class="et an8" src="img/college/c9.jpg">
        <p class="et an7">IT Club IT Club will help you to become an IT eXpert ready to work on real world projects You will learn to develop modern websites and applications for desktop or mobile We help junior developers to gain new skills and step to the next level IT Club continuously research and develop our courses and exams. Our platform targets the skills necessary for performing IT jobs Gain more experience with a tutor Startups has access to certified developers We help entrepreneurs to form their team We encourage local IT communities development</p>
    </div>
    <br>
    <h3 class="ytt an501" id='ytt le'>Language Club (English)</h3>
    <div class="ytx an601">
        <p class="et an4">In order to improve English skills of students especially speaking and listening skills, English Language Club of RCPSC arranges various types of language activities. Activities of English Language Club include public speech, poem recitation, debate competition, listening practice, dialogue and basic grammar teaching. Classes are arranged on second Saturday of each month to conduct different types of language activities. To ensure effective output, inter-house competition is arranged once a year. Modern language learning techniques are applied to teach and train students in this club.</p>
        <img class="et an9" src="img/college/c11.jpg">
    </div>
    <br>
    <!-- pair club -->

    <!-- club pair -->
    <h3 class="ytt an502" id='ytt da'>Drama Club</h3>
    <div class="ytx an602">
        <img class="et an801" src="img/college/c12.jpg">
        <p class="et an701">The Drama Club (Czech: Činoherní klub) is a theatre located in Prague.The Drama Club was founded by Ladislav Smoček and Jaroslav Vostrý. The opening performance of Piknik took place on 3 March 1965. The actors in the 1970s and 1980s included Petr Čepek, Pavel Landovský, Josef Somr, Jiří Kodet, Jirina Trebicka, Libuše Šafránková and Josef Abrhám. On 19 November 1989, two days after the Velvet revolution, the Civic Forum was founded there. The Drama Club was awarded Alfréd Radok Award in category Theatre of the Year in 2002, and 2008. The current actors include Jaromír Dulava, Ivana Chýlková, Ondřej Vetchý and Petr Nárožný.</p>
    </div>
    <br>
    <h3 class="ytt an503" id='ytt de'>Debate Club</h3>
    <div class="ytx an603">
        <p class="et an401">Our workshops and regularly scheduled debate classes help students develop mastery of public speaking, critical thinking and discourse. By participating in speech and debate activities, they are able to acquire life skills and leadership qualities that are vital to success in today's highly competitive educational and career environment. Below is a list of our current programs. The program is intended to help students organize their thoughts and convey them clearly and effectively. By debating present-day issues, participants develop self-confidence and improve their critical thinking, public speaking, listening and logical reasoning skills. The goal is to enrich the social, intellectual and academic lives of our students through debate.</p>
        <img class="et an901" src="img/college/c13.jpg">
    </div>
    <br>
    <!-- pair club -->

    <!-- club pair -->
    <h3 class="ytt an504" id='ytt ss'>Sports Club</h3>
    <div class="ytx an604">
        <img class="et an802" src="img/college/c14.jpg">
        <p class="et an702">A sports club or sporting club, sometimes athletics club or sports society or sports association, is a group of people formed for the purpose of playing sports.Sports clubs range from organisations whose members play together, unpaid, and may play other similar clubs on occasion, watched mostly by family and friends, to large commercial organisations with professional players which have teams which regularly compete against those of other clubs and attract sometimes very large crowds of paying spectators. Clubs may be dedicated to a single sport or to several (multi-sport club). The term athletics club is sometimes used for a general sports club, rather than one dedicated to athletics proper.</p>
    </div>
    <br>
    <h3 class="ytt an505" id='ytt se'>Science Club</h3>
    <div class="ytx an605">
        <p class="et an402">Science Club is formed with a view to making the students interested in science and technology and enabling them to invent something new by themselves. Some of the activities of science club are- 1. It includes every students of Science Group as a member of the club. 2. Classes are arranged on 2nd Saturday of each month to instruct students in different subjects area such as- Physics, Chemistry, Biology, ICT etc. 3. Genius students are selected for different types of local and national competitions. 4. It encourages students to read various science magazines and to watch different types of science related documentary and TV programs. 5. Students are inspired to take part in Physics, Chemistry and Biology Olympiad. 6. Students are encouraged to make and look for new scientific projects.</p>
        <img class="et an902" src="img/college/c15.jpg">
    </div>
    <br>
    <!-- pair club -->

    <footer>
        <div class="head">Copyright &copy All right reserved by Md. Nur E Alam
            Siddiquee <br></div> <br>
        <div class="footer">
            <div class="facebook"><a class="btn btn-outline-light" target="_blank" href="https://www.facebook.com/md.fias.1" role="button">Facebook Group</a></div>

            <div class="facebook"><a class="btn btn-outline-light" target="_blank" href="https://www.facebook.com/Md.NurEAlamSiddiquee/" role="button">Facebook Page</a>
            </div>
            <div class="facebook"><a class="btn btn-outline-light" target="_blank" href="https://www.facebook.com/groups/2630917767155071/" role="button">Instagram</a>
            </div>
            <div class="facebook"><a class="btn btn-outline-light" target="_blank" href="https://www.facebook.com/groups/265608491419819/" role="button">Twitter</a>
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