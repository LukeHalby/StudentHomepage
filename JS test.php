
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="fullPage.css" />
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="jquery.fullPage.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                sectionsColor: ['#1C263C', '#1C263C', '#1C263C', '#1C263C', '#1C263C'],
				anchors: ['homepage', 'quicklinks', 'surveys', 'blurb', '5thPage'],
            });
        });
    </script>
</head>

<body>
    <div id="fullpage">
        <div class="section">
        <div id="particles-js"> 
        	<script src="particles.js"></script>
<script src="js/app.js"></script>

      <a href="#homepage"><h1 data-menuanchor="homepage">Hillcrest Christian College</h1></a>
      <h2>Student Homepage</h2>
        <div class="main-links">
          <div id="container">
            <img src="http://i.imgur.com/2IadUCM.png" alt="Hillcrest Christian College Logo" class="Hillcrest-Logo">
            <a href="#quicklinks"><span id="quartercircle1" data-menuanchor="quicklinks">&nbsp;<h3 class="Quick-Links">Quick Links</h3></span><br /></a>
            <a href="#surveys"><span id="quartercircle2" data-menuanchor="surveys">&nbsp;<h3 class="Polls-and-Surveys">Polls and Surveys</h3></span><br /></a>
            <a href="#5thPage"><span id="quartercircle3">&nbsp;<h3 class="The-Daily-Laugh">The Daily Laugh</h3></span><br /></a>
            <a href="#blurb"><span id="quartercircle4" data-menuanchor="blurb">&nbsp;<h3 class="The-Blurb">The Blurb</h3></span><br /></a>
          </div>
        </div>
       </div>

<!-- scripts -->

		</div>
        
        <div class="section">
      <div class="quicklinks">
  	    <span class="col-9 box1">&nbsp;
      	  <h5 class="DaI links">Devices and Internet</h5>
      	  <div class="dropdown-links">
      	  	<a href="https://students.hillcrest.qld.edu.au/BYOD-Support/SitePages/Home.aspx" target="_blank">BYOD Support</a>
      	  	<a href="http://cert.netbox/install/" target="_blank">Netbox Certificate</a>
     	  	<a href="http://auth.netbox/" target="_blank">Re-Authenticate Internet</a>
    	  	<a href="https://www.google.com.au/" target="_blank">Google Search</a>
    	  </div>
    	</span>
    	<span class="col-9 right box2">&nbsp;
    	  <h5 class="EaQ links">Education and Quizes</h5>
    	  <div class="dropdown-links2">
    	  	<a href="https://www.studyladder.com.au/" target="_blank">Studyladder</a>
	     	<a href="http://au.mathletics.com/" target="_blank">Mathletics</a>
	    	<a href="http://www.literacyplanet.com/">Literacy Planet</a>
	  	    <a href="https://kahoot.it/#/" target="_blank">Kahoot</a>
    	  	<a href="https://www.socrative.com/" target="_blank">Socrative</a>
	    	<a href="https://quizlet.com/" target="_blank">Quizlet</a>
  	      </div>
    	</span>
    	<span class="col-9 box3">&nbsp;
	      <h5 class="HW links">Hillcrest Websites</h5>
      	  <div class="dropdown-links3">
    	  	<a href="https://hillcrest.instructure.com/" target="_blank">Canvas</a>
	     	<a href="https://outlook.office.com/owa/?realm=students.hillcrest.qld.edu.au" target="_blank">Student Email</a>
    	  	<a href="https://www.office.com/1/?auth=2&home=1&from=PortalLanding" target="_blank">Office365</a>
	     	<a href="http://my.hillcrest.qld.edu.au/Pages/Home.aspx" target="_blank">Timetables & Reports</a>
    	  	<a href="http://parents.hillcrest.qld.edu.au/" target="_blank">Parent Lounge</a>
	     	<a href="https://hillcrest.instructure.com/courses/406" target="_blank">Hillcrest Library</a>
    	  	<a href="http://my.hillcrest.qld.edu.au/Pages/Library/LibrarySearch.aspx" target="_blank">Hillcrest Library Search</a>
    	  </div>
	    </span>
    	<span class="col-9 right box4">&nbsp;
    	  <h5 class="O links">Other Links</h5>
	      <div class="dropdown-links4">
    	    <a href="https://service.1300acepro.com/onguard/auth/sso/login?schoolKey=hillcrestcc%2Enet%2Egld&next=http%3A%2F%2Fwww%2E1300acepro%2Ecom%2FOnGuardACEPro2014%2Fcontent%2FdoLogin%2Easp&errorCode=0" target="_blank">OnGuard AcePro</a>
    	    <a href="http://www.sense-lang.org/typing/" target="_blank">Typing Tutor</a>
	        <a href="http://guides.instructure.com/m/4212" target="_blank">Canvas Help Guide</a>
    	    <a href="http://www.jacplus.com.au/secure/Bookshelf" target="_blank">Jacaranda e-reasources</a>
	        <a href="https://students.hillcrest.qld.edu.au/SitePages/RemoteApps.aspx" target="_blank">Remote Apps</a>
    	  </div>
    	</span>
      </div>
        </div>
		
        
        <div class="section">
 <?php
$nameErr = $websiteErr = "";
$name = $website = "";

$con = mysqli_connect("localhost","root","");

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
 
mysqli_select_db($con,"students");

$query2 = "SELECT id, Name, Address
          FROM `survey` 
		  WHERE `id` =`id` LIMIT 0 , 1000";

$comments2 = mysqli_query($con,$query2);

while($row2 = mysqli_fetch_array($comments2))
{
  $surveyName = $row2['Name'];
  $surveyWebsite = $row2['Address'];
?>
<div class="surveyOutput">
<div class="SurveyTitle">
  <?php
  echo $surveyName;
  ?>
</div>
<div class="SurveyURL">
  <?php
  echo $surveyWebsite;
  ?>
</div>
</div>
<?php
}
?>
<div class="survey-input">
  <div>
  <form action="survey.php" method="post">
    <div class="surveyname"><label for="fname">Survey Title</label></div>
    <input type="text" name="name" value="<?=$name;?>" placeholder="Survey title...">
    <span class="error"><?=$nameErr;?></span>

    <div><label for="lname">Survey URL</label></div>
    <input type="text" name="website" value="<?=$website;?>" placeholder="Survey URL...">
    <span class="error"><?=$websiteErr;?></span>
    <input type="submit" value="Submit">
  </form>
  </div>
</div>
        </div>
        
        <div class="section">
 <?php
	  //MAKE THIS TABLE RESPONSIVE (SCROLL BAR AND MEDIA QUERIES)
$titleErr = $teacherErr = $yearErr = $descriptionErr = $dateErr = "";
$title = $teacher = $year = $description = $date = "";


?>
<table>
	<tr>
		<th class="col-4">Title</th>
		<th class="col-3">Teacher's Name</th>
		<th class="col-2">Year Level</th>
		<th class="col-9">Description</th>
		<th class="col-2">Date</th>
	</tr>
<?php

$con = mysqli_connect("localhost","root","");
 
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
 
mysqli_select_db($con,"students");

$query = "SELECT id, Title, Teacher, YL, Description, Date
          FROM `blurb` 
		  WHERE `id` =`id` LIMIT 0 , 1000";

$comments = mysqli_query($con,$query);

while($row = mysqli_fetch_array($comments, MYSQL_ASSOC))
{
  $blurbTitle = $row['Title'];
  $blurbTeacher = $row['Teacher'];
  $blurbYL = $row['YL'];
  $blurbDescription = $row['Description'];
  $blurbDate = $row['Date'];
?>
    <tr>
    	<td><?php echo $blurbTitle?></td>
	    <td><?php echo $blurbTeacher?></td>
	    <td><?php echo $blurbYL?></td>
	    <td><?php echo $blurbDescription?></td>
	    <td><?php echo $blurbDate?></td>
    </tr>
<?php
}
?>
</table>
<div class="survey-input">
  <div>
  <form action="blurb.php" method="post">
    <div class="TeacherName"><label for="Title">Title</label></div>
    <input type="text" name="title" value="<?=$title;?>" placeholder="Title of the announcement...">
    <span class="error"><?=$titleErr;?></span>
    
    <div><label for="Teacher">Teachers Name</label></div>
    <input type="text" name="teacher" value="<?=$teacher;?>" placeholder="Teacher's name...">
    <span class="error"><?=$teacherErr;?></span>

    <div><label for="Year">Year Level</label></div>
    <input type="text" name="year" value="<?=$year;?>" placeholder="Relevant year level(s)...">
    <span class="error"><?=$yearErr;?></span>
    
    <div><label for="Description">Description</label></div>
    <input type="text" name="description" value="<?=$description;?>" placeholder="Description of the announcement...">
    <span class="error"><?=$descriptionErr;?></span>
    
    <div><label for="Date">Date</label></div>
    <input type="text" name="date" value="<?=$date;?>" placeholder="Relevant date (YYYY-MM-DD)...">
    <span class="error"><?=$dateErr;?></span>
    <input type="submit" value="Submit">
  </form>
  </div>
</div>
	</div>
	<div class="section">
	  <h1>
	  	This section is under construction
	  </h1>	
	</div>
        </div>
    </div>            
</body> 
</html>