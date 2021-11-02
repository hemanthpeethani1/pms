<html>
<head>
  <script type="text/javascript" src="../js/sweetalert2.all.js"></script>
  <link rel="stylesheet" href="../css/sweetalert2.css">
</head>
<body/>
</html>
<?php
if(isset($_POST['status'])){
  $pro=$_POST['project'];
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
  $sql="select STATUS from project where PNAME='".$pro."'";
  $res=$db->query($sql);
  $row=$res->fetchArray(SQLITE3_ASSOC);
  $i=$row['STATUS'];
  echo "<script> swal('Status of $pro is $i ');
        </script>";
}
 ?>
