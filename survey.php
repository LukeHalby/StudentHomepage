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

  $Name = $_POST['name'];
  $Website = $_POST['website'];


  $query2 = mysqli_query($con,"INSERT INTO `survey` (`id`, `Name`, `Address`)
        VALUES (NULL, '$Name', '$Website');");
	  
  
	?>

  <script type="text/javascript">
    window.location.href = 'http://localhost/test%20js/JS%20test.php';
  </script>
</body>
</html>