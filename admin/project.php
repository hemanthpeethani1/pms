<html>
<head>
  <title>Admin - Project</title>
  <link rel="stylesheet" type="text/css" href="../css/adminproject.css">
  <link rel="stylesheet" type="text/css" href="../css/makeup3.css">
  <link rel="stylesheet" type="text/css" href="../css/header.css">
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
		  <img src="../images/pms3.png" width="60" height="60" alt="logo"/>
		  <img src="../images/pms4.png" width="300" height="60" alt="logo"/>
      <div class="nav-login">
        <form action="../logout.php">
          <button type="submit" name="Logout">Logout</button>
        </form>
      </div>
    </div>
  </nav>
</header>
<div class="project">
  <h3>Project Creation</h3>
  <form class="form" action="../includes/project-inc.php" method="post">
    <div class="one">
      <input type="text" name="project" autocomplete="off" required>
      <label>Project Name</label>
    </div>
    <div class="two">
      <input type="text" name="startdate" autocomplete="off" required pattern="[0-9/0-9/0-9]{10}">
      <label>Start Date</label>
    </div>
    <div class="three">
      <input type="text" name="dev" autocomplete="off" required>
      <label>Developer</label>
    </div>
    <div class="four">
      <select name="stat">
        <option value="" disabled selected>Update status</option>
        <option value="Intial">Intial</option>
      </select>
    </div>
      <button type="submit" name="submit">Create</button>
      <a href="http://localhost:1516/admin.php">&lt;&lt;Back to Admin Panel</a>
</div>
</body>
</html>
<?php
if(!isset($_COOKIE['OPMS']))
{
  header("Location: http://localhost:1516");
}
 ?>
