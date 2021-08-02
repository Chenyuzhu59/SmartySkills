    <?php
    include 'connection.php';
        if(isset($_POST["button"])&&$_POST["button"]=="Register")
        {
            $user=$_POST["username"];
            $rollnum=$_POST["rollnumber"];
            $email=$_POST["email"];
            $psw=$_POST["userpass"];
            $role=$_POST["role"];
//            $header=$_POST["header"];
            $psw_confirm = $_POST["confirm"];
            
            if($role="admin")
            {
                $rnum=0;
            }
            else if($role="student"){
                $rnum=1;
            }
//            echo $user,$rollnum,$email,$psw,$rnum; 
            if($user == "" || $psw == "" || $rollnum == ""|| $email == ""||  $role== ""||$psw_confirm=="")  
            {
                echo "<script>alert('Please confirm the integrity of information！'); history.go(-1);</script>";  
            }  
            else
            {
                if($psw == $psw_confirm)  
                {
                    $query='';
                     echo $user,$rollnum,$email,$psw,$rnum; 
                    $query = "INSERT INTO users( username, rollnumber, Email, userpass, role) VALUES ('$user',$rollnum,'$email',$psw,$rnum)";
                   $ins = mysqli_query($link,$query);
                   if($ins)  
                        {  
                            echo "<script>alert('Success');</script>";  
                        }  
//                     $num =  mysqli_num_rows($ins);
//                     echo $num;
////                    mysqli_connect("smartyskills","root","");   //连接数据库  
////                    mysql_select_db("test");  //选择数据库  
////                    mysql_query("set names 'gdk'"); //设定字符集  
//                    $sql = "INSERT INTO users( username, rollnumber, Email, userpass, role) VALUES (
//                            . $user,$rollnum,$email,$psw,$rnum)"; //SQL语句  
//                    $result = mysql_query($sql);    //执行SQL语句  
//                    $num = mysql_num_rows($result); //统计执行结果影响的行数  
//                    if($num)    //如果已经存在该用户  
//                    {  
//                            echo "<script>alert('username exited'); history.go(-1);</script>";  
//                    }  
//                    else    //不存在当前注册用户名称  
//                    {  
////                        $sql_insert = "insert into users (username,rollnumber,Email,userpass,role,header) values('$user','$rollnum','$email,'$psw','$role','$header')";  
////                        $res_insert = mysqli_query($sql_insert);  
//                        //$num_insert = mysql_num_rows($res_insert);  
////                        if($res_insert)  
////                        {  
//                            echo "<script>alert('Register success！'); history.go(-1);</script>";  
//                        }  
//                        else  
//                        {  
//                            echo "<script>alert('The system is busy. Please wait a moment！'); history.go(-1);</script>";  
//                        }  
//                    } 
            }
                else
                {
                    echo "<script>alter('Passwords does not match!');history.go(-1);</script>";
                }
            }
        }
        else
        {
            echo"<script>alter('submit fault!');history.go(-1);</script>";
        }
    ?>
