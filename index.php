<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link href="homestyle.css" rel="stylesheet" type="text/css"/>
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

        <!--the body starts here-->
        <div class="container mycontainer">
            <!--<div class="inner">-->

            <div class="row firstrow">

                <!--轮播图-->
                <div class="col-lg-12">
                    <div class="carousel slide" id="mycarousel" data-ride="carousel" data-interval="3000" data-pause="hover">

                        <ol class="carousel-indicators">
                            <li data-target="#mycarousel" data-slide-to = "0" class="active"></li>
                            <li data-target="#mycarousel" data-slide-to = "1"></li>
                            <li data-target="#mycarousel" data-slide-to = "2"></li>
                            <li data-target="#mycarousel" data-slide-to = "3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <!--first slide starts here-->
                            <div class="container-fluid active item img-box img-box1" id="">
                                <div class="row innerrow">
                                        <!--<img class="img-responsive img-full" style="width:100%;height: 500px;" src="img/pic1.jpg" alt="First Slide"/>-->
                                    <div class="banner"></div>
                                    <span class="divider left" >&nbsp;</span>
                                    <span class="coursename text-center">HTML</span>
                                    <span class="divider right" >&nbsp;</span>
                                    <input type="button" class="btn etbtn" id="etbtn" value="Join Course" />
                                </div>
                            </div>
                            <!--first slide end here-->

                            <!--2nd slide starts here-->
                            <div class="container-fluid item img-box img-box2" id="">
                                <div class="row innerrow">
                                    <div class="banner"></div>
                                    <span class="divider left" >&nbsp;</span>
                                    <span class="coursename text-center">Linux</span>
                                    <span class="divider right" >&nbsp;</span>
                                    <input type="button" class="btn etbtn" id="etbtn" value="Join Course" />
                                </div>
                            </div>
                            <!--2nd slide ends here-->

                            <!--3rd slide starts here-->
                            <div class="container-fluid item img-box img-box3" id="">
                                <div class="row innerrow">
                                    <div class="banner"></div>
                                    <span class="divider left" >&nbsp;</span>
                                    <span class="coursename text-center">JUnit</span>
                                    <span class="divider right" >&nbsp;</span>
                                    <input type="button" class="btn etbtn" id="etbtn" value="Join Course" />
                                </div>
                            </div>
                            <!--3rd slide ends here-->

                            <!--4th slide starts here-->
                            <div class="container-fluid item img-box img-box4" id="">
                                <div class="row innerrow">
                                    <div class="banner"></div>
                                    <span class="divider left" >&nbsp;</span>
                                    <span class="coursename text-center">UML</span>
                                    <span class="divider right" >&nbsp;</span>
                                    <input type="button" class="btn etbtn" id="etbtn" value="Join Course" />

                                </div>
                            </div>
                            <!--4th slide ends here-->
                        </div>
                        <!--<a href="#mycarousel" class="carousel-control left" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a href="#mycarousel" class="carousel-control right" data-slide="next">
                            <span class="icon-next"></span>
                        </a>-->
                        <div class="btnarrow leftarrow">
                            <a class="carousel-control" href="#mycarousel" data-slide="prev">
                                <span class="lefticon glyphicon glyphicon-chevron-left "></span></a>
                        </div>
                        <div class="btnarrow rightarrow">
                            <a class="carousel-control" href="#mycarousel" data-slide="next">
                                <span class="righticon glyphicon glyphicon-chevron-right "></span></a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="row secondrow">
                <div class="col-lg-6 onlinetest">
                    <img src="img/introduceContainer1.gif" class="col-lg-4 img-responsive" />
                    <ul class="col-lg-8">
                        <?php
                            require_once 'connection.php';
                            $query1 = "select * from course;";
                            $result1 = mysqli_query($link, $query1);
                            while ($row1 = mysqli_fetch_array($result1)) {
                                echo "<li><a href='#'>" . $row1["coursename"] . "</a></li>";
                            }
                        ?>
                    </ul>
                </div>
                <div class="col-lg-6 practice">
                    <img src="img/introduceContainer2.gif" class="col-lg-4 img-responsive" />
                    <ul class="col-lg-8">
                        <?php
                        $query2 = "select * from course;";
                        $result2 = mysqli_query($link, $query2);
                        while ($row2 = mysqli_fetch_array($result2)) {
                            echo "<li><a href='#'>" . $row2["coursename"] . "</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>

            <div class="row thirdrow">
                <div class="container">
                    <div class="row row1">
                        <div>
                            Courses
                        </div>
                    </div>

                    <div class="row row2 courses">
                        <?php
                        $query3 = "select * from course;";
                        $result3 = mysqli_query($link, $query3);
                        while ($row3 = mysqli_fetch_array($result3)) {
                            $courseid = $row3["courseid"];
                            echo "
                            <div class='col-md-3 course1'>

                                <div class='thumbnail'>
                                    <img alt='300x200' src=".$row3["courseimg"]." />
                                    <div class='caption text-center'>
                                        <a href='#'class='coursebox'>
                                            <h3>". $row3["coursename"]."</h3>
                                        </a>
                                    </div>
                                    <div class='users'>
                                        <a class='btn' href='#' rel='". $courseid ."' ><span class='glyphicon glyphicon-thumbs-up'></span></a>
                                        <span class='number' id='like'></span>
                                    </div>
                                </div>
                            </div>";
                         }?>
                    </div>
                </div>
            </div>

            <!--the best performers starts here-->
            <div class="row fourthrow">
                <div class="container">
                    <div class="row">
                        <div>Top Performer of Each Course</div>
                    </div>
                    <div class="row">
                        <?php
                        $query4 = "select * from selectcourse sc, course c, users u where sc.courseid=c.courseid and sc.rollnumber=u.rollnumber and role=1;";
                        $result4 = mysqli_query($link, $query4);

                        while ($row4 = mysqli_fetch_array($result4)) {
                            echo "<div class='col-md-3'>"
                            . "<div class='thumbnail text-center'>"
                            . "<img class='pimg img-responsive' style='width:168px;height:168px;' src=" . $row4['header'] . " />"
                            . "<div class='caption'><h4>Best Performer of " . $row4['coursename'] . "</h4>";
                                    $cc=$row4['coursename'];
                            echo  "<a class='btn btn-primary' href='rank.php?m=$cc'>Rank</a></div></div></div>";
                        }
                        ?>
                    </div>
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
    <script type="text/javascript">
        $(document).ready(function ()
        {
            $(".onlinetest>ul>li>a").click(function ()
            {
                value = $(this).text();
                window.location.href = "onlinetest.php?coursename=" + value;
            });
            $(".practice>ul>li>a").click(function ()
            {
                value = $(this).text();
                window.location.href = "practice.php?coursename=" + value;
            });


            $(".users a").click(function () {
                var love = $(this);
                var loveno = $(".users .number");
                var courseid = love.attr("rel"); //对应id
                loveno.fadeOut(300); //渐隐效果
                $.ajax({
                    type: "GET",
                    url: "love.php",
                    data: "courseid=" + courseid,
                    cache: false, //不缓存此页面
                    success: function (data) {
                        console.log(data);
                        loveno.html(data);
                        loveno.fadeIn(300); //渐显效果
                    }
                });
                return false;
            });
            

        });
//        function like(course_id){
////            alert(course_id);
//            var xmlhttp = new XMLHttpRequest();
//            xmlhttp.onreadystatechange = function(){
//                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
//                    document.getElementById('like').innerHTML = xmlhttp.responseText;
//                }
//                
//            xmlhttp.open("get", "love.php?like="+course_id, true);
//            xmlhttp.send();
//        };
//        }


    </script> 
</html>


