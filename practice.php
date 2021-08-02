<!DOCTYPE html>
<?php
        session_start();
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

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/nav&footer.css"/>
        
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
            <h1 class="text-center"><?php echo $coursename?> Practice</h1>
            <form method="post" action="pracgrade.php" >
        <!--class="col-xs-10 col-sm-8"-->
<?php
            $query = '';

            $query = "Select * From question where courseid='.$courseid.' order By rand() Limit 15";
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
                    $correct[$i]=$row['correctans'];
                }            

                $arrse=  serialize($correct);
                $_SESSION['correctans']=$arrse;
                
                $que=  serialize($questionid);
                $_SESSION['questionid']=$que;
//                for($i=1;$i<=$no_of_rows;$i++){  
//                    echo $correct[$i];
//                }
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

