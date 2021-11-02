<html>
<head>
  <script type="text/javascript" src="../js/sweetalert2.all.js"></script>
  <link rel="stylesheet" href="../css/sweetalert2.css">
</head>
<body/>
</html>
<?php
if (isset($_POST['submit'])) {

  class LoginDB extends SQLite3
  {
    function __construct()
    {
      $this->open('Login.db');
    }
  }
    $db = new LoginDB();
    $uname=$_POST['uid'];
    $pwd=$_POST['pwd'];
    $sql="select * from Login where UNAME='".$uname."'";
    $res=$db->query($sql);
    $n=0;
    while($res->fetchArray())
      $n++;
    if($n==0)
    {
      header("Location: http://localhost:1516");
      die();
    }
    $row=$res->fetchArray(SQLITE3_ASSOC);
    if($pwd==$row['PASSWORD'])
    {
      $usrtype=$row['USRTYPE'];
      $cookie_name='OPMS';
      $cookie_value=$uname;
      setCookie($cookie_name,$cookie_value,time()+300,"/","",0);
      if($usrtype=="PRO_MAN")
      {
        $db->close();
        header("Location: http://localhost:1516/admin.php");
      }
      elseif ($usrtype=="DEV") {
        $db->close();
        header("Location: http://localhost:1516/developer.php");
      }
      elseif ($usrtype=="CLIENT") {
        $db->close();
        header("Location: http://localhost:1516/client.php");
      }
    }
    else{
      echo "<script>swal('Access Denied','Invalid Username or password','error');
            </script>";
            $db->close();
    }
    $db->close();
}
 ?>
