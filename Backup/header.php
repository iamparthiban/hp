<?php
	// Turn off all error reporting
	date_default_timezone_set("Asia/Calcutta");
	error_reporting(0);

        //seo

	$INDEX1_TITLE = 'Hopkins College';
	$INDEX2_TITLE = 'Top MBA Colleges in Pune';
	$INDEX3_TITLE = 'Top MBA Colleges in Mumbai';
	$INDEX4_TITLE = 'Best MBA College in Chennai';
	$INDEX5_TITLE = 'Best MBA College in Delhi';
	$INDEX6_TITLE = 'MBA Colleges in India';
	$INDEX7_TITLE = 'BBM College for MBA';
	$INDEX8_TITLE = 'Top BCA College in Bangalore';
	$INDEX9_TITLE = 'Get Admission to BA course';
	$INDEX10_TITLE = 'MBA Admission without Entrance Exam';
	//$INDEX11_TITLE = 'AAA';

	$link=mysql_connect(DB_HOST,DBUSER,DBPASS);
	if($link)
	{
		mysql_select_db(DBNAME,$link);
	}
	$pageArr = explode("/",$_SERVER['PHP_SELF']);
	$_SESSION['currentPage'] = $pageArr[count($pageArr) - 1];
?>
 <header>
        <div class="logo">
            <ul style="list-style-type:none;display: inline;">
                <li>
                    <a href="index.php">
                        <img src="images/logo.png" title="<?php echo $INDEX1_TITLE ?>" alt="<?php echo $INDEX1_TITLE ?>">
                    </a>
                </li>
            </ul>
        </div>
        <div class="mobilemenu"><a href="#"></a></div>
        <!--topmenu-->
        <div class="logo1">
            <ul>
                <li><img src="images/IIM.png" height="80" title="<?php echo $INDEX1_TITLE ?>" alt="<?php echo $INDEX1_TITLE ?>"></li>
            </ul>
        </div>
        <!--input_top-->
        <nav>
            <ul class="lavaLampBottomStyle" id="3">
                <li>
                    <a href="aboutmba.php" data-flexmenu="flexmenu2">About MBA</a>
                    <ul id="flexmenu2" class="flexdropdownmenu3">
                        <li><a href="aboutmba.php">&#8226; About MBA</a></li>
                        <li><a href="why-sthopkins.php">&#8226; Why St.Hopkins</a> </li>
                        <li><a href="top-mba-colleges-in-bangalore.php">&#8226; MBA Colleges in Bangalore</a></li>
                        <li> <a href="internationalmba.php">&#8226; International MBA <br />(6 weeks Abroad)</a> </li>
                        <li><a href="parttimemba.php">&#8226; Part Time MBA Courses 1Yr / 2Yrs</a> </li>
                        <li><a href="mbaspecialization.php">&#8226;  MBA Specialization</a></li>
                        <li><a href="mba-in-international-business-in-bangalore.php">&#8226; MBA in International Business in Bangalore</a> </li>
                        <li><a href="mba-in-logistics-and-supply-chain-management.php">&#8226; MBA in Logistics and Supply Chain Management</a> </li>
                        <li><a href="mba-in-retail-in-bangalore.php">&#8226; MBA in Retail in Bangalore</a> </li>
                        <li><a href="mba-in-finance-in-bangalore.php">&#8226; MBA in Finance in Bangalore</a> </li>
                        <li><a href="mba-in-marketing-in-bangalore.php">&#8226; MBA in marketing in Bangalore</a> </li>
                        <li><a href="mba-in-human-resource-management-in-bangalore-hrm.php">&#8226; MBA in Human Resource Management in Bangalore HRM</a> </li>
                        <li><a href="mba-in-information-technology-in-bangalore.php">&#8226; MBA in Information Technology in Bangalore</a> </li>
                        <li><a href="mba-in-business-analytics-in-bangalore.php">&#8226; MBA in Business Analytics in Bangalore</a> </li>
                    </ul>
                </li>
                <li class="inter"><a href="internationalmba.php" title="MBA colleges in Bangalore">International MBA <br /><span>"6 Weeks Abroad "</span></a> </li>
                <li class="inter"><a href="top-mba-colleges-in-india.php">MBA in India <br /><span>"With 2 International Trips "</span></a></li>
                <li>
                    <a href="studies-at-hopkins.php" data-flexmenu="flexmenu3">MBA At Hopkins</a>
                    <ul id="flexmenu3" class="flexdropdownmenu3">
                        <li><a href="how-we-teach-sales.php">&#8226; How We Teach Sales</a></li>
                        <li><a href="placement-training-activity.php">&#8226; Placement Training Activity</a></li>
                        <li> <a href="social-media-training.php">&#8226; Social Media Training</a></li>
                        <li><a href="meeting-corporate-leaders.php">&#8226; Meeting The Corporate Leaders</a>   </li>
                        <li><a href="entrepreneurship-training.php">&#8226; Entrepreneurship Training</a> </li>
                        <li><a href="learning-business.php">&#8226; Learning Business</a> </li>
                    </ul>
                </li>
                <li>
                    <a href="placement-hopkins.php" data-flexmenu="flexmenu4">Placements</a>
                    <ul id="flexmenu4" class="flexdropdownmenu3">
                        <li><a href="Placements-Guarantee.php">&#8226; 100% Placement Guarantee</a></li>
                        <li><a href="placement-hopkins.php">&#8226; Placement At Hopkins</a></li>
                        <li><a href="placement-records.php">&#8226; Placement Records</a> </li>
                        <li><a href="placement-notice.php">&#8226; Placement Notice</a></li>
                    </ul>
                </li>
                <li>
                    <a href="ug_course.php" data-flexmenu="flexmenu5">UG Courses</a>
                    <ul id="flexmenu5" class="flexdropdownmenu3">
                        <li><a href="BBM-College-Bangalore.php">&#8226; BBM Courses/Program</a> </li>
                        <li><a href="BCOM-College-Bangalore.php">&#8226; Bachelor of Commerce</a> </li>
                        <li><a href="BCA-College-Bangalore.php">&#8226; BCA Courses/Program</a> </li>
                        <li><a href="BA-College-Bangalore.php">&#8226; Bachelor of Arts</a> </li>
                        <li><a href="Degree-College-Bangalore.php">&#8226; Courses/Program Fee Stucture</a></li>
                    </ul>
                </li>
                <li>
                    <a href="photogallery.php" data-flexmenu="flexmenu6">Gallery</a>
                    <ul id="flexmenu6" class="flexdropdownmenu3">
                        <li><a href="photogallery.php">Photo Gallery</a> </li>
                        <li><a href="videogallery.php">Video Gallery</a> </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
 