<?php
/**
 *
 */
class Option extends SQLite3
{

  function __construct()
  {
        $this->open('../includes/project.db');
  }
}
$db=new Option();
$sql="select PNAME from project";
$res=$db->query($sql);
 ?>
<html>
  <head>
    <title>Admin - Client</title>
    <link rel="stylesheet" type="text/css" href="../css/makeup3.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/signup.css">
  </head>
  <body>
    <header>
       <nav>
  	    <div class="main-wrapper">
  		  <ul>
  		  <li><a href="#"><button class="btn">Home</button></a></li>
  			<li><a href="#"><button class="btn">About</button></a></li>
  			<li><a href="#"><button class="btn" style="background-color: #808080">Contact</button></a></li>
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
   </header><br><br>
     <div class="main">
       <div class="signup">
         <h3>Client Account Creation</h3>
	      <form class="signup-form" action="../includes/client-inc.php" method="POST">
          <div class="one">
	         <input type="text" name="first" required autocomplete="off" pattern="[A-Z a-z]{1,}">
           <label>First Name</label>
         </div>
         <div class="two">
		       <input type="text" name="last" required autocomplete="off" pattern="[A-Z a-z]{1,}">
           <label >Last Name</label>
         </div>
         <div class="three">
		       <input type="email" name="email" required autocomplete="off" pattern="[A-Za-z0-9._%+-]+@[a-z]+.[a-z]{2,}$">
           <label >Email</label>
         </div>
         <div class="four">
		       <input type="number" name="contact" required autocomplete="off" pattern="[0-9]{10}">
           <label >Contact Number</label>
         </div>
         <div class="five">
           <input type="password" name="pwd" required autocomplete="off">
           <label>Password</label>
         </div>
         <div class="six">
		       <select name="project">
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
         <div class="seven">
		       <button type="submit" name="submit">Create</button>
         </div>
	      </form>
        <a href="http://localhost:1516/admin.php">&lt;&lt;Back to Admin Panel</a>
      </div>
	   </div>
  </body>
</html>
<?php
if (!isset($_COOKIE['OPMS'])) {
  header("Location: http://localhost:1516");
  $db->close();
}
 ?>
