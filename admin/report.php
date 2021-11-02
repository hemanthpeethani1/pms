<?php
/**
 *
 */
class Report extends SQLite3
{

  function __construct()
  {
    $this->open('../includes/project.db');
  }
}
$db=new Report();
$sql="select * from Report";
$res=$db->query($sql);
 ?>
<html>
<head>
  <title>Admin - Report</title>
  <link rel="stylesheet" type="text/css" href="../css/adminreport.css">
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
		  <img src="../images/pms3.png" width="60" height="60" alt="logo" />
		  <img src="../images/pms4.png" width="300" height="60" alt="logo" />
      <div class="nav-login">
        <form action="../logout.php">
          <button type="submit" name="Logout">Logout</button>
        </form>
      </div>
    </div>
  </nav>
</header>
<div class="main">
  <h3>Report</h3>
  <table name="report" width=80%>
    <tr>
      <th>Project Name</th>
      <th>Report</th>
    </tr>
    <?php
        while($row=$res->fetchArray(SQLITE3_ASSOC)){
     ?>
     <tr>
       <td><?php echo $row['PNAME'];?></td>
       <td><?php echo $row['REPORT'];?></td>
     </tr>
     <?php
        }
        $db->close();
     ?>
   </table>
</div>
</body>
</html>
