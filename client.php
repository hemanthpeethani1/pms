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
/**
 *
 */
class Login extends SQLite3
{

  function __construct()
  {
    $this->open('./includes/Login.db');
  }
}

$db1=new Project();
$db=new Login();
$usr=$_COOKIE['OPMS'];
$sql="select PROJECT from client where EMAIL='".$usr."'";
$res=$db->query($sql);
 ?>
<html>
<head>
  <title>Client</title>
  <link rel="stylesheet" type="text/css" href="./css/client.css">
  <link rel="stylesheet" type="text/css" href="./css/makeup3.css">
  <link rel="stylesheet" type="text/css" href="./css/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  function report()
  {
    window.open('http://localhost:1516/report.php','Report');
  }
  </script>
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
  <h3>Projects</h3>
  <table name="project" width=80%>
    <tr>
      <th>Project Name</th>
      <th>Status</th>
      <th>Report</th>
    </tr>
    <?php
        while($row=$res->fetchArray(SQLITE3_ASSOC)){
          $pro=$row['PROJECT'];
          $sql="select STATUS from project where PNAME='".$pro."'";
          $res1=$db1->query($sql);
          $row1=$res1->fetchArray(SQLITE3_ASSOC);
     ?>
    <tr>
      <td><?php echo $pro;?></td>
      <td><?php echo $row1['STATUS'];?></td>
      <td><a href="javascript:void(0);" onclick="report()">Report</a></td>
    </tr>
    <?php
  }
  ?>
  </table>
</div>
</body>
</html>
<?php
if (!isset($_COOKIE['OPMS'])) {
  header("Location: http://localhost:1516");
}
 ?>
