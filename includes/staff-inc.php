<?php
if(isset($_POST['submit'])){
  $project=$_POST['project'];
  $dev=$_POST['DEV'];
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
  $sql="update project set DEVELOPER_NAME='".$dev."' where PNAME='".$project."'" ;
  $res=$db->exec($sql);
  $db->close();
}
 ?>
