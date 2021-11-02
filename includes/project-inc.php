<html>
<head>
  <script type="text/javascript" src="../js/sweetalert2.all.js"></script>
  <link rel="stylesheet" href="../css/sweetalert2.css">
</head>
<body/>
</html>
<?php
if(isset($_POST['submit']))
{
  $pname=$_POST['project'];
  $date=$_POST['startdate'];
  $dev=$_POST['dev'];
  $stat=$_POST['stat'];
  /**
   *
   */
  class Project extends SQLite3
  {

    function __construct()
    {
      $this->open('project.db');
    }
  }
  $db=new Project();
  $sql="insert into project values('".$pname."','".$date."','".$dev."','".$stat."')";
  $res=$db->exec($sql);
  if($res==1)
  {
    echo "<script>swal('Project created successfully','','success');
    </script>";
  }
  elseif ($res==0) {
    header("Location: http://localhost:1516/admin/project.php");
  }
}
 ?>
