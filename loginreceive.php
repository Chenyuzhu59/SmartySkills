<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("test", $con);
$sql="INSERT INTO person111 (id, name, num)
VALUES
('$_POST[id]','$_POST[name]','$_POST[num]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "your ID is：".$_POST["id"]."<br/>";
echo "your name is：".$_POST["name"]."<br/>";
echo "your num is：".$_POST["num"]."<br/>";
mysql_close($con);
?>

