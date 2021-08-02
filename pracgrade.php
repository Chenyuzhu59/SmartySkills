<!DOCTYPE html>
<?php
        session_start();
        include 'connection.php';
        header("Content-Type:text/html",FALSE);
        error_reporting(E_ALL & ~E_NOTICE);
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
        <?php
            $cor = unserialize($_SESSION['correctans']);
              $question= unserialize($_SESSION['questionid']);
//              print_r($question);
      //        echo $_SESSION['correctans'];
      //        print_r($cor);
              $sum=0;
              if($_POST){
                  $chose[1]=$_POST["question1"]; 
                  $chose[2]=$_POST["question2"]; 
                  $chose[3]=$_POST["question3"]; 
                  $chose[4]=$_POST["question4"];
                  $chose[5]=$_POST["question5"]; 
                  $chose[6]=$_POST["question6"];
                  $chose[7]=$_POST["question7"]; 
                  $chose[8]=$_POST["question8"];
                  $chose[9]=$_POST["question9"]; 
                  $chose[10]=$_POST["question10"];
                  $chose[11]=$_POST["question1"]; 
                  $chose[12]=$_POST["question2"]; 
                  $chose[13]=$_POST["question3"]; 
                  $chose[14]=$_POST["question4"];
                  $chose[15]=$_POST["question5"]; 
              }  
        ?>
        <div class="container mycontainer" style="margin-top: 50px;background-color: beige">
            <?php
                  for ($i = 1; $i <=15; $i++) {
                      if($chose[$i]==$cor[$i]){
                          $sum=$sum+6.5;
                      }
                  }          
              ?>
            <div class="text-center">
                <h3>YOUR SCORE</h3>
                <h1><?php echo $sum?></h1>
                
                    <?php 
                        if($sum>=60){
                            echo "<button class='btn-success'>Good! Hold on!</button>";
                        }else{
                            echo "<button class='btn-danger'>Bad! Practice More!</button>";
                        }
                    ?>
                <hr><br>
                <p style="color: saddlebrown">Wrong question statistics </p>
            </div>
            <tr ></tr>
            <?php
                 for ($i = 1; $i <=15; $i++) {
                      if($chose[$i]==$cor[$i]){
                         
                      }else{
                          $qid=$question[$i];
                          $query = '';
                          $query = "Select * From question where id=$qid";
                          $cxtm = mysqli_query($link,$query);
//                           $no_of_rows = mysqli_num_rows($cxtm);
//                           echo "*******".$no_of_rows."*********";
                            $row = mysqli_fetch_array($cxtm,MYSQLI_ASSOC);                       
                            echo "<table class='table text-center'><tr><td colspan='2'>"
                                 .$row['question']."</td></tr>"
                                  ."<tr><td colspan='2'>A. ".$row['answera']."</td></tr>"
                                    ."<tr><td colspan='2'>B. ".$row['answerb']."</td></tr>"
                                    ."<tr><td colspan='2'>C. ".$row['answerc']."</td></tr>"
                                    ."<tr><td colspan='2'>D. ".$row['answerd']."</td></tr>"
                                    ."<tr><td  style='background-color: green'>Correct Answer: "
                                    . $row['correctans']."</td><td  style='background-color: red'>Your Answer: "
                                    . $chose[$i]."</td></tr>";
    //                                    echo $row['correctans'];
                              } 
                      }
                      
            ?>
            
        </table>
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

