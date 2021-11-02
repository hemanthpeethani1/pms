<html>
<head>
  <script type="text/javascript" src="../js/sweetalert2.all.js"></script>
  <link rel="stylesheet" href="../css/sweetalert2.css">
</head>
<body/>
</html>
<?php
if (isset($_POST['submit'])) {
  $fname=$_POST['first'];
  $lname=$_POST['last'];
  $email=$_POST['email'];
  $num=$_POST['contact'];
  $pro=$_POST['project'];
  $pwd=$_POST['pwd'];
  $usr="CLIENT";
  /**
   *
   */
  class Client extends SQLite3
  {

    function __construct()
    {
      $this->open('Login.db');
    }
  }

  $db=new Client();
  $sql="insert into client values('".$fname."','".$lname."','".$email."','".$num."','".$pro."')";
  $res=$db->exec($sql);
  $sql="insert into Login values('".$email."','".$pwd."','".$usr."')";
  $res=$db->exec($sql);
  if($res==1)
  {
    echo "<script>swal('Client account created successfully','','success');
    </script>";
    $db->close();
  }
  elseif ($res==0) {
    $db->close();
    header("Location: http://localhost:1516/admin.php");
  }
}
 ?>
