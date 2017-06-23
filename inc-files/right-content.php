<div class="rightcontent">
    <div class="accordian acc-copy">
        <ul class="accordion">
            <li>
                <a href="#b">PG Courses<i class="material-icons down">keyboard_arrow_down</i><i class="material-icons up">keyboard_arrow_up</i></a>
                <ul>
                    <li><a href="aboutmba.php" class="active"> About MBA</a></li>
                    <li><a href="why-sthopkins.php"> Why St.Hopkins</a> </li>
                    <li><a href="top-mba-colleges-in-bangalore.php">MBA Colleges in Bangalore</a></li>
                    <li> <a href="internationalmba.php"> International MBA </a> </li>
                    <li><a href="mbaspecialization.php"> MBA Specialization</a></li>
                </ul>
            </li>
            <li>
                <a href="#b">UG Courses<i class="material-icons down">keyboard_arrow_down</i><i class="material-icons up">keyboard_arrow_up</i></a>
                <ul>
                    <li><a href="BBM-College-Bangalore.php">BBM Courses/Program</a> </li>
                    <li><a href="BCOM-College-Bangalore.php">BCom Courses/Program</a> </li>
                    <li><a href="BCA-College-Bangalore.php">BCA Courses/Program</a> </li>
                    <li><a href="BA-College-Bangalore.php">BA Courses/Program</a> </li>
                    <li><a href="Degree-College-Bangalore.php">Courses/Program Fee Stucture</a></li>
                </ul>
            </li>
            <li>
                <a href="#b">Placements<i class="material-icons down">keyboard_arrow_down</i><i class="material-icons up">keyboard_arrow_up</i></a>
                <ul>
                    <li><a href="placement-hopkins.php">Placement At Hopkins</a></li>
                    <li><a href="placement-records.php">Placement Records</a> </li>
                    <li><a href="placement-notice.php">Placement Notice</a></li>
                </ul>
            </li>
            <li>
                <a href="#b">Studies at Hopkins<i class="material-icons down">keyboard_arrow_down</i><i class="material-icons up">keyboard_arrow_up</i></a>
                <ul style="display:block !important;">
                    <li><a href="how-we-teach-sales.php">How We Teach Sales</a></li>
                    <li><a href="placement-training-activity.php">Placement Training Activity</a></li>
                    <li> <a href="social-media-training.php">Social Media Training</a></li>
                    <li><a href="meeting-corporate-leaders.php">Meeting The Corporate Leaders</a>  </li>
                    <li><a href="entrepreneurship-training.php">Entrepreneurship Training</a> </li>
                </ul>
            </li>
            <li>
                <a href="#b">Executive MBA Courses<i class="material-icons down">keyboard_arrow_down</i><i class="material-icons up">keyboard_arrow_up</i></a>
                <ul>
                    <li><a href="aboutexecutivemba.php">About Executive Courses</a></li>
                    <li><a href="1yearexecutivemba.php">1 Year Executive MBA</a></li>
                    <li><a href="2yearexecutivemba.php"> 2 Year Executive MBA</a></li>
                </ul>
            </li>
            <li>
                <a href="#b">Foreign Students<i class="material-icons down">keyboard_arrow_down</i><i class="material-icons up">keyboard_arrow_up</i></a>
                <ul>
                    <li><a href="about-bangalore.php">About Bangalore</a></li>
                    <li><a href="bangalore-university.php">Bangalore University</a></li>
                    <li><a href="bbm-programme.php">BBM Programme</a></li>
                    <li><a href="bcom-programme.php">BCom Programme</a></li>
                    <li><a href="bca-programme.php">BCA Programme</a></li>
                    <li><a href="ba-programme.php">BA Programme</a></li>
                    <li><a href="english-courses.php">English Courses</a></li>
                    <li><a href="fee-structure.php">Fee Structure</a></li>
                    <li><a href="admission-procedure.php">Admission Procedure</a></li>
                </ul>
            </li>
            <li>
                <a href="#b">Life at Hopkins<i class="material-icons down">keyboard_arrow_down</i><i class="material-icons up">keyboard_arrow_up</i></a>
                <ul>
                    <li><a href="photogallery.php">Photo Gallery</a></li>
                    <li><a href="videogallery.php">Video Gallery</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="news">
        <?php
            include('admin_dotline/sql.php');
            $getfnews=mysql_fetch_object(mysql_query("SELECT * FROM news order by id desc"));
        ?>
        <h3 class="h2-1 h2-2"><?php echo $getfnews->title; ?></h3>
        <?php
            echo $getfnews->content;
        ?>
        <div class="readmore-new"><a href="news-events/index.php">Readmore</a></div>
    </div>
</div>