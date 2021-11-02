<?php
if(isset($_COOKIE['OPMS'])){
  setcookie("OPMS","",time()-600,"/","",0);
  header("Location: http://localhost:1516");
}
else{
  header("Location: http://localhost:1516");
}
 ?>
