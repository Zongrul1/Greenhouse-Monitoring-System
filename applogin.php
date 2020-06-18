<?php  
 header("Content-Type: text/html;charset=utf-8"); 
$user=$_POST["username"];
$psw=$_POST["password"];
if($user == "" || $psw == "")  
        {  
            echo "fail1";//失败
        }  
        else  
        {  
            mysql_connect("localhost","root1","123456");  
            mysql_select_db("ciee"); 
            //mysql_query("set names 'gbk'");  
            $sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[password]'";  
            $result = mysql_query($sql);  
            $num = mysql_num_rows($result);  
            if($num)  
            {  
                echo "success";//成功
            }  
            else  
            {  
                echo "fail2";//失败
            }  
        }  
		
		

?>