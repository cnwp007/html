<?php
header("Content-Type:text/html;charset=utf-8");
$con = mysql_connect("localhost","root","wang5763");
if (!$con)
  {
  die('数据库连接失败: ' . mysql_error());
  }
  else
  {
  	// echo "connect success!";
  mysql_select_db("test", $con);
  $result = mysql_query("SELECT * FROM class");
  while($row = mysql_fetch_array($result))
  {
  echo $row['id'] . " " . $row['name'];
  echo "<br />";
  }
  }
mysql_close($con);
?>