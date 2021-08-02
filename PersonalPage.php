<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
        <title>Personal Page</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/nav&footer.css"/>
        <link href="personalstyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <style>
        .mycontainer .firstrow
        {
            margin-top: 94px;
        }
        .userimg
        {
            background: url(img/person-homepage.jpg);
        }
        .userimg>a>img
        {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin: 0 auto;
            padding: 20px 20px;
        }
        .userimg>a>h3
        {
            padding-bottom: 20px;
        }
        .title
            {
                margin-top: 20px;
                font-size: 24px;
            }
            .cimg
            {
                padding-left: 0;
                margin-top: 15px;
            }
            .table
            {
                font-size: 18px;
            }
            .scbox
            {
                padding-left: 0;
            }
            .sbtn
            {
                margin-top: 15px;
            }
            
            #Header{
                list-style: none;
                text-decoration: none;
               
            }
            #Header form{
                    position: absolute;
                    left: 47%;
                    top: 36%;
                    
            }
            #Header form input{
                background: none;
                width: 80px;
                border: none;
                opacity: 0;
                margin-top: -21px;
                z-index: 100;
            }
            #Header form p{
                background: none;
                width: 80px;
                border: none;
            }
            #Header:hover > form p{
                display: inline-block;
            }
    </style>
    <script>
        function submitauto(){
            $("#imgform").submit();
        }
    </script>
    <body>
        <?php 
        include 'connection.php';
        if(isset($_POST['sss'])){
            $databasepath="";
            $path=$_FILES['setHeader']['tmp_name'];
            $name=$_FILES['setHeader']['name'];
            $newpath="img/".$name;
            move_uploaded_file($path, $newpath);
             $databasepath .="img\\".$name;
             $databasepath = addcslashes($databasepath, "\\");
             $query="update users set header =' $databasepath' where role=1";
             
             $result=  mysqli_query($link, $query);
             
             echo "<script>location.href='PersonalPage';</script>";
        }
        ?>
        
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
                    <a href="index.php">
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
        
        <div class="container mycontainer">
            <div class="row firstrow">
                <div class="userimg text-center" style="">
                    <a href="#" id="Header">
                        <?php
                            include 'connection.php';
                            $query4 = "select * from users where role=1";
                            $result4 = mysqli_query($link, $query4);
                            $row4 = mysqli_fetch_array($result4);
                        ?>
                        <img class='img-responsive' id="HeaderImg" src="<?php echo $row4['header']; ?>" />
                        <form method="post" action="PersonalPage.php" enctype="multipart/form-data" id="imgform">
                            <p>Set Header</p>
                            
                            <input type="file" name="setHeader"  accept="image/*" onchange="submitauto();"/>
                            <input name="sss" style="display:none;" />
                        </form>
                        <h3>Hello,<?php echo $row4["username"]; ?></h3>
                    </a>
                </div>
            </div>
            
            <div class="row secondrow">
                <div class="col-lg-8 scbox">
                <div class="title">
                            <span class="glyphicon glyphicon-play"></span>
                            Courses You Selected
                        </div>
                
                <?php 
                     
                    $query8 = "select * from course c,selectcourse sc where c.courseid=sc.courseid and rollnumber='123';";//此处需获取登录用户的学号
                        $result8 = mysqli_query($link, $query8);
                        while ($row8 = mysqli_fetch_array($result8)) {
                            $courseid = $row8["courseid"];
                
                ?>
                <div class="col-md-6 cimg">
                                <div class="thumbnail">
                                    <img alt="300x200" height=300px width=200px class="img-responsive img-full" src=<?php echo $row8["courseimg"];?> />
                                    <div class="caption text-center">
                                        <a href="#" class="coursebox">
                                            <h3><?php $row8["coursename"]?></h3>
                                        </a>
                                    </div>
                                    <div class="users">
                                        <a class="btn" href="#" rel="<?php $courseid ?>" onclick="like(<?php $courseid ?>)">
                                            <span class="glyphicon glyphicon-thumbs-up"></span></a>
                                        <span class="number" id="like"><?php echo $row8["love"]; ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
            </div>
               
            
            <div class="col-lg-4">
                <div class="title">
                            <span class="glyphicon glyphicon-play"></span>
                            Your Performance Report
                        </div>
                <div class="tabbable" id="tabs1">
				<ul class="nav nav-tabs">
					<li class="active">
						 <a href="#panel1" data-toggle="tab">Course</a>
					</li>
					<li>
						 <a href="#panel2" data-toggle="tab">Date</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel1">
                                            <table class="table">
                                                <th>Course Name</th>
                                                <th>Grade</th>
						<?php
                    $query5 = "select * from grade g, course c where g.courseid = c.courseid and rollnumber = '123';";//此处需获取登录用户的学号
                    $result5 = mysqli_query($link, $query5);
                    while ($row5 = mysqli_fetch_array($result5)) {
                        echo "
                    <tr><td>".$row5['coursename']."</td><td>".$row5['grade']."</td></tr>";
                    }
                ?>
                                            </table>
					</div>
					<div class="tab-pane" id="panel2">
                                            <table class="table">
                                                <th>Test Date</th>
                                                <th>Course Name</th>
                                                <th>Grade</th>
						<?php
                    $query6 = "select * from grade g, course c where g.courseid = c.courseid and rollnumber = '123';";//此处需获取登录用户的学号
                    $result6 = mysqli_query($link, $query6);
                    while ($row6 = mysqli_fetch_array($result6)) {
                        echo "
                    <tr><td>".$row6[testdate]."</td><td>".$row6[coursename]."</td><td>".$row6[grade]."</td></tr>";
                    }
                ?>
                                                </table>
					</div>
				</div>
			</div>
                
            </div>
                 </div>
            <div class="row fourthrow">
                <div class="title">
                            <span class="glyphicon glyphicon-play"></span>
                            Please Write Down Your Feedback
                        </div>
                <div class="col-lg-12 cimg">
                    <div class="form-group">
                        <form action="" method="POST">
                            <textarea name="content" class="form-control" rows="3"></textarea>
                            <input class="sbtn btn btn-default" type="submit" value="Submit" name="submit" />
                        </form>
                    </div>
                </div>
                <?php
                    if(!empty($_POST['submit'])){
                        $query7 = "insert into feedback value(null,'"."123"."','".$_POST['content']."');";
                        $result7 = mysqli_query($link, $query7);
//                        $row7 = mysqli_num_rows($result7);
                        if($result7)
                        {
                            echo "<script>alert('Thanks for your feedback');</script>";
                        }
                    }
                        ?>
            </div>
        </div>
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
    <script>
//        $(document).ready(function()
//        {
//            
//        });
    </script>
</html>
