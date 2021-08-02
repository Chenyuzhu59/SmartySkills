<!DOCTYPE html>
<?php
        session_start();     
//        $allow_sep = "2"; 
//        if (isset($_SESSION["post_sep"])) 
//        { 
//        if (time() - $_SESSION["post_sep"] < $allow_sep) 
//        { 
//        exit("请不要频繁刷新，休息2秒再刷新吧"); 
//        } 
//        else 
//        { 
//        $_SESSION["post_sep"] = time(); 
//        } 
//        } 
//        else 
//        { 
//        $_SESSION["post_sep"] = time(); 
//        }  
//        echo $_GET['coursename'];
        $coursename = $_GET['coursename'];
        echo $coursename;
//        $coursename='HTML';
        if(!empty($_GET['coursename']))
        {
            if($coursename=='JUNIT'){
                $courseid=1;
            }
            elseif($coursename=='HTML'){
                $courseid=2;
            }
            elseif($coursename=='UML'){
                $courseid=3;
            }
            elseif($coursename=='LINUX'){
                $courseid=4;
            }
        }
//        echo $courseid;
        include 'connection.php';
        header("Content-Type:text/html",FALSE);
?>
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
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/nav&footer.css"/>
        <script type="text/javascript">     
            window.onload= function(){
                document.getElementById('myform').submit();
             }
            document.onkeydown = function()
            {
                if(event.keyCode==116) {
                    event.keyCode=0;
                    event.returnValue = false;
                }
            }
            document.oncontextmenu = function()
            {
                event.returnValue = false;
            }
            
        </script>
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
        if(nMS<=1*1000)
        {
         document.getElementById('myform').submit();
        }
        
        }
        window.onload=GetRTime;
        // -->
        </script>
    </head>
    <body>
        <!--navigation starts here-->
        <div class="navbar navbar-default navbar-fixed-top header">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navcollapse">
                        <!--collapse the menu,data-toggle is used to collapse the menu
                                data-target: what elements to be collapsed,its value is the id of the element
                        -->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--the logo-->
                    <a href="#">
                        <div class="logo">
                            SmartySkills
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navcollapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Course
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu course">
                                <li><a href="">HTML5</a></li>
                                <li class="divider"></li>
                                <li><a href="">JUnit</a></li>
                                <li class="divider"></li>
                                <li><a href="">UML</a></li>
                                <li class="divider"></li>
                                <li><a href="">Linux</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle menubtn" data-toggle="dropdown">Test
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu course">
                                <li><a href="">Online skill test</a></li>
                                <li class="divider"></li>
                                <li><a href="">Practice quiz</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="btns navbar-right">
                        <a href="" class="btn btn-default navbar-btn login">
                            <span class="glyphicon glyphicon-log-in btnicon"></span>Login</a>
                        <a href="" class="btn btn-default navbar-btn register">
                            <span class="glyphicon glyphicon-user btnicon"></span>Register</a>
                    </div>
                    <form class="navbar-form navbar-right" action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control search" name="search" placeholder="search course" />
                        </div>
                        <!--<input type="submit" value="Submit"/>-->
                    </form>
                </div>
            </div>
        </div>
        <!--navigation ends here-->
        <!--container starts here-->
        <div class="container mycontainer" style="margin-top: 50px;background-color: bisque">
            <h1 style="display: inline;float: left">Welcome to <?php echo $coursename?> test</h1>
            <h3 style="display: inline;float: right"><strong id="RemainH">XX</strong>:<strong id="RemainM">XX</strong>:<strong id="RemainS">XX</strong></h3>
            <form method="post" action="grade.php" id="myform">
               
        <!--class="col-xs-10 col-sm-8"-->
<?php
            $query = '';

            $query = "Select * From question where courseid='.$courseid.' order By rand() Limit 20";
            $questions = mysqli_query($link,$query);
            $no_of_rows = mysqli_num_rows($questions);
            
                for($i=1;$i<=$no_of_rows;$i++){              
                    $row = mysqli_fetch_array($questions,MYSQLI_ASSOC);                       
                    echo "<table class='table'><tr><td>$i</td><td>"
                         .$row['question']."</td></tr>"//问题
                          ."<tr><td><input type='radio' name='question".$i."' value='A' required></td><td>A. ".$row['answera']."</td></tr>"
                            ."<tr><td><input type='radio' name='question".$i."' value='B' required></td><td>B. ".$row['answerb']."</td></tr>"
                            ."<tr><td><input type='radio' name='question".$i."' value='C' required></td><td>C. ".$row['answerc']."</td></tr>"
                            ."<tr><td><input type='radio' name='question".$i."' value='D' required></td><td>D. ".$row['answerd']."</td></tr><br>";
//                            echo $row['correctans'];
                    $questionid[$i]=$row['id'];
//                    echo $questionid[$i];
                    $correct[$i]=$row['correctans'];
                }            

                $arrse=  serialize($correct);
                $_SESSION['correctans']=$arrse;
                
                $que=  serialize($questionid);
                $_SESSION['questionid']=$que;
//                for($i=1;$i<=$no_of_rows;$i++){  
//                    echo $correct[$i];
//                }
                 $_SESSION['cid']=$courseid;
//                 echo "****************".$_SESSION['cid']
       ?>
        </table>
        <div class="text-center">
             <input class="btn btn-primary btn-lg" type="submit" value="submit">
             <input class="btn btn-danger btn-lg" type="reset" value="reset">
        </div>
       
        </form>
        </div>
        <!--container ends here-->
        <!--footer starts here-->
        <footer class="footer" id="footer">
            <div class="footerdetails">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3>About Us</h3>
                            <p>
                                Smarty Skills is a newly launched online web site that offers Practice 
                                and Online Skill test to its users. It also plan to offer a Cross platform 
                                web application to its users across devices and platform.
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <h3>Contact Us</h3>
                            <div class="contactdetails">
                                <ul class="contacts-info-list text-left">
                                    <li>
                                        <span class="glyphicon glyphicon-map-marker"></span>
                                        <span class="info-item">
                                            &nbsp;Ningxia Road 308, Qingdao University
                                        </span>
                                    </li>
                                    <li>
                                        <span class="glyphicon glyphicon-phone-alt"></span>
                                        <span class="info-item">
                                            &nbsp;Telephone: +15653205695<br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax: +15653205695

                                        </span>
                                    </li>
                                    <li>
                                        <span class="glyphicon glyphicon-envelope"></span>
                                        <span class="info-item">
                                            &nbsp;<a href="mailto:info@omg.org">937721540@qq.com</a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footercopyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            Copyright © 2018 <a href="#">The Warriors</a> &nbsp;| &nbsp;All Rights Reserved
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    <script src="js/jquery-2.1.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
</html>

