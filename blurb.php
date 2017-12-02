
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
  </head>
  <body>
    <?php


  $con = mysqli_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect: ' . mysqli_error());
  }

  mysqli_select_db($con,"students");

  $Title = $_POST['title'];
  $Teacher = $_POST['teacher'];
  $YL = $_POST['year'];
  $Description = $_POST['description'];
  $Date = $_POST['date'];


  $query = mysqli_query($con,"INSERT INTO `blurb` (`id`, `Title`, `Teacher`, `YL`, `Description`, `Date`)
        VALUES (NULL, '$Title', '$Teacher', '$YL', '$Description', '$Date');");
	  
  
	?>
  <script type="text/javascript">
    window.location.href = 'http://localhost/test%20js/JS%20test.php';
  </script>
  </body>
</html>