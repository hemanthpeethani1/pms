<html>
<head>
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="./css/admin.css">
  <link rel="stylesheet" type="text/css" href="./css/makeup3.css">
  <link rel="stylesheet" type="text/css" href="./css/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
     <nav>
	    <div class="main-wrapper">
		  <ul>
		  <li><a href="#"><button class="btn">Home</button></a></li>
			<li><a href="#"><button class="btn">About</button></a></li>
			<li><a href="#"><button class="btn">Contact</button></a></li>
		  </ul>
		  <img src="./images/pms3.png" width="60" height="60" alt="logo" />
		  <img src="./images/pms4.png" width="300" height="60" alt="logo" />
      <div class="nav-login">
        <form action="logout.php">
          <button type="submit" name="Logout">Logout</button>
        </form>
      </div>
    </div>
  </nav>
</header>
  <a href="http://localhost:1516/admin/project.php"><img src="./images/project.jpg" class="project"></a>
  <a href="http://localhost:1516/admin/staff.php"><img src="./images/staff.jpg" class="staff"></a>
  <a href="http://localhost:1516/admin/client.php"><img src="./images/client.jpg" class="client"></a>
  <a href="http://localhost:1516/admin/monitor.php"><img src="./images/monitor.jpg" class="monitor"></a>
  <a href="http://localhost:1516/admin/report.php"><img src="./images/report.jpg" class="report"></a>
</body>
</html>
<?php
if(!isset($_COOKIE['OPMS']))
{
  header("Location: http://localhost:1516");
}
 ?>
