<?php
/**
 *
 */
class Project extends SQLite3
{

  function __construct()
  {
    $this->open('../includes/project.db');
  }
}
$db1=new Project();
$sql="select PNAME from project";
$res1=$db1->query($sql);
 ?>
<html>
<head>
  <title>Staff</title>
  <link rel="stylesheet" type="text/css" href="../css/adminstaff.css">
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
  <div class="main">
    <h3>Assign staff to project</h3>
    <form action="../includes/staff-inc.php" method="post">
      <div class="one">
        <select name="project" required>
          <option value="" disabled selected>Select Project</option>
          <?php
               while($row=$res1->fetchArray(SQLITE3_ASSOC)){
           ?>
           <option value="<?php echo $row['PNAME'];?>"><?php echo $row['PNAME']; ?></option>
           <?php
         }
         $db1->close()
         ?>
       </select>
       </div>
       <div class="two">
         <input type="text" name="DEV" required pattern="[A-Z a-z]{1,}" autocomplete="off">
         <label>Developer</label>
      </div>
    <button type="submit" name="submit">Assign</button>
    <a href="http://localhost:1516/admin.php">&lt;&lt;Back to Admin panel</a>
  </div>
</body>
</html>
<?php
if(!isset($_COOKIE['OPMS']))
{
  header("Location: http://localhost:1516");
}
?>
