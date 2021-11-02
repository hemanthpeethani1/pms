<html>
<head>
  <script type="text/javascript" src="../js/sweetalert2.all.js"></script>
  <link rel="stylesheet" href="../css/sweetalert2.css">
</head>
<body/>
</html>
<?php
  if(isset($_POST['update'])){
    $pro=$_POST['project'];
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
    $sql="update project set STATUS='".$stat."'where PNAME='".$pro."'";
    $res=$db->exec($sql);
    $db->close();
    if($res==1)
    {
      echo "<script>swal('Status Updated Successfully','','success');
      </script>";
    }
    else {
      header("Location: http://localhost:1516/developer.php");
    }
  }
 ?>
