<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrator Page</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/nav&footer.css"/>
        <link href="personalstyle.css" rel="stylesheet" type="text/css"/>
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

        <div class="container mycontainer">
            <div class="row firstrow">
                <div class="userimg text-center" style="">
                    <a href="#">
                        <?php
                            include 'connection.php';
                            $query4 = "select * from users where role=0";
                            $result4 = mysqli_query($link, $query4);
                            $row4 = mysqli_fetch_array($result4);
                            echo "<img class='img-responsive' src=".$row4['header']." />";//此处需获取登录用户的学号
                            echo "<h3>Hello, ".$row4["username"]."</h3>"
                        ?>
                    </a>
                </div>
            </div>
            
        
        <div class="row secondrow">
            <div class="col-lg-8" style="padding-left:0;">
                <?php
                    include 'connection.php';
                    $query3 = "select * from course;";
                    $result3 = mysqli_query($link, $query3);
                    while ($row3 = mysqli_fetch_array($result3)) {
                       $courseid = $row3["courseid"];
                       ?>
                <div class="col-lg-6 course1" style="padding-left:0;">

                                <div class="thumbnail">
                                    <img alt="300x200" src=<?php echo $row3["courseimg"]; ?> />
                                    <div class='caption text-center'>
                                        <a href='#'class='coursebox'>
                                            <h3><?php echo $row3["coursename"];?></h3>
                                        </a>
                                    </div>
                                    <div class='users'>
                                        <a class='btn' href='#' onclick='like(<?php echo $courseid?>)'>
                                            <span class='glyphicon glyphicon-thumbs-up'></span></a>
                                        <span class='number' id='like'></span>
                                        <a class="btn" href="#" onclick="delete();">Delete</a>
                                    </div>
                                        
                                    
                                </div>
                            </div>
                    <?php } ?>
            </div>
            <div class="col-lg-4">
                
            </div>
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
</html>
