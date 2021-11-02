<?php
/**
 *
 */
class Project extends SQLite3
{

  function __construct()
  {
    $this->open('./includes/project.db');
  }
}
$db=new Project();
$sql="select PNAME from project";
$res=$db->query($sql);
 ?>
<html>
<head>
  <title>Project Manager</title>
  <link rel="stylesheet" type="text/css" href="./css/developer.css">
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
<div class="main">
  <h3>Project Status</h3>
  <form action="./includes/dev-inc.php" method="post">
  <div class="one">
    <select name="project" required>
      <option value="" disabled selected>Select Project</option>
      <?php
           while($row=$res->fetchArray(SQLITE3_ASSOC)){
       ?>
       <option value="<?php echo $row['PNAME'];?>"><?php echo $row['PNAME']; ?></option>
       <?php
     }
     $db->close()
     ?>
    </select>
  </div>
  <div class="two">
    <select name="stat">
      <option value="" disabled selected>Update status</option>
      <option value="10%">below 20%</option>
      <option value="25%">below 30%</option>
	    <option value="35%">below 40%</option>
      <option value="45%">below 50%</option>
	    <option value="55%">below 60%</option>
      <option value="65%">below 70%</option>
	    <option value="75%">below 80%</option>
      <option value="85%">below 90%</option>
	    <option value="100%">completed</option>

    </select>
  </div>
  <button type="submit" name="update">Update</button>
</form>
</div>
</body>
</html>
<?php
if(!isset($_COOKIE['OPMS'])){
  $db->close();
  header("Location: http://localhost:1516");
}
 ?>
