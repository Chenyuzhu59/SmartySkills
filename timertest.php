<?php
//php的时间是以秒算。js的时间以毫秒算
date_default_timezone_set("Asia/Hong_Kong");//地区

$nowtime = time();
$starttime=$nowtime;
$endtime=$nowtime+1200;

//if ($nowtime<$starttime){
//die("活动还没开始,活动时间是：{$starttimestr}至{$endtimestr}");
//}
$lefttime = $endtime-$nowtime; //实际剩下的时间（秒）
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP实时倒计时!</title>
<script language="JavaScript">
<!-- //
var runtimes = 0;
function GetRTime(){
var nMS = <?=$lefttime?>*1000-runtimes*1000;
var nH=Math.floor(nMS/(1000*60*60))%24;
var nM=Math.floor(nMS/(1000*60)) % 60;
var nS=Math.floor(nMS/1000) % 60;
document.getElementById("RemainH").innerHTML=nH;
document.getElementById("RemainM").innerHTML=nM;
document.getElementById("RemainS").innerHTML=nS;
if(nMS>5*59*1000&&nMS<=5*60*1000)
{
alert("还有最后五分钟！");
}
runtimes++;
setTimeout("GetRTime()",1000);
}
window.onload=GetRTime;
// -->
</script>
</head>
<body>
<h1><strong id="RemainH">XX</strong>:<strong id="RemainM">XX</strong>:<strong id="RemainS">XX</strong></h1>
</body>
</html>

