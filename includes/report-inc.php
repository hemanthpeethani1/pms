<?php
  if(isset($_POST['report'])){
    $pro=$_POST['project'];
    $rep=$_POST['Report'];
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
    $sql="insert into Report values('".$pro."','".$rep."')";
    $res=$db->query($sql);
    $db->close();
    header("Location: http://localhost:1516/logout.php");
  }
  else{
    echo "<script>
            window.close();
            </script>";
  }
 ?>
