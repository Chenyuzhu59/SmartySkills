<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Feedback</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/nav&footer.css"/>
	</head>
        <style>
            .SendEmail
{
	position: absolute;
	top:10%;
	left:17.5%;
	width: 65%;
	height:500px;
	text-align: center;
}
.SendEmail form div
{
	margin-left:10%;
}
.SendEmail form div
{
	text-align: left;
	width:10%;
}
 .SendEmail form input
{
    width:80%;
}


 .SendEmail .Content
{
    width:80%;
    height:50%;
}
.SendEmail .button
{
    height: 20%;
    width: 15%;
}
        </style>
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
        
        <div class="SendEmail" >
            <form name="Feedback" method="post">
		<div><label>Receiver:</label></div><input type="text" name="Address" class="Address" disabled value="564144170@qq.com"></br></br>
                <div><label>Content:</label></div><textarea type="text" name="Content" class="Content" rows="6" cols="6"></textarea></br></br>
                <center><input class="button" type='submit' value='Send Feedback' /></center>
                <input type="text" name="User" value="Mason" hidden="true"></br></br>
                <input type="text" name="Email" value="787228438@qq.com" hidden="true"></br></br>
		        
            </form>
	</div>
        
        <!--footer starts here-->
        <footer class="footer navbar-fixed-bottom" id="footer">
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
	
        <?php
require_once 'C:\wamp64\bin\php\php7.1.9\PHPMailer-master\PHPMailer-master\src\PHPMailer.php';
require_once 'C:\wamp64\bin\php\php7.1.9\PHPMailer-master\PHPMailer-master\src\SMTP.php';
require_once 'C:\wamp64\bin\php\php7.1.9\PHPMailer-master\PHPMailer-master\src\Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if($_POST)
    {
//        $to  = 'DepartmentHead@ShopForYou.com';
//        $subject = 'Feedback Details';
//        $message =''
//                . '<html><head><title>Feedback Details for June,2012</title>'
//                . '</head><body><table border=1 style=border-color:black;>'
//                . '<tr><th>Candidate Name</th><th>Customers Email ID</th><th>Product Name</th><th>Feedback</th>'
//                . '</tr>'
//                . '<tr><td>'.$_POST['CustomerName'].'</td><td>'.$_POST['EmailID'].'</td><td>'.$_POST['ProductName'].'</td><td>'.$_POST['Feedback'].'</td></tr>'
//                . '</table></body></html>';
//
//        
 //  $headers = 'MIME-Version:1.0'."\r\n";
 //  $headers .='Content-type:text/html;charset=iso-8859-1'."\r\n";
   
   $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->CharSet = 'iso-8859-1';
    $mail->ContentType = 'text/html';
    $mail->SMTPDebug =2;                                 // Enable verbose debug output
    $mail->isSMTP();                                    // Set mailer to use SMTP
    $mail->Host = 'smtp.qq.com';                        // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '994424040@qq.com';                 // SMTP username
    $mail->Password = 'gtmcqwynslqabegb';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;    
  //  $mail->SMTPAutoTLS = false;// TCP port to connect to
    //Recipients
    $mail->setFrom('994424040@qq.com','Lily');
    $mail->addAddress('994424040@qq.com','ll');     // Add a recipient
    //$mail->addAddress('gaurav.verma@niit.com.cn');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    //  $mail->addCC('cc@example.com');
    //  $mail->addBCC('bcc@example.com');
    //Attachments
    //   $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //   $mail->addAttachment('/tmp/image.jpg','new.jpg');    // Optional name
    //Content
    //  $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Feedback Details';
    $mail->Body = ''
                . '<html><head><title>Feedback Details for June,2012</title>'
                . '</head><body><table border=1 style=border-color:black;>'
                . '<tr><th>User</th><th>Email Address</th><th>Content</th>'
                . '</tr>'
                . '<tr><td>'.$_POST['User'].'</td><td>'.$_POST['Email'].'</td><td>'.$_POST['Content'].'</td></tr>'
                . '</table></body></html>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'Message has been sent';
    echo "<script>window.location.href='index.php'</script>";
} catch (Exception $e)
{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    }}?>
        </body>
	<script src="js/jquery-2.1.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
</html>
