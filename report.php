<html>
<head>
  <title>Report</title>
  <link rel="stylesheet" href="./css/report.css">
</head>
<body>
  <div class="main">
    <form action="./includes/report-inc.php" method="post">
    <div class="one">
      <input type="text" name="project" required autocomplete="off" pattern="[a-z A-Z]{1,}" placeholder="Project Name">
    </div>
    <div class="two">
      <textarea name="Report" required autocomplete="off" placeholder="Report"></textarea>
  </div>
  <button type="submit" name="report">Report</button>
</form>
</body>
</html>
<?php
if(!isset($_COOKIE['OPMS'])){
  header("Location: http://localhost:1516");
}
 ?>
