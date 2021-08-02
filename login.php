<?php
include 'connection.php';
        if(isset($_POST["button"])&&$_POST["button"]=="Login")
        {
            $user = $_POST["rollnumber"];  
            $psw = $_POST["userpass"];  
            if($user == "" || $psw == "")  
            {  
                    echo "<script>alert('Please write rollnumber and password！'); history.go(-1);</script>";  
            }  
            else  
            {  
//                mysqli_connect("smartyskills","root","");
//                mysqli_select_db("test");  
//                mysql_query("set names 'gbk'");  
                $sql = "select rollnumber,userpass from users where rollnumber = '$user' and userpass = '$psw'";  
                $result = mysqli_query($link,$sql);  
//                $num = mysqli_num_rows($result); 
                if($result) 
                {  
                    echo "<script>alert('success');</script>";
                }  
                else  
                {  
                    echo "<script>alert('rollnumber or password wrong！');history.go(-1);</script>";  
                }  
            }  
        }  
        else 
        {  
            echo "<script>alert('Submission failure！'); history.go(-1);</script>";  
        }
    ?>