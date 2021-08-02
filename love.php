<?php
//echo "<script>alert(course_id);</script>";
include_once("connection.php"); //连接数据库
$ip = get_client_ip(); //获取用户IP
$courseid = $_GET['like'];
if(!isset($courseid) || empty($courseid)) exit;
$ip_sql=mysqli_query($link,"select userip from userip where courseid='$courseid' and userip='$ip'");
$count=mysqli_num_rows($ip_sql);
if($count==0){ //如果没有记录
  $sql = "update course set love=love+1 where id='$courseid'"; //更新数据
  mysqli_query($link,$sql);
  $sql_in = "insert into userip (id,courseid,userip) values (1,'$courseid','$ip')"; //写入数据
  mysqli_query($link, $sql_in);
  $result = mysqli_query($link,"select * from course where courseid='$courseid'");
  $row = mysqli_fetch_array($result);
  $love = $row['love']; //获取赞数值
  echo "<span class='number' id='like'>".$love."</span>";
}else{
  echo "赞过了..";
}
