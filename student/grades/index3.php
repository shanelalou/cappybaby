<?php include '../../config.php' ?>
<!DOCTYPE html>
<html>
<head>
<!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/prettyPhoto/css/prettyPhoto.css">
        <link rel="stylesheet" href="../../assets/css/flexslider.css">
        <link rel="stylesheet" href="../../assets/css/font-awesome.css">
        <link rel="stylesheet" href="../../assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../../assets/ico/apple-touch-icon-57-precomposed.png">


	<title>Student</title>
	<link rel="icon" type="image/png" href="../../source/images/icon.png">
	<link rel="stylesheet" type="text/css" href="../../source/styles/flexigrid.css">
	<link rel="stylesheet" type="text/css" href="../../source/styles/style.css">
	<script type="text/javascript" src="../../source/scripts/flexigrid.pack.js"></script>
	<script type="text/javascript" src="../../source/scripts/flexigrid.js"></script>
	<script>
		$(function(){
			
			windowHeight = $(window).height() - 300;
			$('#grid').flexigrid({
				url: 'functions/list.php',
				dataType: 'json',
				colModel : [
					{display: 'SUBJECT CODE', name : 'SubjectCode', width : 90, align: 'center'},
					{display: 'SUBJECT TITLE', name : 'SubjectTitle', width : 320, align: 'center'},
					{display: 'PREREQUISITE', name : 'Prerequisite', width : 100, align: 'left' ,hide:true },
					{display: 'YEAR', name : 'Year', width : 40, align: 'left' ,hide:true },
					{display: 'SEM.', name : 'Sem', width : 40, align: 'left' ,hide:true 	},
					{display: 'PRELIM GRADE', name : 'Prelim', width : 70, align: 'left' ,hide:true },
					{display: 'PRELIM ABS.', name : 'Absences', width : 70, align: 'left' ,hide:true },
					{display: 'MIDTERM GRADE', name : 'Midterm', width : 70, align: 'left' ,hide:true },
					{display: 'MIDTERM ABS.', name : 'Absences', width : 70, align: 'left' ,hide:true },
					{display: 'FINAL GRADE', name : 'Grade', width : 70, align: 'left'},
					{display: 'FINAL ABS.', name : 'Grade', width : 70, align: 'left' ,hide:true },
					{display: 'TOTAL ABS.', name : 'TotalAbsences', width : 70, align: 'left' ,hide:true },
					{display: 'EQUIV.', name : 'Equiv', width : 40, align: 'left'},
					{display: 'REMARKS', name : 'Remarks', width : 90, align: 'left'},
					{display: 'INSTRUCTOR', name : 'Instructor', width : 150, align: 'left', hide:true},
					{display: 'CLASS CODE', name : 'ClassCode', width : 80, align: 'left' ,hide:true },
					{display: 'DAY', name : 'Time', width : 80, align: 'left' ,hide:true },
					{display: 'TIME', name : 'Time', width : 100, align: 'left' ,hide:true },
					{display: 'ROOM', name : 'Room', width : 40, align: 'left' ,hide:true },
					{display: 'ACADEMIC YEAR', name : 'AcademicYear', width : 90, align: 'left' ,hide:true },
					{display: 'SEMESTER', name : 'Semester', width : 50, align: 'left' ,hide:true }
				],
				usepager: true,
				searchitems : [
					{display: 'Subject Code', name : 'a.subject_code'}
				],
				pagestat: 'Displaying {total} Records',
				nomsg: 'Search has no results.',
				title: 'GRADES',
				height: windowHeight
			});
			
			$('.sDiv2 :nth-child(2),.pDiv2 :nth-child(2),.pDiv2 :nth-child(3),.pDiv2 :nth-child(4),.pDiv2 :nth-child(5),.pDiv2 :nth-child(6),.pDiv2 :nth-child(7),.pDiv2 :nth-child(8),.pDiv2 :nth-child(9)').hide();

			setInterval(function(){
				var items = $('tr :nth-child(16) > div');
				$.each(items,function(i){
					//console.log(items[i].innerHTML);
					if(items[i].innerHTML=="Passed"){
						$(items[i]).css('color','green');
					}else if(items[i].innerHTML=="&nbsp;" || items[i].innerHTML=="" || items[i].innerHTML=="REMARKS"){
						$(items[i]).css('color','');
					}else{
						$(items[i]).css('color','red');
					}
				});
			},1);
		});
	</script>
</head>
<body>
<center><img src="../../assets/img/header.png"></center>
        <!-- Header -->
        <div class="container" >
            <div class="header row">
                <div class="span12">
                    <div class="navbar" align="center">
                        <div class="navbar-inner1" align="center">                           
                            <div>
                                <ul class="nav pull-right">
                                  <li class="current-page">
                                        <a href="../../index.html"><i class="icon-home"></i><br />Home</a>
                                    </li>
                                    <li>
                                        <a href="../../about.html"><i class="icon-star"></i><br />My College</a>
                                    </li>
                                  
                                    <li>
                                        <a href="../../about.html"><i class="icon-twitter"></i><br />Social Media</a>
                                    </li>
                                    
                                    <li>
                                        <a href="../../contact.html"><i class="icon-envelope-alt"></i><br />Contact Us</a>
                                    </li>
									
											
					<li><a href="../logout.php">LOGOUT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	

	<div class="title">
		<div class="wraper">
			<div class="left" style="font-size:15px"><?php echo $_SESSION['student'].' - '.student($_SESSION['student'],"lastname").", ".student($_SESSION['student'],"firstname").", ".student($_SESSION['student'],"middlename")." - ".student($_SESSION['student'],"course")." ".student($_SESSION['student'],"year"); ?> </div>
			
		</div>
	</div>

	<div class="page-content"><table id="grid"></table></div>
	<div class="footer"></div>
</body>
</html>